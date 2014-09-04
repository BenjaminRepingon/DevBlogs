<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library( 'email' );
	}

	public function index()
	{
		$this->load->model( 'm_article' );
		$this->load->model( 'm_category' );
		$articles = $this->m_article->select( '*' );
		foreach ( $articles as $article )
		{
			$article->category_name = $this->m_category->select_by_id( 'name', $article->id_category )[0]->name;
		}
		$data['articles'] = $articles;
		load_container( $this, 'home', $data );
	}

	public function register()
	{
		$this->load->model( 'm_user' );
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_email' );
		$this->form_validation->set_rules( 'namespace', 'Namespace', 'trim|required|xss_clean|callback_check_namespace' );
		$this->form_validation->set_rules( 'password', 'Mot de passe', 'trim|required|xss_clean|min_length[5]' );

		if ( $this->form_validation->run() )
		{
			$this->m_user->add( $this->input->post( 'email' ), $this->input->post( 'password' ), $this->input->post( 'namespace' ) );
			redirect( 'Home' );
		}
		else
			load_container( $this, 'register' );
	}

	public function login()
	{
		$this->load->model( 'm_user' );
		$this->form_validation->set_rules( 'email', 'Email', 'trim|required|xss_clean|valid_email|callback_check_email' );
		$this->form_validation->set_rules( 'password', 'Mot de passe', 'trim|required|xss_clean|min_length[5]' );
		if ( $this->form_validation->run() )
		{
			if ( $this->m_user->check_id( $this->input->post( 'email' ), $this->input->post( 'password' ) ) )
			{
				$data = array( 'login' => $this->input->post( 'email' ), 'logged' => true );
				$this->session->set_userdata( $data );
				redirect( 'Home' );
			}
			else
			{
				$data['error'] = 'Mauvais identidiants';
				load_container( $this, 'login', $data );
			}
		}
		else
			load_container( $this, 'login' );
	}

	public function editor()
	{
		$this->form_validation->set_rules( 'editor', 'Editor', 'trim|required|xss_clean' );
		if ( $this->form_validation->run() )
		{
			$this->load->model( 'm_article' );
			$this->m_article->add( "name", $this->input->post( 'editor' ), 0 );
			redirect( 'Home' );
		}
		else
			load_container( $this, 'editor' );
	}
}
