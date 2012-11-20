<?php
class Productos_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_productosxpedido($pedido_id)
	{
		$this->db->select('*')->from('pedidos_detalle')->where('pedido_id', $pedido_id);
		$this->db->join('productos', 'pedidos_detalle.producto_id = productos.producto_id');
		$this->db->order_by('producto_nombre', 'asc');

		$query = $this->db->get();
		return $query->result_array();
	}

}