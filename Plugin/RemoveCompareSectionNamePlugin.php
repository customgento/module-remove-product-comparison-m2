<?php

declare(strict_types=1);

namespace CustomGento\RemoveProductComparison\Plugin;

use Magento\Customer\CustomerData\SectionPool;

class RemoveCompareSectionNamePlugin
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetSectionNames(SectionPool $sectionPool, array $result): array
    {
        $result = array_diff($result, ['compare-products', 'recently_compared_product']);

        return array_values($result);
    }
}
