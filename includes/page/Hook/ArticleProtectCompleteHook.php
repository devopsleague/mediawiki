<?php

namespace MediaWiki\Page\Hook;

use MediaWiki\Page\WikiPage;
use MediaWiki\User\User;

/**
 * This is a hook handler interface, see docs/Hooks.md.
 * Use the hook name "ArticleProtectComplete" to register handlers implementing this interface.
 *
 * @stable to implement
 * @ingroup Hooks
 */
interface ArticleProtectCompleteHook {
	/**
	 * This hook is called after an article is protected.
	 *
	 * @since 1.35
	 *
	 * @param WikiPage $wikiPage WikiPage that was protected
	 * @param User $user User who did the protection
	 * @param array $protect Set of restriction keys
	 * @param string $reason Reason for protect
	 * @return bool|void True or no return value to continue or false to abort
	 */
	public function onArticleProtectComplete( $wikiPage, $user, $protect, $reason );
}
