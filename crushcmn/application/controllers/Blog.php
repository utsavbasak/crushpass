<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Blog
	 *	- or -
	 * 		http://example.com/index.php/Blog/index
	 *	- or - 
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Blog/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 function Blog()
	 {
	 	parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('form_helper');
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
	 }
	public function index()
	{	
		$this->ckeditor->basePath = base_url().'plugins/ckeditor/';
		/*$this->ckeditor->config['toolbar_Full'] = array(array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' ));*/
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor->config['width'] = '700px';
		$this->ckeditor->config['height'] = '300px';
		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'plugins/ckfinder');
		//To get the name of Logged in User
		if(isset($this->session->userdata['email']))
		{	
			$email=$this->session->userdata['email'];
			$name_query=$this->db->query('SELECT * from author WHERE email="'.$email.'"');
			$data['name']=$name_query->row()->name;
			$data['a_id']=$name_query->row()->id;
			//Load Create Blog page
			$this->load->view('createBlog_view',$data);
		}
		else
		{
			redirect(base_url().'index.php/login');
		}
	}
	public function see_blogs()
	{
		$data['title']="Demo Blog site";
		$data['heading']="Blogs";
		$data['blog_queries']=$this->db->query('SELECT blogs.id,title,body,author.name FROM blogs INNER JOIN author on blogs.author_id=author.id');
		$data['comment_queries']=$this->db->get('comments');
		//To get the name of Logged in User
		$email=$this->session->userdata['email'];
		$name_query=$this->db->query('SELECT * from author WHERE email="'.$email.'"');
		$data['name']=$name_query->row()->name;
		$data['a_id']=$name_query->row()->id;
		$this->load->view('blog_view',$data);
	}
	public function comment_insert()
	{
		$this->db->insert('comments',$_POST);
		redirect('Blog/see_blogs/');
	}
	public function blog_insert()
	{
		$this->db->insert('blogs',$_POST);
		redirect('Blog');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'index.php/login');
	}
}
?>