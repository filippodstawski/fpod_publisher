<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		if(isset($this->session->logged_in['id'])==true)
		{
			redirect('panel/my_albums', 'refresh');
		}
	}

	public function login()
	{
		$error=null;
		if(isset($_POST['email']) AND $_POST['email']!=""){
			$result = $this->checkLogin($_POST['email'], $_POST['password']);
			if($result)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
						'id' => $row->id,
						'email' => $row->email
					);
					$this->session->set_userdata('logged_in', $sess_array);
					redirect('panel/my_albums', 'refresh');
				}
			}else{
				$error=true;
			}
		}else{
		}
		$contentData = array(
			'error' => $error
		);
		$content = $this->load->view('login_page', $contentData, true);
		$data = array(
			'content' => $content,
			'board_login' => true
		);
		$this->load->view('templates/template_auth',$data);
	}
	
	public function register()
	{
		if(isset($_POST['email'])){
			$dbData = array( 
			   'email' => $_POST['email'], 
			   'password' => $_POST['password'] 
			); 
			$this->db->insert("user", $dbData);
		}else{
		}
		$contentData = array(
		);
		$content = $this->load->view('register', $contentData, true);
		$data = array(
			'content' => $content,
			'board_register' => true
		);
		$this->load->view('templates/template_auth',$data);
	}
	
	public function checkLogin($email, $password)
	{
		$this->db->select('id, email, password');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->limit(1);
 
		$query = $this->db->get();
	 
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
}
