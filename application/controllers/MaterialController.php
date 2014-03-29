<?php

class MaterialController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function addAction()
    {
        // action body
    }

    public function editAction()
    {
        // action body
    }

    public function deleteAction()
    {
        // action body
    }

    public function viewAction()
    {
        $file = "/home/omar/zend.pdf";
        
        $fp = fopen($file, "r") ;

        header("Cache-Control: maxage=1");
        header("Pragma: public");
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=".$filename."");
        header("Content-Description: PHP Generated Data");
        header("Content-Transfer-Encoding: binary");
        header('Content-Length:' . filesize($file));
        ob_clean();
        flush();
        while (!feof($fp)) {
           $buff = fread($fp, 512);
           print $buff;
        }
        exit;   
    }

    public function listAction()
    {
        // action body
    }


}











