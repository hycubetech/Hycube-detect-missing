<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Base
 */ 
class Hycube_Base_Block_Adminhtml_Debug_Rewrite extends Hycube_Base_Block_Adminhtml_Debug_Base
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('hycube/ambase/debug/rewrite.phtml');        
    }
    
    function getRewritesList(){
        return Mage::helper("ambase")->getRewritesList();
    }
}
