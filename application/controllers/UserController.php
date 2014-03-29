<?php

class UserController extends Zend_Controller_Action
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

    public function listAction()
    {
        // action body
    }

    public function viewAction()
    {
        // action body
    }

    public function loginAction()
    {
       $authorization = Zend_Auth::getInstance();
        if($authorization->hasIdentity()) {
            $this->redirect(""); // Already Logged in
        }
        
        $request = $this->getRequest();
        
        if($request->isPost()) {

                $db = Zend_Db_Table::getDefaultAdapter();
                $authAdapter = new Zend_Auth_Adapter_DbTable($db,'users','email', 'password');
                
                $username = $request->getParam("username");
                $password = $request->getParam("password");
                     
                $authAdapter->setIdentity($username);
                $authAdapter->setCredential(md5($password));
                
                $result = $authAdapter->authenticate();
                
                if($result->isValid()) {
                    $auth = Zend_Auth::getInstance();
                    $storage = $auth->getStorage();
                    $storage->write($authAdapter->getResultRowObject(array('email' , 'user_id' , 'fname' , 'lname')));
                    
                    $this->redirect("post/list");

                }
                else {
                    $this->redirect("login?msg=error");
                }
        }
        else {
            
            $this->view->form = $userForm;
        }
    }


}













