<?php

namespace c2\ResourceTest\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;

class TestResBlock extends Template
{
    protected $_productCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory  $productCollectionFactory,
        array $data = []
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;

        parent::__construct($context, $data);
    }
    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        return $collection;
    }
}
