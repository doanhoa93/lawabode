<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->allow_group_access(array('admin','members'));
		$this->data['parent_menu'] = 'dashboard';
	}

	public function index(){
		/*redirect('admin/posts');*/
		$this->data['Contacts'] = 'Ini adalah halaman admin';
		$this->load_admin('dashboard/index');
	}
}
