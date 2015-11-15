<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/login
	 *	- or -
	 * 		http://example.com/index.php/login/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/login/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function login()
	 {
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
	 }
	public function index()
	{	
		$this->load->view('index');
	}
	public function admin()
	{	
		$this->load->view('admin_view');
	}
	public function signin()
	{	
		$this->load->view('login_view');
	}
	
	function signup(){
		$this->load->view('signup');
	}
	function signout(){
		$data=array(
				'email' => "NULL",
				'name' => "NULL",
				'is_logged_in' => false
			);
			$this->session->set_userdata($data);
		$this->load->view('index');
	}
	function findname(){
		$this->load->model('membership_model');
					$name = $this->membership_model->get_name();					
					echo $name;
	}
	function create_member(){
		$this->load->library('form_validation');
		
		//validation Rules
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|callback_check_if_email_exists');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]');
		$this->form_validation->set_rules('password_confirm','Password Confirmation','trim|required|matches[password]');
		
		if($this->form_validation->run()==FALSE)//Did'nt valdiate
		{
			$this->load->view('signup');
		}
		else
		{	$query=FALSE;
			$this->load->model('membership_model');
			if($query=$this->membership_model->create_member())
			{
				$data['account_created']='Your account has been created';
				
				$this->load->view('login_view',$data);;
			}
			else
			{
				$this->load->view('signup',$data);
			}
		}		
	}
	
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$result=$this->membership_model->validate();	
		if($result>0) // if the user's credential is validated
		{
			$data=array(
				'email' => $this->input->post('email'),
				//'name' => $name,
				'is_logged_in' => true
				);
				$this->session->set_userdata($data);
						
			$result_admin=$this->membership_model->validate_admin(); //admin checking
			
			if($result_admin >0)
			{
				$data=array(
				'admin' => true
				);
			}
			else
			{
				$data=array(
				'admin' => false
				);
			}
			
			$this->session->set_userdata($data);
			$name=$this->membership_model->get_name();
			$data=array(
				'name' => $name				
			);
			
			$this->session->set_userdata($data);
			
			echo $this->session->userdata('email');
			echo $this->session->userdata('name');
			echo $this->session->userdata('is_logged_in');
			
			//for handling session of user
			/*$result1 = $this->membership_model->activity();
			if($result1)
				echo "done" ;
			else
				echo ":(" ;
			*/
			redirect(base_url().'index.php/');
		}
		else
		{
				$msg = "WRONG USER NAME OR PASSWORD";
				$this->session->set_userdata('msg', $msg);
			
			redirect(base_url().'index.php/login/signin');	
		}
	}
	
	
	
	function validate_credentials_admin()
	{
		$this->load->model('membership_model');
		$result=$this->membership_model->validate_admin();	
		if($result>0) // if the user's credential is validated
		{
			
			$data=array(
				'email' => $this->input->post('email'),
				//'name' => $name,
				'is_logged_in' => true,
				'admin' => true
			);
			$this->session->set_userdata($data);
			$name=$this->membership_model->get_name();
			$data=array(
				'name' => $name				
			);
			
			$this->session->set_userdata($data);
			
			echo $this->session->userdata('email');
			echo $this->session->userdata('name');
			echo $this->session->userdata('is_logged_in');
			
			//for handling session of user
			/*$result1 = $this->membership_model->activity();
			if($result1)
				echo "done" ;
			else
				echo ":(" ;
			*/
			redirect(base_url().'index.php/');
		}
		else
		{
				$msg = "WRONG USER NAME OR PASSWORD";
				$this->session->set_userdata('msg', $msg);
			
			redirect(base_url().'index.php/login/admin');	
		}
	}
	
	
	function check_if_email_exists($requested_email){//Custom Callback Function
		$this->load->model('membership_model');
		
		$email_available=$this->membership_model->check_if_email_exists($requested_email);
		if($email_available){
			return TRUE;
			}
			else
			{
				return FALSE;
			}
	}
}
?>