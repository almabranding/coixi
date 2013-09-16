<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('index/js/custom.js');
    }

    function index() {
        $this->view->render('head',true);  
        $this->view->render('header',true);  
        $this->view->render('index/start',true);
        $this->view->Allpage = $this->model->getAllPage();
        foreach ($this->view->Allpage as $value) {
            $this->view->page=$value;
            $this->view->gallery=$this->model->getGallery($value['id']);
            switch ($value['template']) {
                case 1:
                    $this->view->render('gallery/index',true);
                    break;
                case 2:
                    $this->view->render('text/index',true);
                    break;
            }
        }
        $this->view->render('index/end',true);
        $this->view->render('footer',true);  
    }

}