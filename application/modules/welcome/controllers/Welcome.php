<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	*/
	public function __construct(){
		parent::__construct();
		$this->load->model('Post');
		$this->load->model('Service');
		$this->load->model('Industry');
		$this->load->model('Customer');
	}

	public function index()
	{
		$this->data['home_page'] = 1;
		$this->data['posts'] = $this->Post->find_last_post(5,0);
		$this->data['services'] = $this->Service->find(4,0);
		$this->data['industries'] = $this->Industry->find(3,0);
		$this->data['customers'] = $this->Customer->findAll();
		$this->data['last_record'] =  $this->Post->find_active_show_home_page(100,0,null);
		$this->load_theme('home');
	}
}
