<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */   
class Hycube_Notfound_Block_Adminhtml_Attempt extends Hycube_Notfound_Block_Adminhtml_Abstract
{
    public function __construct()
    {
        $this->_header    = 'Failed Login Attempts';
        $this->_modelName = 'attempt';
        parent::__construct();
    }
}