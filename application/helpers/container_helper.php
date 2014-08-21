<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('load_container')) {
	function load_container(CI_Controller $controller, $view, $container = null, $vars = array(), $return = FALSE)
	{
		if (is_array($container)) {
			$controller->load->view('container/header/' . $container[0]);
			$controller->load->view('container/nav/' . (isset($container[1]) ? $container[1] : $container[0]));

			$controller->load->view($view, $vars, $return);

			$controller->load->view('container/sidebar/' . (isset($container[2]) ? $container[2] : $container[0]));
			$controller->load->view('container/footer/' . (isset($container[3]) ? $container[3] : $container[0]));
		} else {
			$container = $container != null ? $container : 'default';
			$controller->load->view('container/header/' . $container);
			$controller->load->view('container/nav/' . $container);

			$controller->load->view($view, $vars, $return);

			$controller->load->view('container/sidebar/' . $container);
			$controller->load->view('container/footer/' . $container);
		}
	}
}