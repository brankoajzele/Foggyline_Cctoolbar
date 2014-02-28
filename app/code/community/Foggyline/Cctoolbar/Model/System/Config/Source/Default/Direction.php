<?php

/**
 * @category    Foggyline
 * @package     Foggyline_Cctoolbar
 * @author      Branko Ajzele <ajzele@gmail.com>
 * @copyright   Copyright (c) Branko Ajzele (http://foggyline.net/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Foggyline_Cctoolbar_Model_System_Config_Source_Default_Direction {

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray() {
        return array(
            array('value' => 'asc', 'label' => Mage::helper('foggyline_cctoolbar')->__('Asc.')),
            array('value' => 'desc', 'label' => Mage::helper('foggyline_cctoolbar')->__('Desc.')),
        );
    }

}
