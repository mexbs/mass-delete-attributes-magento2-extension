<?php
namespace Mexbs\ProductAttributesMassAction\Test\Integration\Controller;

class ProductAttributesGridTest extends \Magento\TestFramework\TestCase\AbstractBackendController
{
    /**
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadFixture
     */
    public function testCategoryDisplaysCorrectProducts()
    {
        $this->dispatch('backend/catalog/product_attribute/index');

        $this->assertContains('<option value="delete">Delete</option>', $this->getResponse()->getBody());
    }
}
