<?php
  $dyp_user_id = $this->session->userdata('dyp_user_id');
  $dyp_company_id = $this->session->userdata('dyp_company_id');
  $dyp_role_id = $this->session->userdata('dyp_role_id');
  $company_info = $this->User_Model->get_info_arr_fields('company_name','company_id', $dyp_company_id, 'company');
  $user_info = $this->User_Model->get_info_arr_fields('user_name','user_id', $dyp_user_id, 'user');
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>User/logout">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        <i class="fas fa-th-large"></i>
      </a>
    </li>
  </ul>
</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><?php echo $company_info[0]['company_name']; ?></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $user_info[0]['user_name']; ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?php echo base_url(); ?>User/dashboard" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Company
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/company_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company Information</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/branch_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Branch Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/unit_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Unit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/party_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Party / Vendor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/service_contract_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Service Contract</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/group_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Group Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/user_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Information</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>User/issue_information_list" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Issue Information</p>
              </a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link head">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Master
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/manufacturer" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>निर्माता</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/product_category" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>उत्पादन श्रेणी</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/product_information" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>उत्पादन माहिती </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/krishi_news" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>कृषी न्यूज </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/krishi_shala" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>कृषी शाळा </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/pashu_shala" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>पशू शाळा </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/krishi_tadnya" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>कृषी तज्ञ </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url(); ?>Master/krishi_yojana" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>कृषी योजना </p>
              </a>
            </li>

          </ul>
        </li>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>
