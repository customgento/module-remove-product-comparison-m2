<?php

declare(strict_types=1);

namespace CustomGento\RemoveProductComparison\Plugin;

class RemoveCompareUrlPlugin
{
    /**
     * Suppress the add to comparison list URL.
     *
     * @return string
     */
    public function afterGetAddToCompareUrl(): string
    {
        return '';
    }
}
