<?php
class AP_ModBanners_Model_Banner
    extends Mage_Core_Model_Abstract
{
    //init the module 2   
    protected function _construct()
    {
        parent::_construct();
        $this->_init('ap_modbanners/banner'); //auto
    }  
	 
}
