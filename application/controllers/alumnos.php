<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Alumnos extends CI_Controller {
	
		public function index()
		{
			$variables['tabla']=$this->vista_alumnos();
			$this->load->view('alumnos',$variables);
		}

		public  function vista_alumnos()
		{
			$this->load->library('table');
			$this->load->model('alumno_model','alumno',TRUE);
			$resultado=$this->alumno->dameAlumnos();
			$template=array('table_open' => '<table class="table">');
			$this->table->set_template($template);
			$this->table->set_heading('DNI','Nombre','Apellido','Direccion','Telefono','Correo','Editar','Eliminar');
			foreach ($resultado as $key => $value) {
				$this->table->add_row( 
										$value->dni,
										$value->nombre,
										$value->apellido,
										$value->direccion,
										$value->telefono,
										$value->correo,
										'<a href="'.site_url('alumnos/modificar/'.$value->id).'" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil"></span> editar </a> ',
										'<a id="'.$value->id.'" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
												 <span class="glyphicon glyphicon-remove"></span> Eliminar
										</a>'
										);
			}
			$tabla=$this->table->generate();
			return $tabla;
		}
		public function alta()
		{
			$this->load->helper('form');
			$variables['vista']='alta';
			$this->load->view('alumnos',$variables);
		}
	
	}
	
	/* End of file alumnos.php */
	/* Location: ./application/controllers/alumnos.php */
?>