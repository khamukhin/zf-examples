<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    //init resourse type for blocks
    protected function _initResourceLoader()
    {
        $loader = new Zend_Loader_Autoloader_Resource(
            array(
            	'basePath' => APPLICATION_PATH,        
            	'namespace' => ''
            )
        );
        
        $loader->addResourceType('block', 'blocks', 'Block');
    }
    
    //init block helper
    protected function _initHelpers()
    {
        Zend_Controller_Action_HelperBroker::addHelper(
            new Project_Controller_Action_Helper_Block()
        );
    }
}

