<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 29/07/2018
 * Time: 21:29
 */

class galleries extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->allow_group_access(array('admin'));

		$this->load->model('Gallery');
		$this->data['parent_menu'] = 'gallery';

	}

	function index() {
		$config['base_url'] = site_url('admin/galleries/index/');
		$config['total_rows'] = count($this->Gallery->find());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;
		$user_id = null;

		if(!in_array('admin', $this->current_groups)){
			$user_id = $this->session->userdata('user_id');
		}
		$this->data['galleries'] = $this->Gallery->find($config['per_page'], $this->uri->segment(4),$user_id);
		$this->data['pagination'] = $this->bootstrap_pagination($config);
		$this->load_admin('galleries/index');
	}

	public function add(){

		$this->form_validation->set_rules('title', 'title', 'required|is_unique[gallery.title]');
		$this->form_validation->set_error_delimiters('', '<br/>');
		if ($this->form_validation->run() == TRUE) {

			$data = $_POST;
			$this->Gallery->create($data);
			$this->session->set_flashdata('message', message_box('New Gallery has been saved','success'));
			redirect('admin/galleries');
		}

		$this->load_admin('galleries/add');
	}

	function edit($id = null) {
		if ($id == null) {
			$id = $this->input->post('id');
		}

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('featured_image', 'featured_image', '');
		$this->form_validation->set_error_delimiters('', '<br/>');

		if ($this->form_validation->run() == TRUE) {
			$data = array
			(
				'title' => $this->input->post('title'),
				'featured_image' => $this->input->post('featured_image')
			);

			$this->Gallery->update($data,$id);
			$this->session->set_flashdata('success', 'Gallery updated');
			redirect('admin/galleries');
		}
		$this->data['gallery'] = $this->Gallery->findById($id);
		$this->data['galleries'] = $this->Gallery->findAll();
		$this->load_admin('galleries/edit');
	}

	public function delete($id = null){
		if(!empty($id)){
			$this->Gallery->delete($id);
			$this->session->set_flashdata('message',message_box('Gallery has been deleted','success'));
			redirect('admin/galleries/index');
		}else{
			$this->session->set_flashdata('message',message_box('Invalid id','danger'));
			redirect('admin/galleries/index');
		}
	}
}
