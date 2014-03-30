<?php

class MaterialController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        $form = new Application_Form_Uploadmaterial();
        $this->view->assign('form', $form);
    }

    public function addAction() {
        $materialModel = new Application_Model_Material();
        $frontController = Zend_Controller_Front::getInstance();
        $baseUrl = $frontController->getBaseUrl();
        $dest_dir = "/var/www/PickYourMaterial/public/imgs";
        
        $materialType = $this->getRequest()->getParam("materialType");
        $courseId = $this->getRequest()->getParam("courseId");
        $name = $this->getRequest()->getParam("mname");
        
        $materialId = $materialModel->addMaterial($courseId, $materialType, $name);
        
        $pImage = $_FILES["myfile"]["name"];
	$imgError = $_FILES["myfile"]["error"];
	$imgType = $_FILES["myfile"]["type"];
	$imgSize = $_FILES["myfile"]["size"];
	$imgTmp = $_FILES["myfile"]["tmp_name"];

        $exten = substr($pImage, -3);
        
        $imgName = "$dest_dir/"."Material_".$materialId['matId'].".".$exten;
        
        if ($imgError > 0) {
            echo "Error:" . $imgError . "<br/>";
        } elseif ($imgSize <= 4000000) {
            if (file_exists($imgName)) {
                echo $imgName . "already exists.";
            } else {
                move_uploaded_file($imgTmp, $imgName);
                echo "Download is complete";      
            }
        } else {
            echo "File doen't match conditions";
        }
    }

    public function editAction() {
        // action body
    }

    public function deleteAction() {
        // action body
    }

    public function viewAction() {
        $file = "/home/omar/zend.pdf";

        $fp = fopen($file, "r");

        header("Cache-Control: maxage=1");
        header("Pragma: public");
        header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=" . $filename . "");
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

    public function listAction() {
        // action body
    }

    private function getFileExtension($filename) {
        $fext_tmp = explode('.', $filename);
        return $fext_tmp[(count($fext_tmp) - 1)];
    }

}
