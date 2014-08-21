<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('container/header/default');
		$this->load->view('container/nav/default');

		$this->load->view('home');

		$this->load->view('container/sidebar/default');
		$this->load->view('container/footer/default');
	}
	
	public function register()
	{
		$this->load->view('container/header/default');
		$this->load->view('container/nav/default');
		
		$this->load->view('register');
		
		$this->load->view('container/sidebar/default');
		$this->load->view('container/footer/default');
	}
}
