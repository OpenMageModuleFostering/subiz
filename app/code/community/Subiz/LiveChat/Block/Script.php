<?php

/**
 * Subiz Live Chat Extension
 *
 * @category Subiz
 * @package Subiz_LiveChat
 * @copyright Copyright (c) 2015 Subiz, Inc. (http://www.subiz.com)
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @version 1.0.0 
 */

/**
 * Block script class
 */
class Subiz_LiveChat_Block_Script extends Mage_Core_Block_Template
{
  public function getScript()
  {
    $enable = Subiz_LiveChat_Helper_Data::getEnableWidget();
    $licenseId = Subiz_LiveChat_Helper_Data::getLicenseId();
    $script = Subiz_LiveChat_Helper_Data::getWidgetScriptFromConfig();

    if (!$enable) {
      return "";
    }
    
    if ($licenseId == "") {
      return $script;
    } else {
      return Subiz_LiveChat_Helper_Data::getWidgetScriptGenerateByLicenseId($licenseId);
    }
  }
}