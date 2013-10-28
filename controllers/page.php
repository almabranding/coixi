<?php

class Page extends Controller {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }
    public function view($url,$pic=true) {
        $this->view->js = array('page/js/custom.js');
        $this->view->url=$url;
        $this->view->page=$this->model->getPage($url);
        $this->view->gallery=$this->model->getGallery($this->view->page['id']);
        $this->view->render('page/index');
    }
    public function lookbook() {
        $this->view->zoom=true;
        $this->view->url='lookbook';
        $this->view->page=$this->model->getPage('lookbook');
        $this->view->gallery=$this->model->getGallery($this->view->page['id']);
        $this->view->render('head',true);  
        $this->view->render('headerShop',true);
        $this->view->render('lookbook/index',true);
        $this->view->render('footerShop',true);
    }
    public function press() { 
        $this->view->zoom=true;
        $this->view->url='press';
        $this->view->page=$this->model->getPage('press');
        $this->view->gallery=$this->model->getGallery($this->view->page['id']);
        $this->view->render('head',true);  
        $this->view->render('headerShop',true);
        $this->view->render('press/index',true);
        $this->view->render('footerShop',true);  
    }
    public function contact() {
        $this->view->zoom=true;
        $this->view->url='contact';
        $this->view->page=$this->model->getPage('contact');
        $this->view->gallery=$this->model->getGallery($this->view->page['id']);
        $this->view->render('head',true);  
        $this->view->render('headerShop',true);
        $this->view->render('contact/index',true);
        $this->view->render('footerShop',true);  
    }
    public function gallery($id) {
        $this->view->page=$this->model->getPage($id);
        $this->view->gallery=$this->model->getGallery($id);
        $this->view->render('gallery/index');
    }
    public function telar($id=16) {
        $this->view->js = array('telar/js/masonry.pkgd.min.js','telar/js/custom.js');
        $this->view->gallery=$this->model->getGallery($id);
        $this->view->render('head',true);  
        $this->view->render('headerShop',true);
        $this->view->render('telar/index',true);
        $this->view->render('footerShop',true);  
    }
    
}