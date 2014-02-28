<?php

/**
 * @category    Foggyline
 * @package     Foggyline_Cctoolbar
 * @copyright   Copyright (c) Branko Ajzele <ajzele@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Foggyline_Cctoolbar_Model_Observer {

    private $_helper;
    private $_store;
    

    public function __construct() {
        $this->_helper = Mage::helper('foggyline_cctoolbar');
        $this->_store = Mage::app()->getStore();
    }

    public function setDefaultDirection($observer) {
        if (!$this->_helper->isModuleOutputEnabled()) {
            return;
        }

        if ($observer->getEvent()->getBlock() instanceof Mage_Catalog_Block_Product_List_Toolbar) {
            $observer->getEvent()->getBlock()->setDefaultDirection($this->_helper->getDefaultDirection($this->_store));
        }
    }
    
    public function setTemplate($observer) {
        if (!$this->_helper->isModuleOutputEnabled()) {
            return;
        }

        if ($observer->getEvent()->getBlock() instanceof Mage_Catalog_Block_Product_List_Toolbar) {
            $observer->getEvent()->getBlock()->setTemplate('foggyline/cctoolbar/catalog/product/list/toolbar.phtml');
        }
    }    

}
