<?php

/**
 * Log collection.
 */
class Contactlab_Hubcommons_Model_Resource_Log_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {

    /**
     * Construct.
     */
    public function _construct() {
        $this->_init("contactlab_hubcommons/log");
    }

}
