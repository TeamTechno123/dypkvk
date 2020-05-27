
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Kolkata');
    // $this->load->model('Transaction_Model');
  }

  public function manufacturer(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/manufacturer');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_manufacturer($manufacturer_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/manufacturer');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_manufacturer($manufacturer_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('manufacturer_id', $manufacturer_id, 'manufacturer');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/manufacturer');
  }



  public function product_category(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/product_category');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_product_category($product_category_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/product_category');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_product_category($product_category_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('product_category_id', $product_category_id, 'product_category');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/product_category');
  }



  public function product_information(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/product_information');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_product_information($product_information_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/product_information');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_product_information($product_information_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('product_information_id', $product_information_id, 'product_information');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/product_information');
  }


  public function krishi_news(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_news');
    $this->load->view('Include/footer');
  }

  // Edit/Update Education Level...
  public function edit_krishi_news($krishi_news_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_news');
    $this->load->view('Include/footer');
  }

  //Delete Education Level...
  public function delete_krishi_news($krishi_news_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('krishi_news_id', $krishi_news_id, 'krishi_news');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/krishi_news');
  }



  public function krishi_shala(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_shala');
    $this->load->view('Include/footer');
  }

  // Edit/Update Krishi Shala...
  public function edit_krishi_shala($krishi_shala_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_shala');
    $this->load->view('Include/footer');
  }

  //Delete Krishi Shala...
  public function delete_krishi_shala($krishi_shala_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('krishi_shala_id', $krishi_shala_id, 'krishi_shala');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/krishi_shala');
  }


  public function krishi_tadnya(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_tadnya');
    $this->load->view('Include/footer');
  }

  // Edit/Update Krishi Shala...
  public function edit_krishi_tadnya($krishi_tadnya_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_tadnya');
    $this->load->view('Include/footer');
  }

  //Delete Krishi Shala...
  public function delete_krishi_tadnya($krishi_tadnya_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('krishi_tadnya_id', $krishi_tadnya_id, 'krishi_tadnya');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/krishi_tadnya');
  }

  public function krishi_yojana(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_yojana');
    $this->load->view('Include/footer');
  }

  // Edit/Update Krishi Shala...
  public function edit_krishi_yojana($krishi_yojana_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/krishi_yojana');
    $this->load->view('Include/footer');
  }

  //Delete Krishi Shala...
  public function delete_krishi_yojana($krishi_yojana_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('krishi_yojana_id', $krishi_yojana_id, 'krishi_yojana');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/krishi_yojana');
  }




  public function pashu_shala(){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/pashu_shala');
    $this->load->view('Include/footer');
  }

  // Edit/Update Krishi Shala...
  public function edit_pashu_shala($pashu_shala_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }

    $this->load->view('Include/head');
    $this->load->view('Include/navbar');
    $this->load->view('Master/pashu_shala');
    $this->load->view('Include/footer');
  }

  //Delete Krishi Shala...
  public function delete_pashu_shala($pashu_shala_id){
    $dyp_user_id = $this->session->userdata('dyp_user_id');
    $dyp_company_id = $this->session->userdata('dyp_company_id');
    $dyp_role_id = $this->session->userdata('dyp_role_id');
    if($dyp_user_id == '' && $dyp_company_id == ''){ header('location:'.base_url().'User'); }
    $this->User_Model->delete_info('pashu_shala_id', $pashu_shala_id, 'pashu_shala');
    $this->session->set_flashdata('delete_success','success');
    header('location:'.base_url().'Master/pashu_shala');
  }










}
?>
