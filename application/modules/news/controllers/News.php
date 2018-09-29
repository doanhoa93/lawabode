<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 29/09/2018
 * Time: 14:50
 */

class News extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Post');
        $this->load->model('Category');
        $this->load->model('Tag');
    }

    public function index()
    {
        $this->data['page_layout'] = 'archive';

        $config['base_url'] = site_url('blog/');
        $config['total_rows'] = count($this->Post->find_active());
        $config['per_page'] = 5;
        $config["uri_segment"] = 2;
        $this->data['posts'] = $this->Post->find_active($config['per_page'], $this->uri->segment(2));
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->load_theme('posts/index');
    }
}