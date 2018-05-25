<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */  
class Hycube_Notfound_Model_Log extends Hycube_Notfound_Model_Abstract
{
    protected $modelName = 'log';

    public function hasRedirect()
    {
        return $this->getResource()->hasRedirect($this->getRequestPath(), $this->getStoreId());
    }

}