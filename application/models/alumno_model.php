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
	
	}
	
	/* End of file alumno.php */
	/* Location: ./application/models/alumno.php */
?>