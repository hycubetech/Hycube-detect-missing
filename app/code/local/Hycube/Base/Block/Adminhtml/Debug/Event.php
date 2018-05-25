<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Base
 */
class Hycube_Base_Block_Adminhtml_Debug_Event extends Mage_Adminhtml_Block_Widget_Form
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('hycube/ambase/debug/event.phtml');
    }

    function getEventsList()
    {
        return Mage::helper('ambase')->getEventsList();
    }
}
