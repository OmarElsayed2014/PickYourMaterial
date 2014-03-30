<?php

class Application_Model_Material extends Zend_Db_Table_Abstract
{
    protected $_name = "material";
    
    function getMaterialTypes($courseId) {
        $select = $this->select()->distinct()->from("material",array("materialType"))->where("courseId = $courseId");
        return $this->fetchAll($select)->toArray();
    }
    
    function getMaterialsByType($courseId,$materialType) {
        $select = $this->select()->where("materialType='$materialType'")->where("courseId='$courseId'");
        return $this->fetchAll($select)->toArray();
    }

    
    function addMaterial($courseId,$materialType,$name) {
        $row = $this->createRow();
        $row->name = $name;
        $row->materialType = $materialType;
        $row->downloadTimes = 0;
        $row->link = "default";
        $row->status = "default";
        $row->courseId = $courseId;
        
        $row->save();
        return $row->getPrimaryKey();
    }
    
}

