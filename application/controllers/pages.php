<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Pages extends CI_Controller {

    public function view($page = 'home')
    {
      if ( ! file_exists('application/views/'.$page.'.php'))
      {
        show_404(); // Whoops, we don't have a page for that!
      }
      
      $data['title'] = ucfirst($page); // Capitalize the first letter
      
      $view = $this->load->view('header', $data);
      $view .= $this->load->view($page, $data);
      $view .= $this->load->view('footer', $data);

      $this->load->view($view);
    }

  }