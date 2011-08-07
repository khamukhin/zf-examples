<?php 
/**
 * Helps add to pages reusable blocks
 * 
 * @author khamukhin
 *
 */
class Project_Controller_Action_Helper_Block extends Zend_Controller_Action_Helper_Abstract
{
    private $_view;
    private $_classPrefix = 'Block_';
    private $_layoutPrefix = 'block';
    
    public function add($blockName)
    {
        $helperClass = $this->_classPrefix . ucfirst($blockName);
    
        Zend_Controller_Action_HelperBroker::addHelper(
            new $helperClass(
                $this->getView()
            )
        );

        //trigger helper init
        Zend_Controller_Action_HelperBroker::getStaticHelper(ucfirst($blockName))->init();
    }
    
    public function getView()
    {
        if (null !== $this->_view) {
            return $this->_view;
        }
    
        $view = Zend_Controller_Front::getInstance()->getParam('bootstrap')->getResource('view');
        $this->_view = $view;
        return $view;
    }
}