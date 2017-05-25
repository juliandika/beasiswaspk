<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

 public function __construct(){
    parent::__construct();
    //load Login_model.php
    $this->load->model('model_login');
    //check the username is already set up or not
    if ($this->session->userdata('username')) {
     //if username is already set up, then check the level of username is admin or member
     if($this->session->userdata('level') == 'admin'){
      redirect('admin/mahasiswa');
    }elseif($this->session->userdata('level') == 'users'){
      redirect('admin/mahasiswa/create');
   }
  }
 }

 public function index(){
  $data = array('error' => ''
     );
  $this->load->view('login', $data);
 }

 //function for processing login form
 public function login_process(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
     //calling chech_user() function in Login_model.php
  $result = $this->model_login->check_user($username, $password);

  if($result->num_rows() > 0){
   foreach ($result->result() as $row) {

    $username = $row->username;
    $level = $row->status;
   }

   $newdata = array(

           'username' => $username,
           'status' => $level,
           'logged_in' => TRUE
   );

   //set up session data
   $this->session->set_userdata($newdata);
   if($this->session->userdata('status')=='admin') {
    redirect('admin/mahasiswa');
  }elseif ($this->session->userdata('level')=='users') {
    redirect('admin/mahasiswa/create');
   }
  }
  else{
   echo $username;
   echo $password;
  }
 }


}
