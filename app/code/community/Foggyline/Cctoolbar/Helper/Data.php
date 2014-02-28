<?php

/**
 * @category    Foggyline
 * @package     Foggyline_Cctoolbar
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Branko Ajzele (http://foggyline.net/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Foggyline_Cctoolbar_Helper_Data extends Mage_Core_Helper_Abstract {

    const CONFIG_ACTIVE = 'catalog/foggyline_cctoolbar/active';
    const CONFIG_ATTRIBUTE_LABEL_MAPPINGS = 'catalog/foggyline_cctoolbar/attribute_label_mappings';
    const CONFIG_DEFAULT_ASC_LABEL = 'catalog/foggyline_cctoolbar/default_asc_label';
    const CONFIG_DEFAULT_DESC_LABEL = 'catalog/foggyline_cctoolbar/default_desc_label';
    const CONFIG_DEFAULT_DIRECTION = 'catalog/foggyline_cctoolbar/default_direction';
    const CONFIG_HIDE_SORT_BY_LABEL = 'catalog/foggyline_cctoolbar/hide_sort_by_label';
    const CONFIG_HIDE_VIEW_AS_LABEL = 'catalog/foggyline_cctoolbar/hide_view_as_label';
    const CONFIG_MERGE_SORT_DIR = 'catalog/foggyline_cctoolbar/merge_sort_dir';
    const CONFIG_HIDE_DIRECTION = 'catalog/foggyline_cctoolbar/hide_direction';

    public function isModuleEnabled($moduleName = null) {
        if (Mage::getStoreConfig(self::CONFIG_ACTIVE) == '0') {
            return false;
        }

        return parent::isModuleEnabled($moduleName = null);
    }

    public function getMergeSortDir($store = null) {
        if (Mage::getStoreConfig(self::CONFIG_MERGE_SORT_DIR, $store) == '0') {
            return false;
        }

        return true;
    }

    public function getAttributeLabelMappings($store = null) {
        $mappings = Mage::getStoreConfig(self::CONFIG_ATTRIBUTE_LABEL_MAPPINGS, $store);
        $mappings = explode("\n", $mappings);

        $_mappings = array();

        foreach ($mappings as $mapping) {
            $mapping = trim($mapping);
            if (empty($mapping)) {
                continue;
            }

            $_mapping = explode(';', $mapping);
            $_mappings[$_mapping[0]] = array($_mapping[1], $_mapping[2]);
        }

        return $_mappings;
    }

    public function getDefaultAscLabel($store = null) {
        return Mage::getStoreConfig(self::CONFIG_DEFAULT_ASC_LABEL, $store);
    }

    public function getDefaultDescLabel($store = null) {
        return Mage::getStoreConfig(self::CONFIG_DEFAULT_DESC_LABEL, $store);
    }

    public function getDefaultDirection($store = null) {
        return Mage::getStoreConfig(self::CONFIG_DEFAULT_DIRECTION, $store);
    }

    public function getHideSortByLabel($store = null) {
        if (Mage::getStoreConfig(self::CONFIG_HIDE_SORT_BY_LABEL, $store) == '0') {
            return false;
        }

        return true;
    }

    public function getHideViewAsLabel($store = null) {
        if (Mage::getStoreConfig(self::CONFIG_HIDE_VIEW_AS_LABEL, $store) == '0') {
            return false;
        }

        return true;
    }

    public function getHideDirection($store = null) {
        if (Mage::getStoreConfig(self::CONFIG_HIDE_DIRECTION, $store) == '0') {
            return false;
        }

        return true;
    }    
    
}
