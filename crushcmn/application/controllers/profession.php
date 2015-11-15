<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
class profession extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/profession
	 *	- or -
	 * 		http://example.com/index.php/profession/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/profession/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function profession()
	 {
	 	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
	 }
	 function like1()
	 {
		 
	  $this->load->model('profession_model');
	  $this->profession_model->like1();
  	  $this->load->view('index');
  
  
  	 }
	public function index()
	{	
		$this->load->view('profession_view');
	}
}
?>