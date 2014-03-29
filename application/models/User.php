<?php

class Application_Model_User extends Zend_Db_Table_Abstract
{
    protected $_name = "user";
    
    function addUser($userData) {
        $row = $this->createRow();
        $row->fname = $userData['fname'];
        $row->lname = $userData['lname'];
        $row->gender = $userData['gender'];
        $row->password = md5($userData['password']);
        $row->email = $userData['email'];
        $row->pp = $userData['pp'];
        $row->type = $userData['type'];
        
        $row->save();
    }

}

