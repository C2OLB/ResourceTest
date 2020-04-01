<?php
namespace c2\ResourceTest\Model;

use Magento\Framework\Model\AbstractModel;
use c2\ResourceTest\Model\ResourceModel\TestRes as ResourceModel;

class TestRes extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
