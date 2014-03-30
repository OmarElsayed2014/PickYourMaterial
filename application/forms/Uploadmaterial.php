<?php

class Application_Form_Uploadmaterial extends Zend_Form
{

    public function init()
    {
        $frontController = Zend_Controller_Front::getInstance();
        $baseUrl = $frontController->getBaseUrl();
        
        /* Form Elements & Other Definitions Here ... */
        $this->setName('material_upload');
        $this->setAction("$baseUrl/material/add");
        $this->setAttrib('enctype','multipart/form-data');
        $this->setMethod('post');
        
        $doc_file = new Zend_Form_Element_File("doc_path");
        $doc_file->setLabel('Upload File:')
        				 ->setRequired(true)
        				 ->addValidator('Count', false, 1)
        				 ->addValidator('Size', false, 1048576)
        				 ->setMaxFileSize(1048576)
        				 ->addValidator('Extension', false, 'jpg,png,gif,pdf');
        
        $capt = new Zend_Form_Element_Text('caption');
        $capt->setLabel('Caption:')
        		 ->setAttrib('id','caption');
        
        $btn = new Zend_Form_Element_Submit('submit');
        $btn->setLabel('Upload File')
        		->setAttrib('id','submitbutton');
        
        $this->addElements(array($doc_file,$capt,$btn));
    }


}

