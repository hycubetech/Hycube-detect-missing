<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */
class Hycube_Notfound_Model_Mysql4_Attempt_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('amnotfound/attempt');
    }
    
    public function addStartDateFilter($date)
    {
        $this->addFieldToFilter('date', array('gt'=>$date));
    }  
    
    public function addIpFilter($ip)
    {
        $this->addFieldToFilter('client_ip', $ip);
    }      
}