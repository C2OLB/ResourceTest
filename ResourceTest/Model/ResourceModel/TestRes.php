<?php

namespace c2\ResourceTest\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TestRes extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('ResourceTest_table', 'id_column');
    }
}
