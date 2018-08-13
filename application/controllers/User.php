<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$user = $this->db->get('user')->result();
		var_dump($user);
		// $this->load->view('welcome_message');
	}
}
