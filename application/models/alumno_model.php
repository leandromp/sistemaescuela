<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Alumno_model extends CI_Model {
	
		public function	dameAlumnos($limit=5)
		{
			$query=$this->db->get('alumno',$limit);
			if ($query->num_rows>0)
			{
				$res=$query->result();
				return $res;
			}
			else
				return false;
		}		

		public function insertarAlumno($datos)
		{
			$this->db->insert('alumno',$datos);	
		}

		public function dameAlumnoId($id_alumno)
		{
			$query=$this->db->get_where('alumno',array('id'=>$id_alumno));
			if($query->num_rows>0)
			{
				$res=$query->result_array();
				return $res;
			}
			else
			return FALSE;
		}
		public function updateAlumno($datos)
		{
			$this->db->where('id',$datos['id']);
			$this->db->update('alumno',$datos);

		}
		public function eliminarAlumno($id_alumno)
		{
			$query=$this->db->delete('alumno',array('id'=>$id_alumno));
		}
	
	}
	
	/* End of file alumno.php */
	/* Location: ./application/models/alumno.php */
?>