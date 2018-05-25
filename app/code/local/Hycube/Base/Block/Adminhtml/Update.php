<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Base
 */ 
class Hycube_Base_Block_Adminhtml_Update extends Mage_Adminhtml_Block_Widget_Form
{
    protected $_moduleHelper;
    
    protected function _getModuleHelper()
    {
        if (!$this->_moduleHelper)
        {
            $controllerModule = Mage::app()->getRequest()->getControllerModule();
            $this->_moduleHelper = Mage::helper("ambase/module")->init($controllerModule);
        }
        
        return $this->_moduleHelper;
    }
    
    function isNewVersionAvailable()
    {
        return $this->isSubscribed() && $this->_getModuleHelper()->isNewVersionAvailable();
    }
    
    function getModuleTitle()
    {
        return $this->_getModuleHelper()->getModuleTitle();
    }
    
    function getModuleLink()
    {
        return $this->_getModuleHelper()->getModuleLink();
    }
    
    function getModuleCode()
    {
        return $this->_getModuleHelper()->getModuleCode();
    }
    
    function getLatestVersion()
    {
        return $this->_getModuleHelper()->getLatestVersion();
    }
    
    function getCloseUrl(){
        return Mage::helper("adminhtml")->getUrl("adminhtml/ambase_base/closeUpdate", array(
            'code' => $this->getModuleCode()
        ));
    }
    
    function getUnsubscribeUrl(){
        return Mage::helper("adminhtml")->getUrl("adminhtml/system_config/edit/section/ambase", array(
        
        ));
    }
    
    function isSubscribed(){
        return $this->_getModuleHelper()->isSubscribed();
    }
}