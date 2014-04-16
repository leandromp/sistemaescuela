<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Inicio extends CI_Controller {
	
		public function index()
		{
			$this->load->view('cabecera.php');
			$this->load->view('pie.php');			
		}
	
	}
	
	/* End of file inicio.php */
	/* Location: ./application/controllers/inicio.php */

?>