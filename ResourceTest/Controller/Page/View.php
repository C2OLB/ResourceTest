<?php

namespace c2\ResourceTest\Controller\Page;

use Magento\Framework\App\Action\Action;

class View extends Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();

        // TODO: Implement execute() method.
    }
}
