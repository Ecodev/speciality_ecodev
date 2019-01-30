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

# Display flush system cache
$GLOBALS['TYPO3_CONF_VARS']['SYS']['clearCacheSystem'] = '1';

$GLOBALS['TYPO3_CONF_VARS']['BE']['elementVersioningOnly'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['BE']['interfaces'] = ''; # backend,frontend
$GLOBALS['TYPO3_CONF_VARS']['BE']['lockIP'] = '4';
$GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'] = '8192';
$GLOBALS['TYPO3_CONF_VARS']['BE']['sessionTimeout'] = '32400'; // 9 hours admin access
$GLOBALS['TYPO3_CONF_VARS']['BE']['warning_mode'] = '2';
$GLOBALS['TYPO3_CONF_VARS']['FE']['lifetime'] = '31536000'; //for frontend user
$GLOBALS['TYPO3_CONF_VARS']['FE']['lockIP'] = '4';
$GLOBALS['TYPO3_CONF_VARS']['FE']['permalogin'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['png_truecolor'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['USdateFormat'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['ddmmyy'] = 'd.m.Y';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['hhmm'] = 'g:i a';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['loginCopyrightShowVersion'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['maxFileNameLength'] = '255';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['recursiveDomainSearch'] = '1';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['serverTimeZone'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['textfile_ext'] = 'txt,html,htm,css,tmpl,js,sql,xml,csv,php,php3,php4,php5,php6,phpsh,inc,ts';

// http://foobar.lamp-solutions.de/howtos/typo3/typo3-tuning/3111/
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['syslogErrorReporting'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['belogErrorReporting'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '127.0.0.1,31.171.251.42'; // web1 31.171.251.42
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = 1;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = -1;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandler'] = 'TYPO3\CMS\Core\Error\ErrorHandler';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '2';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = 'error_log,,2;syslog,LOCAL0,,3';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_errorDLOG'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_exceptionDLOG'] = '0';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandlerErrors'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['exceptionalErrors'] = 0;

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
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'file';
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
} elseif ($applicationContext === 'Development/Fiacre') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'fiacre@ecodev.ch';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['development_redirect_to'] = 'fiacre@ecodev.ch';

    $GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path"] = '/usr/local/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path_lzw"] = '/usr/local/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'GraphicsMagick';

} elseif ($applicationContext === 'Development/Samuel') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'samuel@ecodev.ch';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['development_redirect_to'] = 'samuel@ecodev.ch';

    $GLOBALS['TYPO3_CONF_VARS']['GFX']["im"] = '1';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path"] = '/usr/local/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path_lzw"] = '/usr/local/bin/';
    $GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'GraphicsMagick';

} elseif ($applicationContext === 'Development/Marc') {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'marc@ecodev.ch';
    $GLOBALS['TYPO3_CONF_VARS']['MAIL']['development_redirect_to'] = 'marc@ecodev.ch';

    #$GLOBALS['TYPO3_CONF_VARS']['GFX']["im"] = '1';
    #$GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path"] = '/usr/local/bin/';
    #$GLOBALS['TYPO3_CONF_VARS']['GFX']["processor_path_lzw"] = '/usr/local/bin/';
    #$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'gm';
}
