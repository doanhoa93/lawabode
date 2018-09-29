<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 02/08/2018
 * Time: 20:13
 */

class Galleries extends My_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Gallery');
	}

	public function index()
	{
        $this->data['galleries'] = $this->Gallery->find(10,0);
		$config['base_url'] = site_url('blog/');
		$this->load_theme('galleries/index');
	}
}
