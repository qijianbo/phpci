<?php
class Dns extends Ci_Controller{
    public function __Construct(){
        parent::__Construct();
    }
    public function index(){
        $this->load->view('Dns/dns');
    }
    public function changes()
    {
    	# code...
    	$dir="/vagrant/named";
		$file=scandir($dir);
        $data['my_list'] = $file;
    	$this->load->view('Dns/changes',$data);
    }
    public function editnamed($item)
    {
        # code...
        $myfile = fopen("/vagrant/named/$item", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("/vagrant/named/$item"));
        fclose($myfile);
    }
}
