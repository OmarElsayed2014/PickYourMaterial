<?php

class Application_Model_Category extends Zend_Db_Table_Abstract
{
    protected  $_name = "category";

    function getCategories() {
        return $this->fetchAll()->toArray();
    }
}

