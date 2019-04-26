<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Add some more prefix table for the live search (the top right search)
// Usage for editor: #user:foo
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['fe_user'] = 'fe_users';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['user'] = 'fe_users';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['fe_group'] = 'fe_groups';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['group'] = 'fe_groups';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['be_user'] = 'be_users';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['be_group'] = 'be_groups';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['address'] = 'tt_address';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['news'] = 'news';

// MLC modify as needed for file and directory permissions
$GLOBALS['TYPO3_CONF_VARS']['BE']['fileCreateMask'] = '0664';
$GLOBALS['TYPO3_CONF_VARS']['BE']['folderCreateMask'] = '0775';

// company support details
$GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'typo3@ecodev.ch';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['loginCopyrightWarrantyProvider'] = 'Ecodev Sàrl';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['loginCopyrightWarrantyURL'] = 'https://ecodev.ch/';

// graphics settings
$GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path"] = '/usr/share/php/bin/';
$GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path_lzw"] = '/usr/share/php/bin/';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['TTFdpi'] = '96';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'GraphicsMagick';

#curl and filepath helpers
$GLOBALS['TYPO3_CONF_VARS']['BE']['unzip_path'] = '/usr/bin/';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['binPath'] = '/usr/local/bin,/usr/bin';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['curlUse'] = '1';

// Add configuration for Development Context
if (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->isDevelopment()) {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['debug'] = true;
    $GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = true;
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '1';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = '1';
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '0';
    #$GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = '28674';
}

$applicationContext = (string)\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext();
if ($applicationContext === 'Development/Fabien') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'fabien@ecodev.ch';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['development_redirect_to'] = 'fabien@ecodev.ch';

    $GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path"] = '/usr/local/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path_lzw"] = '/usr/local/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'ImageMagick';
} elseif ($applicationContext === 'Development/Marc') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'rolli@ecodev.ch';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['development_redirect_to'] = 'rolli@ecodev.ch';
}
