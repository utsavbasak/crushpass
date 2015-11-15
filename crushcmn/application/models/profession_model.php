<?php
class profession_model extends CI_Model{
	
	public function random(){
		$num = array();
	 for($i=0;$i<6;$i++)
	 {
		$num[]=rand(1,1);
 	
	 }
	return $num;
	}
	public function random1_profession(){
		$id = array();
		$id = $this->random(); 
		$query = $this->db->query("SELECT * FROM profession_details where id='$id[0]';");
		 $name =   $query->row()->name; 	
		echo "$name";
	}
	public function random1_like(int $v){
		$id = array();
		$id = $this->random(); 
		$query = $this->db->query("SELECT * FROM profession_details where id='$id[0]';");
		 $like =   $query->row()->like; 	
		if($v == 0)
		{
				$like = $like -1;
				echo "You and $like ";
				echo " PEOPLE SHOW CRUSH";
		}
		else
		{
				echo " $like";		
				echo " PEOPLE SHOW CRUSH";
		}
	}
	public function random1_checklike(){
		$emailid = $this->session->userdata('email');
		$id = array();
		$id = $this->random(); 
		
		
		$query = $this->db->query("SELECT * FROM like_details where profession_id='$id[0]' and email = '$emailid'  ");
		$k = $query->num_rows() ;
		
		if($k>0){
			return TRUE; //Already LIke
		} else 
		{
			return FALSE;
		}

	}
	public function give_like(){
		$id = array();
		$id = $this->random(); 
		$query = $this->db->query("SELECT * FROM profession_details where id='$id[0]';");
		 $like =   $query->row()->like; 	
		echo "$like";
		echo " PEOPLE SHOW CRUSH";
	}
	public function like1(){
		$id = array();
		$id = $this->random(); 
		$emailid = $this->session->userdata('email');
		$new_like_insert_data = array(
			'email'=>$emailid,
			'profession_id'=>$id[0]
			
		);
		//value insert for email_id
		$insert = $this->db->insert('like_details',$new_like_insert_data);
		
		//increase the like for the profession
		$query = $this->db->query("SELECT * FROM profession_details where id='$id[0]';");
		 $like =   $query->row()->like; 	
		$like = $like +1;
		$updatedata = array(
               'like' => $like
            );
		$this->db->where('id', $id[0]);
		$this->db->update('profession_details', $updatedata); 
		//$query = $this->db->query("UPDATE profession_details SET like= $like where id='$id[0]';");
		/*echo "You and $like";
		echo " PEOPLE SHOW CRUSH";*/
	}
	
}
?>