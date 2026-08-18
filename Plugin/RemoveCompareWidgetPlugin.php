<?php

declare(strict_types=1);

namespace CustomGento\RemoveProductComparison\Plugin;

class RemoveCompareWidgetPlugin
{
    /**
     * Suppress the rendering of the product comparison widget.
     *
     * @return string
     */
    public function afterRenderApp(): string
    {
        return '';
    }
}
