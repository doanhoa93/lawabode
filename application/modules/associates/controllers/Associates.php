<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 13/10/2018
 * Time: 23:00
 */

class Associates  extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Associate');
    }

    public function index()
    {
        $this->data['associates'] = $this->Associate->findAll();
        $this->load_theme('associates/index');
    }

    public function detail($id = null) {
        if ($id == null) {
            $id = $this->input->post('id');
        }
        $this->data['associate'] =  $this->Associate->findById($id);
        $this->load_theme('associates/detail');
    }
}
