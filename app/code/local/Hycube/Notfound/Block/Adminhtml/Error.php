<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */   
class Hycube_Notfound_Block_Adminhtml_Error extends Hycube_Notfound_Block_Adminhtml_Abstract
{
    public function __construct()
    {
        $this->_header    = 'System Errors';
        $this->_modelName = 'error';
        parent::__construct();
    }
}