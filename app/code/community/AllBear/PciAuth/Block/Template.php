<?php

class AllBear_PciAuth_Block_Template extends Mage_Core_Block_Template
{
    private $_helper;

    protected function _construct()
    {
        parent::_construct();
        $this->_helper = Mage::helper('allbear_pciauth');
    }

    protected function _toHtml()
    {
        if (!$this->_helper->isEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }
}