<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {
	 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->database();
		if(isset($this->session->logged_in['id'])!=true)
		{
			redirect('access/login', 'refresh');
		}
	}
	
	public function my_albums()
	{
		$contentData = array(
		);
		$content = $this->load->view('my_albums', $contentData, true);
		$data = array(
			'content' => $content,
			'board_my_albums' => true
		);
		$this->load->view('templates/template_panel',$data);
	}
	
	public function publish_album()
	{
		$contentData = array(
		);
		$content = $this->load->view('publish_album', $contentData, true);
		$data = array(
			'content' => $content,
			'board_publish_album' => true
		);
		$this->load->view('templates/template_panel',$data);
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('access/login', 'refresh');
	}
	
}
