<?php
class Blog extends Ci_Controller{
    public function __Construct(){
        parent::__Construct();
    }
    public function index(){
        $this->load->view('Blog/blog');
    }
}
