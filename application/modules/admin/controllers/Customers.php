<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 29/07/2018
 * Time: 21:29
 */

class Customers extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->allow_group_access(array('admin'));

		$this->load->model('Customer');
		$this->data['parent_menu'] = 'customer';

	}

	public function index(){
		$config['base_url'] = site_url('admin/customers/index/');
		$config['total_rows'] = count($this->Customer->find());
		$config['per_page'] = 10;
		$config["uri_segment"] = 4;

		$user_id = null;

		if(!in_array('admin', $this->current_groups)){
			$user_id = $this->session->userdata('user_id');
		}

		if ($this->input->get('q')):
			$q = $this->input->get('q');
			$this->data['customers'] = $this->Customer->find($config['per_page'], $this->uri->segment(4),$user_id, $q);
			if (empty($this->data['customers'])) {
				$this->session->set_flashdata('message', message_box('Data not found!','danger'));
				redirect('admin/customers/index');
			}
			$config['total_rows'] = count($this->data['customers']);
		else:
			$this->data['customers'] = $this->Customer->find($config['per_page'], $this->uri->segment(4),$user_id);
		endif;
		$this->data['pagination'] = $this->bootstrap_pagination($config);

		$this->load_admin('customers/index');
	}

	public function add(){

		$this->form_validation->set_rules('name', 'name', 'required|is_unique[customers.name]');
		$this->form_validation->set_error_delimiters('', '<br/>');
		if ($this->form_validation->run() == TRUE) {

			$data = $_POST;
			$this->Customer->create($data);
			$this->session->set_flashdata('message', message_box('New customer has been saved','success'));
			redirect('admin/customers');
		}

		$this->load_admin('customers/add');
	}

	function edit($id = null) {
		if ($id == null) {
			$id = $this->input->post('id');
		}

		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('content', 'content', '');
		$this->form_validation->set_error_delimiters('', '<br/>');

		if ($this->form_validation->run() == TRUE) {
			$data = array
			(
				'name' => $this->input->post('name'),
				'featured_image' => $this->input->post('featured_image')
			);

			$this->Customer->update($data,$id);
			$this->session->set_flashdata('success', 'Customer updated');
			redirect('admin/customers');
		}
		$this->data['customer'] = $this->Customer->findById($id);
		$this->data['customers'] = $this->Customer->findAll();
		$this->load_admin('customers/edit');
	}

	public function delete($id = null){
		if(!empty($id)){
			$this->Customer->delete($id);
			$this->session->set_flashdata('message',message_box('Customer has been deleted','success'));
			redirect('admin/customers/index');
		}else{
			$this->session->set_flashdata('message',message_box('Invalid id','danger'));
			redirect('admin/customers/index');
		}
	}
}
