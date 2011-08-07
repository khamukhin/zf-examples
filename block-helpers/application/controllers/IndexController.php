<?php

class IndexController extends Zend_Controller_Action
{
    public function init()
    {
        //some init code
    }

    public function indexAction()
    {
        //add blocks to page
        $this->_helper->_block->add('userLogin');
        $this->_helper->_block->add('wellcomeMessage');
    }
}

