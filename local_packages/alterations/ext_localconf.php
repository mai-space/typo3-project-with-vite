<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or exit('Access denied.');

// Customize Backend Login
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendFavicon'] = 'EXT:alterations/Resources/Public/Backend/Login/favicon.ico';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['backendLogo'] = 'EXT:alterations/Resources/Public/Backend/Login/backend-logo.svg';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginBackgroundImage'] = 'EXT:alterations/Resources/Public/Backend/Login/background.jpg';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginFootnote'] = '© 2023 by Joel Maximilian Mai';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginHighlightColor'] = '#FFB86C';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogo'] = 'EXT:alterations/Resources/Public/Backend/Login/logo.png';
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['backend']['loginLogoAlt'] = 'Maispace Logo';

// Register user tsConfig
ExtensionManagementUtility::addUserTSConfig(
    'EXT:alterations/Configuration/TsConfig/user.tsconfig'
);
