<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 29/09/2018
 * Time: 22:45
 */

class Blogs extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Blog');
    }

    public function index()
    {
        $this->data['page_layout'] = 'archive';

        $config['base_url'] = site_url('blog/');
        $config['total_rows'] = count($this->Blog->find_active());
        $config['per_page'] = 5;
        $config["uri_segment"] = 2;
        $this->data['posts'] =  $this->Blog->find_active(100,0);
        $this->data['pagination'] = $this->bootstrap_pagination($config);
        $this->load_theme('blogs/index');
    }

    public function read($slug){
        $this->data['page_layout'] = 'single';
        $this->data['post'] = $this->Post->find_by_slug($slug);
        $this->data['page_title'] = $this->data['post']['title'];
        $this->load_theme('posts/read');
    }

    public function detail($id){
        $this->data['page_layout'] = 'single';
        $this->data['post'] = $this->Post->find_by_id($id);
        $this->data['last_record'] = $this->Post->find_last_record(5,0);
        $this->data['page_title'] = $this->data['post']['title'];
        $endPath1 = explode("/",$_SERVER['REQUEST_URI']);
        if (in_array('news', $endPath1)) {
            $this->data['end_path'] = 'News/detail/'+$id;
        }
        $this->load_theme('posts/detail');
    }
}
