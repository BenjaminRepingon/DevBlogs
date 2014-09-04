<?php if ( !defined( 'BASEPATH' ) ) exit('No direct script access allowed');

if ( !function_exists( 'print' ) )
{
	function print_elem( $constructor, $print, $data = null )
	{
		$constructor->load->view( 'printer/' . $print, $data );
	}
}