<?php

class Example_Tooltip_Model_Observer
{
    /**
     * Hook that allows us to edit the form that is used to create and/or edit attributes.
     * @param Varien_Event_Observer $observer
     */
    public function addFieldToAttributeEditForm($observer)
    {
        // Add an extra field to the base fieldset:
        $fieldset = $observer->getForm()->getElement('base_fieldset');
        $fieldset->addField('tooltip', 'text', array(
            'name' => 'tooltip',
            'label' => Mage::helper('core')->__('Tooltip'),
            'title' => Mage::helper('core')->__('Tooltip')
        ));
    }
}