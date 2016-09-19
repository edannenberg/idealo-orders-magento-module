<?php
/*
   Copyright 2016 idealo internet GmbH

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

/**
 * Source class for cancellation reason options
 */
class Idealo_Direktkauf_Model_Source_CancellationReasons
{
    
    /**
     * Return cancellation reason options
     * 
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'CUSTOMER_REVOKE', 'label' => Mage::helper('idealo_direktkauf')->__('Customer-revocation')),
            array('value' => 'MERCHANT_DECLINE', 'label' => Mage::helper('idealo_direktkauf')->__('Rejected by merchant')),
            array('value' => 'RETOUR', 'label' => Mage::helper('idealo_direktkauf')->__('Return')),
        );
    }

}