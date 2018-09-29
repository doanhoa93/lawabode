<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 27/09/2018
 * Time: 22:20
 */

class Contacts extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->allow_group_access(array('admin'));
        $this->load->model('Contact');
    }

    public function index(){

        $config['base_url'] = site_url('admin/contacts/index/');
        $config['total_rows'] = count($this->Contact->find());
        $config['per_page'] = 10;
        $config["uri_segment"] = 4;

        $this->data['contacts'] = $this->Contact->findNotReplied($config['per_page'], $this->uri->segment(4));

        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->load_admin('contacts/index');
    }

    public function findReplied(){
        $config['base_url'] = site_url('admin/contacts/index/');
        $count = $this->Contact->findNotReplied();
        echo json_encode($count);
    }

    public function reply($id){
        $this->data['contact']  = $this->Contact->findById($id);
        $this->load_admin('contacts/reply');
    }

    public function sendmail(){
        $id = $this->input->post('id');
        $this->load->library('email');
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'hoa9x3@gmail.com',
            'smtp_pass' => 'Cr7@1993',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");

        $mailTo = $this->input->post('mail');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->to($mailTo);
        $this->email->from('hoa9x3@gmail.com','Lawabode administrator');
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();

        $data['status'] = 1;
        $this->Contact->update($data,$id);
        $this->session->set_flashdata('message',message_box('You are replied contact from '.$mailTo,'success'));
        redirect('admin/contacts/index');
    }

    public function delete($id){
        if(!empty($id)){
            $this->Customer->delete($id);
            $this->session->set_flashdata('message',message_box('Contact has been deleted','success'));
            redirect('admin/contacts/index');
        }else{
            $this->session->set_flashdata('message',message_box('Invalid id','danger'));
            redirect('admin/contacts/index');
        }
    }
}