<?php
defined('TYPO3_MODE') || die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('z7_blog_rss', 'Configuration/TypoScript','Blog (RSS-Feed)');
});
