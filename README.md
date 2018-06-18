# Speciality Ecodev

TYPO3 extension to ship common configuration specific to Ecodev.

Add into `AdditionalConfiguration.php` something like:

```php
// Include global configuration.
require_once (PATH_site . '../configuration/Settings.php');
require_once (PATH_site . 'typo3conf/ext/speciality_ecodev/Configuration/PHP/Typo3ConfVars.php');
```
