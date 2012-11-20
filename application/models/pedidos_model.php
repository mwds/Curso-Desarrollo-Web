<?php
class Pedidos_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_pedidos()
	{
		$this->db->select('*')->from('pedidos')->join('estados', 'pedidos.estado_id = estados.estado_id')->order_by('pedido_fecha', 'desc');

		$query = $this->db->get();
		return $query->result_array();
	}

}