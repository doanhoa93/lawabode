<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 27/07/2018
 * Time: 21:21
 */

class Industries extends MY_Controller
{
    function __construct() {
        parent::__construct();
        /*$this->allow_group_access(array('admin'));*/
        $this->allow_group_access(array('admin','members'));
        $this->load->model('Industry');
		$this->data['parent_menu'] = 'industry';
    }

    function index() {
        $this->data['industries'] = $this->Industry->findAll();
        $this->load_admin('industries/index');
    }

    function add() {
        $this->form_validation->set_rules('name', 'name', 'required|is_unique[industries.name]');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
				'featured_image' => $this->input->post('featured_image'),
            );
            $this->Industry->create($data);
            $this->db->insert_id();
            $this->session->set_flashdata('success', 'Industry has been saved');
            redirect('admin/industries');
        }
        $this->data['industries'] = $this->Industry->findAll();
        $this->load_admin('industries/add');
    }

    function edit($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data = array
            (
				'name' => $this->input->post('name'),
				'featured_image' => $this->input->post('featured_image')
            );

            $this->Industry->update($data,$id);
            $this->session->set_flashdata('success', 'Industry updated');
            redirect('admin/industries');
        }
        $this->data['industry'] = $this->Industry->findById($id);
        $this->data['industries'] = $this->Industry->findAll();
        $this->load_admin('industries/edit');
    }

	public function delete($id = null){
		if(!empty($id)){
			$this->Industry->delete($id);
			$this->session->set_flashdata('message',message_box('Industry has been deleted','success'));
			redirect('admin/industries/index');
		}else{
			$this->session->set_flashdata('message',message_box('Invalid id','danger'));
			redirect('admin/industries/index');
		}
	}
}
