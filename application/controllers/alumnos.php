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
		public function alta($opcion=0)
		{
			$this->load->helper('form');
			$this->load->model('alumno_model','alumno',TRUE);

			$datos['dni']=$this->input->post('dni');
			$datos['nombre']=$this->input->post('nombre');
			$datos['apellido']=$this->input->post('apellido');
			$datos['direccion']=$this->input->post('direccion');
			$datos['telefono']=$this->input->post('telefono');
			$datos['correo']=$this->input->post('correo');
			$datos['fechanac']=$this->input->post('fechanac');
			if ($opcion==1)
			{
			$datos['id']=$this->input->post('id');
			$this->alumno->updateAlumno($datos);
			}
			else
			$this->alumno->insertarAlumno($datos);


			$variables['vista']='alta';
			$variables['form_config'] = array('id' => 'form_alumno');
			$this->load->view('alumnos',$variables);
		}

		public function modificar ($id_alumno)
		{
			$this->load->helper('form');
			$this->load->model('alumno_model','alumno',TRUE);
			$variables['vista']='modificacion';
			$variables['form_config'] = array('id' => 'form_alumno');
			$alumno=$this->alumno->dameAlumnoId($id_alumno);
			$variables['alumno']=$alumno;
			$this->load->view('alumnos',$variables);
		}

		public function eliminar($id_alumno)
		{
			$this->load->model('alumno_model','alumno',TRUE);
			$this->alumno->eliminarAlumno($id_alumno);
			$this->index();
		}
	
	}
	
	/* End of file alumnos.php */
	/* Location: ./application/controllers/alumnos.php */
?>