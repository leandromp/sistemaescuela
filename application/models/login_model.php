<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
		class Login_model extends CI_Model 
		{
		
			public function validarAcceso($usuario,$password)
			{
				$this->db->where('usuario',$usuario);
				$this->db->where('password',$password);
				$query=$this->db->get('usuarios');
				if($query->num_rows()==1)
				{
					$res=$query->result_array();
					
					return $res;
				}
				else
					return FALSE;
			}			
		
		}
		
		/* End of file login.php */
		/* Location: ./application/models/login.php */

?>