<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Materias extends CI_Controller {
	
		public function index()
		{
			$variables['tabla']=$this->listar_materias();
			$this->load->view('materias',$variables);
		}

		public function guardar_materia()
		{
			$this->load->model('materia_model','materia',TRUE);
			$nombre_materia=$this->input->POST('nombre_materia');
			if ($nombre_materia=="")
				echo json_encode('2');
			else
			{
				if($this->materia->dameMateria($nombre_materia)>0)
				echo json_encode('0');
				else
				{
				$nombre_materia=strtoupper($nombre_materia);
				$this->materia->insertMateria($nombre_materia);
				echo json_encode('1');
				}
			}
		}

		public function listar_materias()
		{
			$this->load->library('table');
			$this->load->model('materia_model','materia',TRUE);
			$resultado=$this->materia->listarMaterias();
			$template=array('table_open' => '<table class="table">');
			$this->table->set_template($template);
			$this->table->set_heading('Nombre');
			foreach ($resultado as $key => $value) {
				$this->table->add_row( $value->nombre,
										'<a id="'.$value->nombre.'" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminarMateria">
												 <span class="glyphicon glyphicon-remove"></span> Eliminar
										</a>'
										);
			}
			$tabla=$this->table->generate();
			return $tabla;
		}

		public function eliminar_materia()
		{
			$this->load->model('materia_model','materia',TRUE);
			if ($materia_nombre=$this->input->post('nombre_materia'))
			{
				if ($this->materia->eliminarMateria($materia_nombre))
					echo 1;

			}
			else
				echo 2;
		}
	
	}
	
	/* End of file materias.php */
	/* Location: ./application/controllers/materias.php */
?>