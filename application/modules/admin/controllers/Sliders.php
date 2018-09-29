<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 20/08/2018
 * Time: 22:50
 */

class Sliders extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->allow_group_access(array('admin'));

        $this->load->model('Slider');
        $this->data['parent_menu'] = 'slider';

    }

    function index() {
        $config['base_url'] = site_url('admin/sliders/index/');
        $config['total_rows'] = count($this->Slider->find());
        $config['per_page'] = 10;
        $config["uri_segment"] = 4;
        $user_id = null;

        if(!in_array('admin', $this->current_groups)){
            $user_id = $this->session->userdata('user_id');
        }
        $this->data['sliders'] = $this->Slider->find($config['per_page'], $this->uri->segment(4),$user_id);
        $this->data['status'] = $this->Slider->status;
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->load_admin('sliders/index');
    }

    public function add(){

        $this->form_validation->set_rules('title', 'title', 'required|is_unique[slider.title]');
        $this->form_validation->set_error_delimiters('', '<br/>');
        if ($this->form_validation->run() == TRUE) {
            $data = array
            (
                'title' => $this->input->post('title'),
                'featured_image' => $this->input->post('featured_image'),
                'status' => $this->input->post('status')
            );
            $this->Slider->create($data);
            $this->session->set_flashdata('message', message_box('new slider image has been saved','success'));
            redirect('admin/sliders');
        }
        $this->data['status'] = $this->Slider->status;
        $this->load_admin('sliders/add');
    }

    function edit($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', '');
        $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $data = array
            (
                'title' => $this->input->post('title'),
                'featured_image' => $this->input->post('featured_image'),
                'status' => $this->input->post('status')
            );

            $this->Slider->update($data,$id);
            $this->session->set_flashdata('success', 'Slider image updated');
            redirect('admin/sliders');
        }
        $this->data['slider'] = $this->Slider->findById($id);
        $this->data['status'] = $this->Slider->status;
        $this->data['sliders'] = $this->Slider->findAll();
        $this->load_admin('sliders/edit');
    }

    public function delete($id = null){
        if(!empty($id)){
            $this->Slider->delete($id);
            $this->session->set_flashdata('message',message_box('Slider image has been deleted','success'));
            redirect('admin/sliders/index');
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));
            redirect('admin/sliders/index');
        }
    }
}
