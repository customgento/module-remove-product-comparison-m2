<?php

declare(strict_types=1);

namespace CustomGento\RemoveProductComparison\Plugin;

class RemoveCompareUrlPlugin
{
    public function afterGetAddToCompareUrl(): string
    {
        return '';
    }
}
