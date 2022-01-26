# Magento2 AutoCopyright
Updates copyright info with current year

## Install with Composer
\* = in production please use the `--keep-generated` option

 - Install the module by running `composer require delgraf/module-autocopyright`
 - Enable the module by running `php bin/magento module:enable Delgraf_AutoCopyright`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## Uninstall with Composer
\* = in production please use the `--keep-generated` option

 - Remove database data by running `php bin/magento module:uninstall -r Delgraf_AutoCopyright`
 - Remove extension by running `composer remove delgraf/module-autocopyright`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`
