<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban extends CI_Controller {

	public function __construct($config = 'rest'){
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();
    $this->load->library('session');
    $this->load->model('Jawaban_model');
  }

	public function index(){
    $data = $this->Jawaban_model->get_assets();
		$this->load->view('jawaban', $data);
	}

  public function provideDataCustomer(){
    $response = $this->Jawaban_model->show_search_result();
    //var_dump($response);
    //print_r($response);
    echo($response);
  }
}
