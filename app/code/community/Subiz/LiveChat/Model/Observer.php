<?php

/**
 * Subiz Live Chat Extension
 *
 * @category Subiz
 * @package Subiz_LiveChat
 * @copyright Copyright (c) 2015 Subiz, Inc. (http://www.subiz.com)
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Model observer class
 */
class Subiz_LiveChat_Model_Observer
{
  public function clearCacheAfterChangeConfig()
  {
    try {
      $allTypes = Mage::app()->useCache();
      foreach($allTypes as $type => $blah) {
        Mage::app()->getCacheInstance()->cleanType($type);
      }
    } catch (Exception $e) {
      Mage::logException($e->getMessage());
    }
  }
}