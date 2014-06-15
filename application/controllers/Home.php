<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('home');
		$this->load->model('Category_m');
		$this->Category_m->del_by_name('kop', true);
	}
}
