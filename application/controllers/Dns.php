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

        while (($buffer = fgets($myfile, 4096)) !== false) {
            $read[] = $buffer;
        }

        // $data = fread($myfile,filesize("/vagrant/named/$item"));
        // return $data;
        // print_r($data);
        // $read = nl2br($data);
        // var_dump( explode( '\n', $read) );
        // var_dump($read);
        // fclose($myfile);

        $data = array('read' => $read);

        $this->load->view('Dns/editnamed',$data);
    }
    public function viewnamed($item)
    {
        # code...
        $myfile = fopen("/vagrant/named/$item", "r") or die("Unable to open file!");
        $data = fread($myfile,filesize("/vagrant/named/$item"));
        // return $data;
        // print_r($data);
        $read = nl2br("$data.\n");
        fclose($myfile);

        $data = array('read' => $read);

        $this->load->view('Dns/viewnamed',$data);
    }
}
