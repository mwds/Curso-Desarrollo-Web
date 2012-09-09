<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Pedidos extends CI_Controller {

    public function index()
    {
      $data['title'] = 'Pedidos | ';

      $this->load->view('header', $data);
      $this->load->view('pedidos_view', $data);
      $this->load->view('footer', $data);
    }

    public function abm()
    {
      $this->load->helper('url');
      
      $data['title'] = 'Pedidos - ABM | ';

      $this->load->view('header', $data);
      $this->load->view('pedidos_abm', $data);
      $this->load->view('footer', $data);
    }

  }