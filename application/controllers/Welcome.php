<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$data = array();
		$this->load->view('index', $data);
	}

	public function about()
	{
		$data = array();
		$this->load->view('about', $data);
	}

	public function classes()
	{
		$data = array();
		$this->load->view('classes', $data);
	}

	public function contact()
	{
		$data = array();
		$this->load->view('contact', $data);
	}

	public function testimonials()
	{
		$data = array();
		$this->load->view('testimonials', $data);
	}
	public function login()
	{
		$data = array();
		$this->load->view('login_view', $data);
	}
	public function register()
	{
		$data = array();
		$this->load->view('register', $data);
	}

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

}
