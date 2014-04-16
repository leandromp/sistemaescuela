<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
		
		class Login extends CI_Controller {
		
			public function index()
			{
				
				$this->load->helper('form');
				$datos['nombre_pagina']='Login de Usuario';
				$this->load->view('cabecera',$datos);
				$this->load->view('login');
				$this->load->view('pie');
			}

			public function acceder()
			{
				$this->load->model('login_model');	
				
			    $usuario=$this->input->get('usuario');
				$password=$this->input->get('password');
				$resultado=$this->login_model->validarAcceso($usuario,$password);
				if ($resultado)
				{
				$datos['usuario']=$resultado;
				$this->load->view('cabecera',$datos);
				$this->load->view('inicio');
				$this->load->view('pie');
				}
				else
				$this->index();

			}
		
		}
		
		/* End of file login.php */
		/* Location: ./application/controllers/login.php */
?>