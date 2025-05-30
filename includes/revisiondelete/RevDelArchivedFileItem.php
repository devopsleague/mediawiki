<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup RevisionDelete
 */

use MediaWiki\Api\ApiResult;
use MediaWiki\FileRepo\File\ArchivedFile;
use MediaWiki\FileRepo\File\File;
use MediaWiki\FileRepo\File\LocalFile;
use MediaWiki\MediaWikiServices;
use MediaWiki\RevisionList\RevisionListBase;
use MediaWiki\SpecialPage\SpecialPage;

/**
 * Item class for a filearchive table row
 *
 * @property ArchivedFile $file
 * @property RevDelArchivedFileList $list
 */
class RevDelArchivedFileItem extends RevDelFileItem {
	/** @var LocalFile */
	protected $lockFile;

	public function __construct( RevisionListBase $list, $row ) {
		parent::__construct( $list, $row );
		$this->lockFile = MediaWikiServices::getInstance()->getRepoGroup()->getLocalRepo()
			->newFile( $row->fa_name );
	}

	protected static function initFile( $list, $row ) {
		return ArchivedFile::newFromRow( $row );
	}

	public function getIdField() {
		return 'fa_id';
	}

	public function getTimestampField() {
		return 'fa_timestamp';
	}

	public function getAuthorIdField() {
		return 'fa_user';
	}

	public function getAuthorNameField() {
		return 'fa_user_text';
	}

	public function getAuthorActorField() {
		return 'fa_actor';
	}

	public function getId() {
		return $this->row->fa_id;
	}

	public function setBits( $bits ) {
		$dbw = $this->dbProvider->getPrimaryDatabase();
		$dbw->newUpdateQueryBuilder()
			->update( 'filearchive' )
			->set( [ 'fa_deleted' => $bits ] )
			->where( [
				'fa_id' => $this->row->fa_id,
				'fa_deleted' => $this->getBits(),
			] )
			->caller( __METHOD__ )->execute();

		return (bool)$dbw->affectedRows();
	}

	protected function getLink() {
		$date = $this->list->getLanguage()->userTimeAndDate(
			$this->file->getTimestamp(), $this->list->getUser() );

		# Hidden files...
		if ( !$this->canViewContent() ) {
			$link = htmlspecialchars( $date );
		} else {
			$undelete = SpecialPage::getTitleFor( 'Undelete' );
			$key = $this->file->getKey();
			$link = $this->getLinkRenderer()->makeLink( $undelete, $date, [],
				[
					'target' => $this->list->getPageName(),
					'file' => $key,
					'token' => $this->list->getUser()->getEditToken( $key )
				]
			);
		}
		if ( $this->isDeleted() ) {
			$link = '<span class="history-deleted">' . $link . '</span>';
		}

		return $link;
	}

	public function getApiData( ApiResult $result ) {
		$file = $this->file;
		$user = $this->list->getUser();
		$ret = [
			'title' => $this->list->getPageName(),
			'timestamp' => wfTimestamp( TS_ISO_8601, $file->getTimestamp() ),
			'width' => $file->getWidth(),
			'height' => $file->getHeight(),
			'size' => $file->getSize(),
			'userhidden' => (bool)$file->isDeleted( File::DELETED_USER ),
			'commenthidden' => (bool)$file->isDeleted( File::DELETED_COMMENT ),
			'contenthidden' => (bool)$this->isDeleted(),
		];
		if ( $this->canViewContent() ) {
			$ret += [
				'url' => SpecialPage::getTitleFor( 'Revisiondelete' )->getLinkURL(
					[
						'target' => $this->list->getPageName(),
						'file' => $file->getKey(),
						'token' => $user->getEditToken( $file->getKey() )
					]
				),
			];
		}
		$uploader = $file->getUploader( ArchivedFile::FOR_THIS_USER, $user );
		if ( $uploader ) {
			$ret += [
				'userid' => $uploader->getId(),
				'user' => $uploader->getName(),
			];
		}
		$comment = $file->getDescription( ArchivedFile::FOR_THIS_USER, $user );
		if ( $comment !== '' ) {
			$ret += [
				'comment' => $comment,
			];
		}

		return $ret;
	}

	public function lock() {
		return $this->lockFile->acquireFileLock();
	}

	public function unlock() {
		return $this->lockFile->releaseFileLock();
	}
}
