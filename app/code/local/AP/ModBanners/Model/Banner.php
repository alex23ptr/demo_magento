<?php
class AP_ModBanners_Model_Banner
    extends Mage_Core_Model_Abstract
{
    //init the module   
    protected function _construct()
    {
        parent::_construct();
        $this->_init('ap_modbanners/banner');
    }  
	 
}