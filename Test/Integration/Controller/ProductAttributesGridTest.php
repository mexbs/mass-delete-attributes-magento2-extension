<?php
namespace Mexbs\ProductAttributesMassAction\Test\Integration\Controller;

class ProductAttributesGridTest extends \Magento\TestFramework\TestCase\AbstractBackendController
{
    public static function loadFixture()
    {
    }
    /**
     * @magentoDbIsolation enabled
     * @magentoAppIsolation enabled
     * @magentoDataFixture loadFixture
     */
    public function testCategoryDisplaysCorrectProducts()
    {
        $this->dispatch('backend/catalog/product_attribute/index');

        $this->assertNotEquals(strpos($this->getResponse()->getBody(), '<option value="delete">Delete</option>'), FALSE);
    }
}
