<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){

		$this->load->view('product.php');
	}

	public function camera(){

		$this->load->view('camera.php');
	}

	public function panel(){

		$this->load->view('panel.php');
	}

	public function sensor(){

		$this->load->view('sensor.php');
	}

	public function interface(){

		$this->load->view('interface.php');
	}

	public function ic(){

		$this->load->view('ic.php');
	}

	public function board(){

		$this->load->view('board.php');
	}
	
}