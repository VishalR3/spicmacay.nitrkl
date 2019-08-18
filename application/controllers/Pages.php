<?php
    class Pages extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
        }

    public function view($page = 'home')
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
    {
            show_404();
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $data['image'] = $this->Panel_model->get_pics();


    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);
    }
    }

?>