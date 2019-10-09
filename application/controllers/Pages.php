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
    $data['images'] = $this->Panel_model->get_pics();
    $data['posts']=$this->Panel_model->get_posts();
    $data['team_image']=$this->Panel_model->get_group_pic();
    $data['upcoming']=$this->Panel_model->get_up_event();

    if($page==="register"){
        $this->load->view('templates/header', $data);
        $this->load->view('templates/adminbar',$data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/adminfooter', $data);
    }else{


    $this->load->view('templates/header', $data);
    $this->load->view('pages/'.$page, $data);
    $this->load->view('templates/footer', $data);}

    }
    public function login()
    {
        if ($this->session->userdata('role')>='1')
    {
            redirect('admin');
    }
    $data['title'] = ucfirst('login'); // Capitalize the first letter



    $this->load->view('admin/login', $data);
    }




    }

?>