# Remove Product Comparison for Magento 2
Remove Product Comparison for Magento 2 removes the product comparison feature completely from Magento. Theoretically, this is as easy as removing all compare blocks from the layout. However, even when all blocks are removed, Magento still adds cookies and entries to the local storage. This module also takes care that this data is not set at all.

## Installation
- `composer require customgento/module-remove-product-comparison-m2`
- `bin/magento module:enable CustomGento_RemoveProductComparison`
- `bin/magento setup:upgrade`
- `bin/magento setup:di:compile`
- `bin/magento cache:flush`

## Configuration
There is no configuration.

## Copyright
© 2020 - present CustomGento GmbH
