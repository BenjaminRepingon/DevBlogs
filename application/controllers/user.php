<?php if ( !defined( 'BASEPATH' ) ) exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		echo "user";
	}

	public function page( $namespace = NULL )
	{
		if ( $namespace == NULL )
			redirect( base_url() . 'home' );
		$data['namespace'] = $namespace;
		load_container( $this, 'user', $data );
	}
}
