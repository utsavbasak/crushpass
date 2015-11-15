<?php
class Membership_model extends CI_Model{
	
	public function validate(){
		$this->db->where('email',$this->input->post('email'));
		$this->db->where('password',md5($this->input->post('password')));
		$query_result = $this->db->get('users');
		return $query_result->num_rows();
	}
	public function validate_admin(){
		$admin = 1;
		$email = $this->session->userdata('email');
		$this->db->where('email',$email);
		$this->db->where('admin',$admin);
		$query_result = $this->db->get('users');
		return $query_result->num_rows();
	}
	public function create_member(){
		$new_member_insert_data = array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')),
			'dob'=>$this->input->post('dob'),
			'admin' => 0
		);
		$insert = $this->db->insert('users',$new_member_insert_data);
		return $insert;
	}
	public function check_if_email_exists($email){
		$this->db->where('email',$email);
		$result=$this->db->get('users');
		if($result->num_rows()>0){
			return FALSE; //Email id exists
		} else {
			return TRUE;
		}
	}
	public function get_name(){
		$email = $this->session->userdata('email');
		//echo $email;
		$query = $this->db->query("SELECT * FROM users where email='$email';");
		 $name =   $query->row()->name; 	
		// echo $name;
		 return $name; 
		
		
		
	}
	public function ab(){
		echo 50;
	}
	
	public function activity(){
		//to get IP ADDRESS
		$ipaddress = 'unknown';
      /*  if ($_SERVER['HTTP_CLIENT_IP'])
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if($_SERVER['HTTP_X_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if($_SERVER['HTTP_X_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if($_SERVER['HTTP_FORWARDED_FOR'])
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if($_SERVER['HTTP_FORWARDED'])
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if($_SERVER['REMOTE_ADDR'])
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
		*/	
			//NOW storing the details info
						// $session_data = $this->session->userdata('logged_in');
      					 //  $data['username'] = $session_data['username'];

           $data = array(
                  'session_id'=>"1",
                  'ip_address'=> $ipaddress,    //$session_data['ip_address'],
				  'timestamp'=>'nno time',
                  //'user_agent'=>"testing",
                 // 'username'=>$session_data['username'],
                  
                  'data'=>"Logged in Account"
                );
        $this->db->insert('ci_sessions',$data);  
	  			//echo  $ipaddress;    
				return true; 
       
	}
}
?>