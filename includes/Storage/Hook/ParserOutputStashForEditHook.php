<?php

namespace MediaWiki\Storage\Hook;

use MediaWiki\Content\Content;
use MediaWiki\Page\WikiPage;
use MediaWiki\Parser\ParserOutput;
use MediaWiki\User\User;

/**
 * This is a hook handler interface, see docs/Hooks.md.
 * Use the hook name "ParserOutputStashForEdit" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface ParserOutputStashForEditHook {
	/**
	 * This hook is called when an edit stash parse finishes, before the
	 * output is cached.
	 *
	 * @since 1.35
	 *
	 * @param WikiPage $page WikiPage of the candidate edit
	 * @param Content $content Content object of the candidate edit
	 * @param ParserOutput $output ParserOutput result of the candidate edit
	 * @param string $summary Change summary of the candidate edit
	 * @param User $user User considering the edit
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onParserOutputStashForEdit( $page, $content, $output, $summary,
		$user
	);
}
