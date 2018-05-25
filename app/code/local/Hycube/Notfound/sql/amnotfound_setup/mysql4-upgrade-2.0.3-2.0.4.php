<?php
/**
 * @author Hycube Team
 * @copyright Copyright (c) 2017 Hycube (https://www.hycube.com)
 * @package Hycube_Notfound
 */
$this->startSetup();

$this->run("ALTER TABLE `{$this->getTable('amnotfound/log')}` DROP COLUMN `status`;");

$this->endSetup();