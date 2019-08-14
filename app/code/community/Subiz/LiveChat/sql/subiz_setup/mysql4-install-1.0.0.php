<?php

/**
 * Subiz Live Chat Extension
 *
 * @category Subiz
 * @package Subiz_LiveChat
 * @copyright Copyright (c) 2015 Subiz, Inc. (http://www.subiz.com)
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/* @var $this Mage_Core_Model_Resource_Setup */

$installer = $this;

$installer->startSetup();

$installer->getConnection()->insert($this->getTable('core/config_data'), array(
    'path' => 'subiz_livechat/config/enabled',
    'value' => '1'
));

$installer->endSetup();