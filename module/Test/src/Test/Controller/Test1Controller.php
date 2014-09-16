<?php

namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class Test1Controller extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

