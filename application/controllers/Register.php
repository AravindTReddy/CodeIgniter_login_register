 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Register extends CI_Controller
 {

 	public function __construct()
  {
  parent::__construct();
  $this->load->database();
  $this->load->helper('url');
  }
  //loading via constructor or you can do this from autoload.php


  public function index()
 {

   $this->load->helper('form');

   if($this->input->post('register'))
    {

    if($_FILES)
    {

       $image = $this->do_upload();

    }

    $n=$this->input->post('name');
    $e=$this->input->post('email');
    $p=$this->input->post('pass');


    $que=$this->db->query("select * from user_login where user_email='".$e."'");
    $row = $que->num_rows();
    if($row)
    {
    $data['error']="<h3 style='color:red'>This user already exists</h3>";
    }
    else
    {
    $que=$this->db->query("insert into user_login values('','$n','$e','$p')");

    $data['error']="<h3 style='color:blue'>Your account created successfully !!</h3>";
    }

    }
    $this->load->view('student_registration',@$data);



 }

 public function do_upload()
 {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    $this->load->library('upload', $config);
    $this->upload->do_upload('image_file');
    $data = $this->upload->data();
    return $data['file_name'];
 }
}
