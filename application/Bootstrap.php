<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

  /*  protected function _initPlaceholders()
    {
        $this->bootstrap('View');
        $view = $this->getResource('View');
        $view->doctype('XHTML1_STRICT');
        $view->headTitle('Pick Material')->setSeparator(' :: ');
        $view->headMeta()->appendName('keywords', 'framework, PHP')->appendHttpEquiv('Content-Type','text/html;charset=utf-8');

        
        $front = Zend_Controller_Front::getInstance();
        $front->setBaseUrl('/PickYourMaterial/public');
        $baseurl = $front->getBaseUrl();
        // Set the initial stylesheet:
        $view->headLink()->prependStylesheet($baseurl.'/css/bootstrap.min.css');
      
        // Set the initial JS to load:
        $view->headScript()->prependFile($baseurl.'/js/jquery.min.js');
        $view->headScript()->prependFile($baseurl.'/js/bootstrap.min.js');
        $view->headScript()->prependFile($baseurl.'/js/scripts.js');
           
    }*/

}