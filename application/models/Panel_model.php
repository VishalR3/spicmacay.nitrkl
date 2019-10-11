<?php

    class Panel_model extends CI_Model{

        public function get_posts($slug = FALSE){
            if($slug===FALSE){
                $this->db->order_by('events.id','DESC');
                $query= $this->db->get('events');
                return $query->result_array();
            }
            $query =  $this->db->get_where('events',array('slug'=>$slug));
            $data = $query->row_array();
            $views = $data['views'];
            $views++;
            $this->db->where('slug',$slug);
            $this->db->update("events",array('views'=>$views));
            return $data;

        }
        public function create_post($post_image){
            $slug=url_title($this->input->post('title'));

            $data = array(
                'title'=>$this->input->post('title'),
                'slug'=>$slug,
                'artist'=>$this->input->post('artist'),
                'body'=>$this->input->post('body'),
                'post_image'=>$post_image
            );
            return $this->db->insert('events',$data);
        }
        public function delete_post($id){
            $this->db->where('id', $id);
            $this->db->delete('events');
            return true;
        }
        public function update_post($post_image){
            $slug=url_title($this->input->post('title'));

            $data = array(
                'title'=>$this->input->post('title'),
                'slug'=>$slug,
                'artist'=>$this->input->post('artist'),
                'body'=>$this->input->post('body'),
                'post_image'=>$post_image
            );
            $this->db->where('id', $this->input->post('id'));

            return $this->db->update('events',$data);

        }
        public function comment(){
            $post_id= $this->input->post('post');
            $data= array(
                'comment' => $this->input->post('cmt'),
                'post'=> $post_id,
                'user' => $this->input->post('user'),
                'user_role' => $this->input->post('role'),
                'status' => "Approved"
            );
            $this->db->insert("comments",$data);
            $query=$this->db->query("SELECT * FROM posts WHERE id =".$post_id);
            $post=$query->row_array();
            $comments=$post['comments']+1;
            $this->db->where("id",$post_id);
            $this->db->update('events',array("comments"=>$comments));
        }
        public function get_comment($slug){
            $post =  $this->db->get_where('events',array('slug'=>$slug));
            $data=$post->row_array();
            $post_id=$data['id'];
            $query=$this->db->get_where("comments",array('post'=>$post_id));
            $comments=sizeof($query->result_array());
            $this->db->where('id',$post_id);
            $this->db->update('events',array("comments"=> $comments));
            return $query->result_array();
        }
        public function up_event($post_image){
            $data = array(
                'title'=>$this->input->post('title'),
                'artist'=>$this->input->post('artist'),
                'date'=>$this->input->post('date'),
                'post_image'=>$post_image
            );
            return $this->db->insert('event_database',$data);
        }
        public function get_up_event(){
            $this->db->order_by('id','DESC');
            $this->db->limit('1');
            $query=$this->db->get('event_database');
            return $query->row_array();
        }
        public function team_photo($team_image){
            $data = array(
                'team_image'=>$team_image
            );
            return $this->db->insert('group_pic',$data);
        }
        public function get_group_pic(){
            $this->db->order_by('id','DESC');
            $this->db->limit('1');
            $query=$this->db->get('group_pic');
            return $query->row_array();
        }
        public function gallery_photo($image){

            $data = array(
                'caption'=>$this->input->post('caption'),
                'image'=>$image
            );
            return $this->db->insert('gallery',$data);
        }
        public function get_pics(){
            $this->db->order_by('id','DESC');
            $query=$this->db->get('gallery');
            return $query->result_array();
        }
        public function get_feedbacks(){
            $this->db->order_by('id','DESC');
            $query=$this->db->get('feedback');
            return $query->result_array();
        }


    }


?>
