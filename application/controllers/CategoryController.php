<?php

class CategoryController extends Zend_Controller_Action
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
        $categoryForm = new Application_Model_Category();
        $courseForm = new Application_Model_Course();
        $data = array();
        $categories = $categoryForm->getCategories();
        
        foreach ($categories as $category) {
            $courses = $courseForm->getCoursesByCategory($category['categoryId']);
            $categoryData = array($category,$courses);
            array_push($data, $categoryData);
        }
        
        $this->view->categoriesData = $data;
    }

    public function viewAction()
    {
        // action body
    }


}











