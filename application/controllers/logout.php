<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller{


  public function __construct(){
    parent::__construct();

  }
  public function index(){

    $this->session->unset_userdata('username');
    $this->session->unset_userdata('password');
    $this->session->unset_userdata('status');

    session_destroy();

    redirect('login/index');

  }
}
