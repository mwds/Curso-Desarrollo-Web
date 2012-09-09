<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Login extends CI_Controller {

    function index()
    {
      $data['title'] = '';

      $this->load->view('header', $data);
      $this->load->view('login', $data);
      $this->load->view('footer', $data);
    }
    
  }