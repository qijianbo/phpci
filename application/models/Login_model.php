<?php
class Login_model extends CI_Model{
    public function __Construct()
    {
        $this->load->database();
    }
    // CREATE TABLE `uc_user` (                                  
    //        `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT, 
    //        `user` varchar(20) NOT NULL,                            
    //        `pass` char(32) NOT NULL,                               
    //        `role` enum('root','normal') NOT NULL DEFAULT 'root',   
    //        `del` decimal(1,0) NOT NULL DEFAULT '0',                
    //        PRIMARY KEY (`id`)                                      
    //      ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 
    public function login($value='')
    {
  //   	$data = array(
		// 'user' => $_POST['username'],
		// 'pass' => md5($_POST['password'])
		// );
		$query = $this->db->get_where('uc_user',array('user' => $data['user']),1,0);
		// foreach ($query->result() as $row) {
		// $pass = $row->pass;
		// }
		return ($query->result());

    } 
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return  $query->result_array();
        }
        $query = $this->db->get_where('news',array('slug' => $slug));
        return $query->row_array();   
    }
    public function set_news()
    {

        $this->load->helper('url');
		$data = array(
		'user' => $_POST['username'],
		'pass' => md5($_POST['password'])
		);
        return $this->db->insert('uc_user',$data);
        //return $this->input->post('title');
    }
}
