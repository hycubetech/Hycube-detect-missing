<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Base
 */ 
class Hycube_Base_Block_Adminhtml_Debug_Base extends Mage_Adminhtml_Block_Widget_Form
{
    function getClassPath($rewrites, $codePool, $rewriteIndex){
        return Hycube_Base_Model_Conflict::getClassPath($codePool[$rewriteIndex], $rewrites[$rewriteIndex]);
    }
}