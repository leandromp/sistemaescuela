<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
		class Maestros extends CI_Controller {
		
			public function index($vista=0)
			{
				
				$this->load->view('cabecera');
				
				$datos['tabla']=$this->vista_general();					
				$this->load->view('maestros',$datos);						
				$this->load->view('pie');
			}

			public function vista_general()
			{
				$this->load->helper('url');
				$this->load->model('maestros_model','maestros',TRUE);
				$this->load->library('table');
				//funcion que trae los ultimos 10 maestros cargados si no se le pasa el valor 
				//de limit ejemplo $limit=20 traeria los ultimos 20
				$resultado=$this->maestros->dameMaestros(5);
				$template=array('table_open' => '<table class="table">');
				$this->table->set_template($template);
				$this->table->set_heading('Nombre','Apellido','Direccion','Telefono','Correo','Editar','Eliminar');
				foreach ($resultado as $key => $value) {
					$this->table->add_row( 
											$value->nombre,
											$value->apellido,
											$value->direccion,
											$value->telefono,
											$value->correo,
											'<a href="'.site_url('maestros/modificar/'.$value->id).'" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil"></span> editar </a> ',
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
				$this->load->model('maestros_model','maestros',TRUE);
				$datos['nombre']=$this->input->post('nombre');
				$datos['apellido']=$this->input->post('apellido');
				$datos['direccion']=$this->input->post('direccion');
				$datos['telefono']=$this->input->post('telefono');
				$datos['correo']=$this->input->post('correo');
				$datos['fechanac']=$this->input->post('fechanac');
				if ($opcion==0)
				$this->maestros->insertarMaestro($datos);
				else
				{
				$datos['id']=$this->input->post('id');
				$this->maestros->modificarMaestro($datos);
				$datos['mensaje']='Datos Modificados Correctamente';
				}
				
				$this->load->view('cabecera');				
				$this->load->view('maestros_form',$datos);						
				$this->load->view('pie');
					
			}
			public function modificar($id_maestro)
			{
				$this->load->helper('form');
				$this->load->model('maestros_model','maestros',TRUE);
				$variables['datos']=$this->maestros->dameMaestroUnico($id_maestro);
				$this->load->view('cabecera');				
				$this->load->view('maestros_modificar',$variables);						
				$this->load->view('pie');
			}
			public function eliminar($id_maestro)
			{
				$this->load->model('maestros_model','maestros',TRUE);
				$this->maestros->eliminarMaestro($id_maestro);
				$this->index();
				

			}
		
		}
		
		/* End of file maestros.php */
		/* Location: ./application/controllers/maestros.php */
?>