<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Pedidos extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('pedidos_model');
			$this->load->model('productos_model');
		}

		public function index()
		{
			$data['title'] = 'Pedidos | ';

			$data['pedidos'] = $this->pedidos_model->get_pedidos();

			var_dump($data['pedidos']);
			echo "<br><br>";

			foreach ($data['pedidos'] as $value) {

				$data['productos'] = $this->productos_model->get_productosxpedido($value['pedido_id']);

				var_dump('pedido_id => ' . $value['pedido_id']);
				echo "<br><br>";

				var_dump($data['productos']);
				echo "<br><br>";
			}

			$this->load->view('header', $data);
			$this->load->view('pedidos_view', $data);
			$this->load->view('footer', $data);
		}

		public function view($slug)
		{
			#$data['pedidos'] = $this->pedidos_model->get_pedidos($slug);
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