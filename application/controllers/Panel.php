<?php
    class Panel extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
        }
        public function index(){
    
            $data['title'] = "Admin Panel";
            $data['posts']=$this->Panel_model->get_posts();
            $data['team_image']=$this->Panel_model->get_group_pic();
            $data['upcoming']=$this->Panel_model->get_up_event();
            
        
            $this->load->view('templates/header', $data);
            $this->load->view('admin/Panel', $data);
            $this->load->view('templates/footer', $data);
        }
        public function create(){
            $data['title']="Create Event Post";

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('artist', 'Artist', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');

            if($this->form_validation->run()=== FALSE){
                $this->load->view('templates/header',$data);
            $this->load->view('admin/create', $data);
            $this->load->view('templates/footer');


            }else{
                $config['upload_path']='./assets/img/posts/';
                $config['allowed_types']='gif|jpg|png|jpeg';
                $config['max_size']='16777215';
                $config['max_width']='3000';
                $config['max_height']='3000';
                $this->load->library('upload', $config);
                $post_image = "noimage.jpg";
                

	            if ($this->upload->do_upload('userfile')) {
                    $post_image = $this->upload->data('file_name');}
                    else{
                        $errors= array('error'=> $this->upload->display_errors());
                        $post_image = "noimage.jpg";
                    }

                $this->Panel_model->create_post($post_image);
                redirect("panel");
            }        
        }
        public function delete($id){
            $this->Panel_model->delete_post($id);
            redirect("panel");
        }
        public function edit($slug){
            $data['post']=$this->Panel_model->get_posts($slug);
            if(empty($data['post'])){
                show_404();
            }
            $data['title']='Edit Event Post';

            $this->load->view('templates/header',$data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/footer');

        }
        public function update(){
            $config['upload_path']='./assets/img/posts/';
            $config['allowed_types']='gif|jpg|png|jpeg';
            $config['max_size']='16777215';
                $config['max_width']='3000';
                $config['max_height']='3000';
                $this->load->library('upload', $config);
                $post_image = "noimage.jpg";
                

	            if ($this->upload->do_upload('userfile')) {
                    $post_image = $this->upload->data('file_name');}
                    else{
                        $errors= array('error'=> $this->upload->display_errors());
                        $post_image = "noimage.jpg";
                    }

            $this->Panel_model->Update_post($post_image);
            redirect("panel");
        }
        public function comment(){
            $this->Panel_model->comment();
        }
        public function upcoming(){
            $config['upload_path']='./assets/img/events/';
            $config['allowed_types']='jpg|png|jpeg|gif';
            $config['max_size']='41943040';
                $config['max_width']='6000';
                $config['max_height']='6000';
                $this->load->library('upload', $config);
                $post_image = "noimage.jpg";
                

	            if ($this->upload->do_upload('userfile')) {
                    $post_image = $this->upload->data('file_name');}
                    else{
                        $data['error']= array('error'=> $this->upload->display_errors());
                        $post_image = "notupimage.jpg";
                        $this->load->view('templates/header');
                        $this->load->view('admin/Panel', $data);
                        $this->load->view('templates/footer');
                    }

            $this->Panel_model->up_event($post_image);
            redirect("panel");
        }
        public function team(){
            $config['upload_path']='./assets/img/';
            $config['allowed_types']='jpg|png|jpeg|gif';
            $config['max_size']='83886080';
                $config['max_width']='8000';
                $config['max_height']='8000';
                $this->load->library('upload', $config);
                $post_image = "noimage.jpg";
                

	            if ($this->upload->do_upload('userfile')) {
                    $post_image = $this->upload->data('file_name');}
                    else{
                        $errors= array('error'=> $this->upload->display_errors());
                        $post_image = "notupimage.jpg";
                    }

            $this->Panel_model->team_photo($post_image);
            redirect("panel");
        }
        public function gallery_pics(){
            $data['title']="Upload Gallery Pics";
            $data['images'] = $this->Panel_model->get_pics();

            $this->form_validation->set_rules('caption', 'Caption', 'required');

            if($this->form_validation->run()=== FALSE){
                $this->load->view('templates/header',$data);
            $this->load->view('admin/gallery', $data);
            $this->load->view('templates/footer');


            }else{
                $config['upload_path']='./assets/img/gallery/';
                $config['allowed_types']='gif|jpg|png|jpeg';
                $config['max_size']='83886080';
                $config['max_width']='8000';
                $config['max_height']='8000';
                $this->load->library('upload', $config);
                $image = "noimage.jpg";
                

	            if ($this->upload->do_upload('userfile')) {
                    $image = $this->upload->data('file_name');}
                    else{
                        $errors= array('error'=> $this->upload->display_errors());
                        $image = "notupimage.jpg";
                    }

                $this->Panel_model->gallery_photo($image);
                redirect("gallery_pics");
            }     

        }
    }

?>