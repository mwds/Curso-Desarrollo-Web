<?php
class Pedidos_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_pedidos($pedido_id = NULL)
	{
		if ($pedido_id === NULL)
		{
			$query = $this->db->get('pedidos_test');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('pedidos_test', array('pedidos_id' => $pedido_id));
		return $query->row_array();
	}
}	