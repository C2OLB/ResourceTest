<?php

namespace c2\ResourceTest\Model\ResourceModel\TestRes;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class TestRes extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('c2\ResourceTest\Model\TestRes', 'c2\ResourceTest\Model\ResourceModel\TestRes');
    }
}
