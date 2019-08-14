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
 * Admin controller class
 */
class Subiz_LiveChat_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action
{
  // Display subiz dashboard on iframe into magento admin area.
  public function indexAction()
  {
    $this->loadLayout()
      ->_title($this->__('Subiz Dashboard'));

    $this->getLayout()->getBlock('head')->addCss('subiz_livechat/style.css');
    $this->getLayout()->getBlock('menu')->setActive('subiz_livechat_menu/dashboard');

    $block = $this->getLayout()->createBlock(
 			'Mage_Core_Block_Template',
 			'subiz_dashboard_block',
 			array('template' => 'subiz_livechat/iframe_dashboard.phtml')
 		);
 		$this->getLayout()->getBlock('content')->append($block);

    $this->renderLayout();
  }
}
