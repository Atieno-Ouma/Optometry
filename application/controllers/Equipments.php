<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipments extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html//Di
	 */
	public function index()
	{

		$this->load->view('dashboard/header');
		$this->load->view('dashboard/side_bar');
		$this->load->view('dashboard/equipments');
		$this->load->view('dashboard/footer');
	}
	public function add(){
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/side_bar');
		$this->load->view('dashboard/add_equipment');
		$this->load->view('dashboard/footer');


	}


}