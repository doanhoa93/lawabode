<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends MY_Controller {

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
		$this->load->model('Contact');
	}

	public function index()
	{
		$this->data['home_page'] = 1;
		$this->load_theme('contact/index');
	}

    public function sendcontact()
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('subject', 'subject', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = $_POST;
            $data['status'] = 0;
            $this->Contact->create($data);
        }
        $this->session->set_flashdata('message',message_box('You are send contact to admin.','success'));
        redirect('contacts');
    }

    public function sendmail()
    {
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

        //Email content
        $htmlContent = '<h1>Sending email via SMTP server</h1>';
        $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

        $this->email->to('hoa.cristiano@gmail.com');
        $this->email->from('hoa9x3@gmail.com','Quang Hoa');
        $this->email->subject('How to send email via SMTP server in CodeIgniter');
        $this->email->message($htmlContent);

//Send email
        $this->email->send();
    }
}
