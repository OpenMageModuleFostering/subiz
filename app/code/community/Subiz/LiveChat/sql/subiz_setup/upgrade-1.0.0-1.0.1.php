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

$select = $installer->getConnection()
        ->select()
        ->from($this->getTable('core/config_data'))
        ->where('path LIKE "%subiz_livechat/account%" OR path LIKE "%subiz_livechat/widget%"');
$result = $installer->getConnection()->fetchAll($select);

if ($result) {
    foreach ($result as $key => $val) {
        // insert new path, keep value
        switch ($val['path']) {
            case 'subiz_livechat/account/license_id':
                $installer->getConnection()->insert($this->getTable('core/config_data'), array(
                    'path' => 'subiz_livechat/config/license_id',
                    'value' => $val['value']
                ));
                break;
            case 'subiz_livechat/widget/script':
                $installer->getConnection()->insert($this->getTable('core/config_data'), array(
                    'path' => 'subiz_livechat/config/script',
                    'value' => $val['value']
                ));
                break;
        }
        // delete old path
        $installer->getConnection()->delete($this->getTable('core/config_data'), "path='".$val['path']."'");
    }
}

Mage::getConfig()->cleanCache();

$installer->endSetup();