<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */
$this->startSetup();

$this->run("
ALTER TABLE `{$this->getTable('amnotfound/log')}` ADD `request_path` varchar(255) NOT NULL AFTER `url`;
ALTER TABLE `{$this->getTable('amnotfound/log')}` ADD `status` TINYINT(1) NOT NULL AFTER `url`;
");

$this->endSetup(); 