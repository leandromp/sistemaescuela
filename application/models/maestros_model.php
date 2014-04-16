<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
		class Maestros_model extends CI_Model {
		
			public function dameMaestros($limit=10)
			{
				$query=$this->db->get('maestros',$limit);
				$res=$query->result();
				return $res;
			}

			public function insertarMaestro($datos)
			{
				//funcion que realiza insert en la base de datos 
				//como parametro se le pasa un array de datos donde el indice es el nombre del campo y 
				//el valor del mismo es el dato que se guarda en la tabla. ej: array['nombre']='Dolores'
				$this->db->insert('maestros',$datos);
			}
			public function dameMaestroUnico($id_maestro)
			{
				$query=$this->db->get_where('maestros',array('id'=>$id_maestro));
				$res=$query->result_array();
				return $res;
			}
			public function modificarMaestro($datos)
			{
				$this->db->where('id', $datos ['id']);
				$this->db->update('maestros', $datos); 
			}
			public function eliminarMaestro($id_maestro)
			{
				$query=$this->db->delete('maestros',array('id'=>$id_maestro));
				
			}
		
		}
		
		/* End of file maestros_model.php */
		/* Location: ./application/models/maestros_model.php */
?>