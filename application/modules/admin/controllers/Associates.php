<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 13/10/2018
 * Time: 23:00
 */

class Associates extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Associate');

        $this->allow_group_access(array('admin','members'));
        $this->data['parent_menu'] = 'associate';
        $this->data['page_title'] = 'Associates';
    }

    function index() {
        $this->data['associates'] = $this->Associate->findAll();
        $this->load_admin('associates/index');
    }

    function add() {
        $this->form_validation->set_rules('name', 'name', 'required|is_unique[services.name]');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
                'describe' => $this->input->post('describe'),
                'mail' => $this->input->post('mail'),
                'phone' => $this->input->post('phone'),
                'tel' => $this->input->post('tel'),
                'position' => $this->input->post('position'),
                'facebook_link' => $this->input->post('facebook_link'),
                'googleplus_link' => $this->input->post('googleplus_link'),
                'twiter_link' => $this->input->post('twiter_link'),
                'instagram_link' => $this->input->post('instagram_link'),
                'type' => 'associate',
                'featured_image' => $this->input->post('featured_image')
            );
            $this->Associate->create($data);
            $this->db->insert_id();
            $this->session->set_flashdata('success', 'Associate has been saved');
            redirect('admin/associates');
        }
        $this->data['associates'] = $this->Associate->findAll();
        $this->load_admin('associates/add');
    }

    function edit($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name' => $this->input->post('name'),
                'describe' => $this->input->post('describe'),
                'mail' => $this->input->post('mail'),
                'phone' => $this->input->post('phone'),
                'tel' => $this->input->post('tel'),
                'position' => $this->input->post('position'),
                'facebook_link' => $this->input->post('facebook_link'),
                'googleplus_link' => $this->input->post('googleplus_link'),
                'twiter_link' => $this->input->post('twiter_link'),
                'instagram_link' => $this->input->post('instagram_link'),
                'type' => 'associate',
                'featured_image' => $this->input->post('featured_image')
            );

            $this->Associate->update($data,$id);
            $this->session->set_flashdata('success', 'Associate updated');
            redirect('admin/associates');
        }
        $this->data['associate'] = $this->Associate->findById($id);
        $this->data['associates'] = $this->Associate->findAll();
        $this->load_admin('associates/edit');
    }

    public function delete($id = null){
        if(!empty($id)){
            $this->Associate->delete($id);
            $this->session->set_flashdata('message',message_box('Associate has been deleted','success'));
            redirect('admin/associates/index');
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));
            redirect('admin/associates/index');
        }
    }
}