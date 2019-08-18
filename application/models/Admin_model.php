<?php

class Admin_model extends CI_Model{
    public function __construct() {
		$this->load->database();
	}
    public function sub($email){
        $this->db->insert('subs',array('email'=>$email));
        return "<h4>Subscription Succesfull!!</h4>
        <p>You will get latest event and other important notifications on your email</p>";
        
    }
    public function sign_up($username, $email, $name ,$password){
		$data = array(
			'username'=>$username,
			'email'=>$email,
			'name'=>$name,
			'password'=>$password,
			'role'=>'0'
		);
		return $this->db->insert('users',$data);
	}

	public function login_user($uname, $psw) {
		$username = $uname;
		$password = $psw;
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		if ($query) {
			return $query->row_array();
		}
		else {
			return FALSE;
		}
	}
	public function get_users(){
		$this->db->order_by('id','DESC');
		$query=$this->db->get('users');
		return $query->result_array();
	}
	public function get_admins(){
		$this->db->order_by('id','DESC');
		$query=$this->db->get_where('users',array('role'=>'1'));
		return $query->result_array();
	}
	public function m_admin($username){
		$this->db->where('username',$username);
		return $this->db->update('users',array('role'=>'1'));
	}
	public function rem_admin($username){
		$this->db->where('username',$username);
		return $this->db->update('users',array('role'=>'0'));
	}
}




?>