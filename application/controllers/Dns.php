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
    public function viewnamed($item)
    {
        # code...
        $myfile = fopen("/vagrant/named/$item", "r") or die("Unable to open file!");
        $data = fread($myfile,filesize("/vagrant/named/$item"));
        // return $data;
        // print_r($data);
        $date = nl2br("$data.\n");
        // echo $date;
        $this->load->view('Dns/viewnamed',$date);
        fclose($myfile);
    }
    public function editnamed($item)
    {
        # code...
        $myfile = fopen("/vagrant/named/$item", "rw") or die("Unable to open file!");
        $data = fread($myfile,filesize("/vagrant/named/$item"));
        echo nl2br("$data.\n");
        fclose($myfile);
    }
}
