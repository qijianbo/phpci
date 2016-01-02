<?php
//http://www.jb51.net/article/51000.htm
class Login extends CI_Controller{
	private $pass = '';

	public function __Consturct(){
		parent::__Consturct();
		//$this->load->database();
		//$this->load->model('login_model');
		$this->load->helper(array(
			'form',
			'url',
			));
		$this->load->library('session');
	}
	public function index(){
		$this->load->library('form_validation');
		$this->load->view('user/login');
	}
	public function formsubmit(){
		$this->load->library('form_validation');
		$this->load->database();
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/login');
		}
		else {
			if (isset($_POST['submit'])&&!empty($_POST['submit'])){
				$data = array(
					'user' => $_POST['username'],
					'pass' => md5($_POST['password'])
					);
				$newdata = array(
					'username' => $data['user'],
					'userip' => $_SERVER['REMOTE_ADDR'],
					'luptime' => time()
				);
				if ($_POST['submit'] == 'login'){
					$query = $this->db->get_where('uc_user',array('user' => $data['user']),1,0);
					foreach ($query->result() as $row) {
					$pass = $row->pass;
				 	}
				    	if ($pass == $data['pass']){
				    	//$this->session->set_userdata($newdata);
				    	$this->load->view('user/success');//,$data);
				    	}
                }
                else if ($_POST['submit'] == 'register'){
				        $this->session->set_userdata($newdata);
				        $this->db->insert();
				        $this->load->view('usercenter',$data);
                    }
            else {
			 //销毁 Session
			//$this->session->sess_destroy();
			$this->load->view('/user/login');
			}
			}
		}
	}
}
