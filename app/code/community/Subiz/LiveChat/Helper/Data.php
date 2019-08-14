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
 * Helper data class
 */
class Subiz_LiveChat_Helper_data extends Mage_Core_Helper_Abstract
{

  public function getEnableWidget()
  {
    return Mage::getStoreConfig('subiz_livechat/widget/enable');
  }

  public function getLicenseId()
  {
    return Mage::getStoreConfig('subiz_livechat/account/license_id');
  }

  public function getWidgetScriptFromConfig()
  {
    return Mage::getStoreConfig('subiz_livechat/widget/script');
  }

  public function getWidgetScriptGenerateByLicenseId($licenseId)
  {
    return '<script type="text/javascript">window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",'.$licenseId.']);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>';
  }
}
