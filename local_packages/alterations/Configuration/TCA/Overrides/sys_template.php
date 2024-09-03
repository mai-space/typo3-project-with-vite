<?php

defined('TYPO3') || exit();

call_user_func(
    function ($extensionKey) {
        // Add default TypoScript (constants and setup)
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            'Client specific alterations'
        );
    },
    'alterations'
);
