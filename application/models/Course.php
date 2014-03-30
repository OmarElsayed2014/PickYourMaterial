<?php

class Application_Model_Course extends Zend_Db_Table_Abstract
{
    protected $_name = "course";
    
    function getCourseName($courseId) {
        $select = $this->select()->from("course",array("name"))->where("courseId=$courseId");

        return $this->fetchRow($select);
    }
    
    function getCoursesByCategory($categoryId) {
        $select = $this->select()->where("catId=$categoryId");
        return $this->fetchAll($select)->toArray();
    }

}

