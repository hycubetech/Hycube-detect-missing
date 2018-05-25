<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */
class Hycube_Notfound_Block_Adminhtml_Log_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id'; 
        $this->_blockGroup = 'amnotfound';
        $this->_controller = 'adminhtml_log';
        
        $this->_removeButton('reset');
        $this->_removeButton('delete');

        $this->_addButton('saveAndDeleteThis', array(
            'label'     => Mage::helper('adminhtml')->__('Save and Delete this Entry'),
            'onclick'   => 'saveAndDelete(\'' . $this->getUrl('*/*/save',
                array('type' => Hycube_Notfound_Helper_Data::TYPE_THIS, 'id' => $this->getRequest()->getParam('id'))) . '\')'
        ), -100);

        $this->_formScripts[] = "
            function saveAndDelete(url) {
                editForm.submit(url);
            }
        ";
    }

    public function getHeaderText()
    {
        return Mage::helper('amnotfound')->__('Create Redirect');
    }
}