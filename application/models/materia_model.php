<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Materia_model extends CI_Model {
		
		public function insertMateria($nombre_materia)
		{
			$datos = array('nombre' => $nombre_materia);
			$this->db->insert('materias',$datos);
		}

		public function dameMateria($nombre_materia)
		{
			$datos = array('nombre' => $nombre_materia);
			$query=$this->db->get_where('materias',$datos);
			if ($query->num_rows>0)
				return 1;
			else
				return 0;
		}
		public function listarMaterias($limit='10',$order="DESC")
		{
			
			
			$query=$this->db->get('materias');
			$this->db->limit($limit);
			$this->db->order_by($order);
			if ($query->num_rows>0)
			{
				$res=$query->result();
				return $res;
			} 
			else
				return FALSE;
		}

		public function eliminarMateria($materia_nombre)
		{
			strtoupper($materia_nombre);
			$this->db->where('nombre',$materia_nombre);
			if($query=$this->db->delete('materias'))
				return true;
			else
				return false;

		}
	
	}
	
	/* End of file materia_model.php */
	/* Location: ./application/models/materia_model.php */
?>