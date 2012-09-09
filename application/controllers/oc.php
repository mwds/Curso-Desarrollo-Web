<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Oc extends CI_Controller {

    public function index()
    {
      $data['title'] = 'Orden de Compra | ';

      $this->load->view('header', $data);
      $this->load->view('oc_view', $data);
      $this->load->view('footer', $data);
    }

    public function abm()
    {
      $data['title'] = 'Orden de Compra - ABM | ';

      $this->load->view('header', $data);
      $this->load->view('oc_abm', $data);
      $this->load->view('footer', $data);
    }

    public function liberar()
    {
      $data['title'] = 'Orden de Compra - Liberar | ';

      $this->load->view('header', $data);
      $this->load->view('oc_liberar', $data);
      $this->load->view('footer', $data);
    }

  }