<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_User');
	}
	
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
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_email');
		$this->form_validation->set_rules('namespace', 'Namespace', 'trim|required|xss_clean|callback_check_namespace');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|xss_clean|min_length[5]');
		
		if ($this->form_validation->run())
		{
			$this->m_User->add($this->input->post('email'), $this->input->post('password'), $this->input->post('namespace'));
		}
		else
		{
			echo "non";
		}
		
		$this->load->view('container/header/default');
		$this->load->view('container/nav/default');
		
		$this->load->view('register');
		
		$this->load->view('container/sidebar/default');
		$this->load->view('container/footer/default');
	}
}
