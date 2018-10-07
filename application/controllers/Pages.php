<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

/*	public function __construct()
 {
 parent::__construct();
 $this->load->database();
 $this->load->helper('url');
 }
 //loading via constructor or you can do this from autoload.php
 */

 public function login()
{

if($this->input->post('login'))
{
$e=$this->input->post('email');
$p=$this->input->post('pass');

$que=$this->db->query("select * from user_login where user_email='".$e."' and user_password='$p'");
$row = $que->num_rows();
if($row)
{
redirect('Pages/dashboard');
}
else
{
$data['error']="<h3 style='color:red'>Invalid login details</h3>";
}
}
$this->load->view('login',@$data);

if($this->input->post('register')){

	redirect('Register');
}

}

function dashboard()
{
$this->load->view('dashboard');
}
}
?>
