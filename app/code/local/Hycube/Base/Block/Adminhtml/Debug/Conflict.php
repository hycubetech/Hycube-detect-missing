<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Base
 */ 
class Hycube_Base_Block_Adminhtml_Debug_Conflict extends Hycube_Base_Block_Adminhtml_Debug_Base
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('hycube/ambase/debug/conflict.phtml');        
    }
    
    function getPossibleConflictsList(){
        return Mage::helper("ambase")->getPossibleConflictsList();
    }
    
    function getFixUrl($object, $module, $rewrite){
        return Mage::helper("adminhtml")->getUrl("adminhtml/ambase_base/fix", array(
            "object" => $object,
            "module" => $module,
            "rewrite" => $rewrite
        ));
    }
    
    function getRollbackUrl($object, $module, $rewrite){
        return Mage::helper("adminhtml")->getUrl("adminhtml/ambase_base/rollback", array(
            "object" => $object,
            "module" => $module,
            "rewrite" => $rewrite
        ));
    }
    
    function hasConflict($rewrites){
        $ret = FALSE;
        foreach($rewrites as $rewrite){
            if (strpos($rewrite, "Hycube") === FALSE){
                $ret = TRUE;
                break;
            }
        }
        return $ret;        
    }
    
    function conflictResolved($codePool, $rewrites){
        $ret = FALSE;
        krsort($rewrites);
        
        $extendsClasses = $rewrites;
        
        foreach($rewrites as $rewriteIndex => $class){
            unset($extendsClasses[$rewriteIndex]);
            
            if (count($extendsClasses) > 0){
                $classPath = $this->getClassPath($rewrites, $codePool, $rewriteIndex);
                $pureClassName = Hycube_Base_Model_Conflict::getPureClassName($class);
                
                $lines = file($classPath); 
                foreach($lines as $line) 
                {
                    if(strpos($line, $pureClassName) !== FALSE){
                        $ret = TRUE;
                        break;
                    }
                }
            }
        }
        
        return $ret;
    }
}
