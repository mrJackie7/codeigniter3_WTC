<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jawaban extends CI_Controller {

	public function __construct($config = 'rest'){
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		parent::__construct();
    $this->load->library('session');
	}

  public function provideDataCustomer(){
    $data_customer = array(
      array(
        'idCustomer' => 'c10341',
        'namaCustomer' => 'Darwin'
      ),
      array(
        'idCustomer' => 'c20630',
        'namaCustomer' => 'Ari'
      ),
      array(
        'idCustomer' => 'c30413',
        'namaCustomer' => 'Raka'
      ),
      array(
        'idCustomer' => 'c30801',
        'namaCustomer' => 'Okta'
      ),
    );

    $keyword = $this->input->post('keyword');
    echo "<script>console.log('test ".$keyword."'); alert('test ".$keyword."'); window.location.href='".base_url('index.php/Soal')."'</script>";
  }

	public function index(){
    $data = array(
      'title_page' => "Jawaban codeigniter test",
      'heading' => "Check your ID here:",
      'favicon' => base_url('assets/favicon.ico'),
      'jquery' => base_url('assets/jQuery-3.6.0/jquery.min.js'),
      'bootstrap_js' => base_url('assets/bootstrap-3.4.1/js/bootstrap.min.js'),
      'bootstrap_css' => base_url('assets/bootstrap-3.4.1/css/bootstrap.min.css'),
      'bootstrap_theme' => base_url('assets/bootstrap-3.4.1/css/bootstrap-theme.min.'),
    );

		$this->load->view('jawaban', $data);
	}
}