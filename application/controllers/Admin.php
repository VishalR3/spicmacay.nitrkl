<?php
    class Admin extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function subscribe(){
            $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[subs.email]');
            if ($this->form_validation->run() == TRUE) {
            $email=$this->input->post("email");
            echo $this->Admin_model->sub($email);
            }
            else{
                echo "Email is not valid or already subscribed!!";
            }
        }
        public function signup() {
            $this->form_validation->set_rules('username', 'Username','trim|required|is_unique[users.username]');
            $this->form_validation->set_rules('email', 'Email','trim|required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password','trim|required');
        
            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $name = $this->input->post('name');
                $password = md5($this->input->post('password'));
                $this->Admin_model->sign_up($username, $email, $name ,$password);
                $this->session->set_flashdata('signup_stat', 'Sign up successful! Login to your account');
                redirect();
            }
        
            else {
                redirect();
                $this->session->set_flashdata('signup_stat', 'Sign up unsuccessful! Try again');
            }
        }
        
        public function login() {
            $this->form_validation->set_rules('username','Username','trim|required');
            $this->form_validation->set_rules('password','Password','trim|required');
        
            if ($this->form_validation->run() == TRUE) {
        
            $user = array(
                'username'=>$this->input->post('username'),
                'password'=>md5($this->input->post('password'))
            );
        
            $data = $this->Admin_model->login_user($user['username'], $user['password']);
            if ($data) {
                $this->session->set_userdata('id', $data['id']);
                $this->session->set_userdata('username', $data['username']);
                $this->session->set_userdata('email', $data['email']);
                $this->session->set_userdata('role', $data['role']);
                $this->session->set_userdata('logged_in', TRUE);
        
                $this->session->set_flashdata('login_stat','Login Successful!');
        
                redirect();
            }
        
            else {
                $this->session->set_flashdata('login_stat', 'Login unsuccessful. Try again...');
                redirect();
            }
            } else {
                redirect();
            }
        
        }
        
        public function logout() {
            $this->session->sess_destroy();
            redirect();
        }
        public function add_admin(){
            $data['users']=$this->Admin_model->get_users();
            $data['admins']=$this->Admin_model->get_admins();

            $this->load->view('templates/header');
            $this->load->view('admin/admins', $data);
            $this->load->view('templates/footer');
        }
        public function make_admin($username){
            $this->Admin_model->m_admin($username);
            redirect("add_admin");
        }
        public function remove_admin($username){
            $this->Admin_model->rem_admin($username);
            redirect("add_admin");
        }
    }
        






?>