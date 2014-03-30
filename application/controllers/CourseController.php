<?php

class CourseController extends Zend_Controller_Action
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
        $request = $this->getRequest();
        $courseForm = new Application_Model_Course();
        $materialForm = new Application_Model_Material();
        
        $courseId = $request->getParam("id");
        if(isset($courseId)) {
            $this->view->materialTypes = $materialForm->getMaterialTypes($courseId);
            $this->view->courseName = $courseForm->getCourseName($courseId);
            $this->view->courseId = $courseId;
            $this->view->userType = "user";
                
        }
        
    }

    public function getmaterialAction()
    {
       $materialModel = new Application_Model_Material();
       $courseModel = new Application_Model_Course();
       $request = $this->getRequest();
       
       $courseId = $request->getParam("courseId");
       $materialType = $request->getParam("mat");
       
       $this->view->materials = $materialModel->getMaterialsByType($courseId,$materialType);
       $this->view->courseName = $courseModel->getCourseName($courseId);
       $this->view->courseId = $courseId;
       $this->view->userType = "user";
       $this->view->materialType = $materialType;
    }


}













