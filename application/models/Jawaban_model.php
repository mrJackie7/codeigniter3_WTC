<?php
class Jawaban_model extends CI_Model{
  function get_assets(){
    $assets = array(
      'title_page' => "Jawaban codeigniter test",
      'heading' => "Check your ID here:",
      'favicon' => base_url('assets/favicon.ico'),
      'jquery' => base_url('assets/jQuery-3.6.0/jquery.min.js'),
      'bootstrap_js' => base_url('assets/bootstrap-3.4.1/js/bootstrap.min.js'),
      'bootstrap_css' => base_url('assets/bootstrap-3.4.1/css/bootstrap.min.css'),
      'bootstrap_theme' => base_url('assets/bootstrap-3.4.1/css/bootstrap-theme.min'),
    );
    return $assets;
  }

  function show_search_result(){
    $keyword = $this->input->get('keyword');
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
    $key = array_search($keyword, array_column($data_customer, 'idCustomer'));
    if($key !== false){
      return $data_customer[$key]['namaCustomer'];
    }else{
      return 'kosong';
    }
    //return $key;
    // $this->searcher($data_customer,'idCustomer', $keyword);
    //return $data_customer[$key]['namaCustomer'];
    //return var_dump($key);
  }

  // function searcher($array, $value){
  //   foreach($array as $key => $val){
  //     if($val['idCustomer'] === $value){
  //       return $key;
  //     }
  //   }
  //   return null;
  // }
}