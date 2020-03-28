<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		// $array = array('detail_produk_1.jpg','detail_produk_2.jpg','detail_produk_3.jpg');
		// $test = serialize($array);
		// $test2= unserialize($test);
		// echo "$test";
		// var_dump($test2);
		// exit();

		$this->load->view('layout/front-end/header');
		$this->load->view('front-end/v_home');
		$this->load->view('layout/front-end/footer');
	}
}
