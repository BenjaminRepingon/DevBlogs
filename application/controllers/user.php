<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
	public function index()
	{
		echo "user";
	}

	public function user( $user = NULL )
	{
		if ( $user )
			redirect( base_url() . 'home' );
		echo "user: $user";
	}
}
