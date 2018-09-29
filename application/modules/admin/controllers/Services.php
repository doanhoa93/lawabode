<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 27/07/2018
 * Time: 21:21
 */

class Services extends MY_Controller
{
    function __construct() {
        parent::__construct();
        /*$this->allow_group_access(array('admin'));*/
        $this->allow_group_access(array('admin','members'));
        $this->load->model('Service');
		$this->data['parent_menu'] = 'service';
    }

    function index() {
        $this->data['services'] = $this->Service->findAll();
        $this->data['status'] = $this->Service->status;
        /*$this->data['serviceList'] = $this->Service->findList();*/
        $this->load_admin('services/index');
    }

    function add() {
        $this->form_validation->set_rules('name', 'name', 'required|is_unique[services.name]');
        $this->form_validation->set_rules('content', 'content', '');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
                'content' => $this->input->post('content'),
				'featured_image' => $this->input->post('featured_image'),
                'status' => $this->input->post('status')
            );
            $this->Service->create($data);
            $this->db->insert_id();
            $this->session->set_flashdata('success', 'Service has been saved');
            redirect('admin/services');
        }
        $this->data['services'] = $this->Service->findAll();
        $this->data['status'] = $this->Service->status;
        $this->load_admin('services/add');
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
                'content' => $this->input->post('content'),
                'status' => $this->input->post('status')
            );

            $this->Service->update($data,$id);
            $this->session->set_flashdata('success', 'Service updated');
            redirect('admin/services');
        }
        $this->data['service'] = $this->Service->findById($id);
        $this->data['services'] = $this->Service->findAll();
        $this->data['status'] = $this->Service->status;
        $this->load_admin('services/edit');
    }

	public function delete($id = null){
		if(!empty($id)){
			$this->Service->delete($id);
			$this->session->set_flashdata('message',message_box('Services has been deleted','success'));
			redirect('admin/services/index');
		}else{
			$this->session->set_flashdata('message',message_box('Invalid id','danger'));
			redirect('admin/services/index');
		}
	}
}
