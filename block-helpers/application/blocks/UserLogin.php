<?php
/**
 * 
 * Example for reusable block
 * @author khamukhin
 *
 */
class Block_UserLogin extends Zend_Controller_Action_Helper_Abstract
{
    private $_view;
    
    public function __construct($view)
    {
        $this->_view = $view;
    }

    public function init()
    {
        $this->createUserLoginBlock();
    }

    public function createUserLoginBlock()
    {
        $layout = Zend_Controller_Front::getInstance()->getParam('bootstrap')->getResource('Layout');
        $layout->userLogin = $this->_view->partial('user_login.phtml');
    }

}