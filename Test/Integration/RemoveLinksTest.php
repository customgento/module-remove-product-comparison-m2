<?php

declare(strict_types=1);

namespace CustomGento\RemoveProductComparison\Test\Integration;

use Magento\Catalog\Helper\Product\Compare as ProductCompareHelper;
use Magento\TestFramework\TestCase\AbstractController;

class RemoveLinksTest extends AbstractController
{
    /**
     * @var array
     */
    private $unwantedHtml;

    protected function setUp(): void
    {
        parent::setUp();
        /** @var ProductCompareHelper $productCompareHelper */
        $productCompareHelper = $this->_objectManager->create(ProductCompareHelper::class);
        $productCompareUrl    = $productCompareHelper->getAddUrl();
        $this->unwantedHtml   = [$productCompareUrl, 'Magento_Catalog/js/view/compare-products'];
        foreach ($this->unwantedHtml as $unwantedHtml) {
            $this->unwantedHtml[] = json_encode($unwantedHtml);
        }
    }

    /**
     * @magentoDataFixture Magento/Catalog/_files/product_simple.php
     */
    public function testNoCompareLinkOnProductPage(): void
    {
        $this->dispatch('/catalog/product/view/id/1');
        $body = $this->getResponse()->getBody();
        foreach ($this->unwantedHtml as $unwantedHtml) {
            self::assertNotContains($unwantedHtml, $body);
        }
    }

    /**
     * @magentoDataFixture Magento/Catalog/_files/category.php
     */
    public function testNoCompareLinkOnCategoryPage(): void
    {
        $this->dispatch('/catalog/category/view/id/333');
        $body = $this->getResponse()->getBody();
        foreach ($this->unwantedHtml as $unwantedHtml) {
            self::assertNotContains($unwantedHtml, $body);
        }
    }
}
