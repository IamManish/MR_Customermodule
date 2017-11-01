<?php
require_once "Mage/Customer/controllers/AccountController.php";  
class MR_Customermodule_Customer_AccountController extends Mage_Customer_AccountController{

    public function postDispatch()
    {
        parent::postDispatch();
        Mage::dispatchEvent('controller_action_postdispatch_adminhtml', array('controller_action' => $this));
    }


}
				