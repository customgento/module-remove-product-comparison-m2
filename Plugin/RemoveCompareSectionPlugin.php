<?php

declare(strict_types=1);

namespace CustomGento\RemoveProductComparison\Plugin;

use Magento\Customer\CustomerData\SectionPoolInterface;

class RemoveCompareSectionPlugin
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetSectionsData(SectionPoolInterface $sectionPool, array $result): array
    {
        unset($result['compare-products']);

        return $result;
    }
}
