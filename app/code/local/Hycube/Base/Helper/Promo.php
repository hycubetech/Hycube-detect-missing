<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Base
 */  
class Hycube_Base_Helper_Promo extends Mage_Core_Helper_Abstract
{
    function getNotificationsCollection()
    {
        $collection = null;
        $inbox = Mage::getModel("adminnotification/inbox");

        if ($inbox) {
            $collection = $inbox->getCollection();

            if ($collection) {
                $collection->getSelect()
                        ->where('title like "%hycube%" or description like "%hycube%" or url like "%hycube%"')
                        ->where('is_read != 1')
                        ->where('is_remove != 1');
            }

        }

            
        return $collection;
    }
    
    function isSubscribed()
    {
        return Mage::getStoreConfig('ambase/feed/promo') == 1;
    }
}
