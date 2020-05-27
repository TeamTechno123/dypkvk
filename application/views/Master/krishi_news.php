<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4>कृषी न्यूज </h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card collapsed-card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Add New कृषी न्यूज </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0" style="display: none;">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post">
                    <div class="row px-3">
                      <div class="form-group col-md-6 select_sm">
                        <div class="row">



                          <div class="form-group col-md-6 select_sm">
                            <label>News No.</label>
                            <input type="text" class="form-control form-control-sm" name="news_no" id="news_no"  placeholder="News No." readonly>
                          </div>
                          <div class="form-group col-md-6 select_sm">
                            <label>News Date</label>
                            <input type="text" class="form-control form-control-sm" name="date" id="date"  placeholder="News Date" required>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>News Created By</label>
                            <input type="text" class="form-control form-control-sm" name="news_creator" id="news_creator"  placeholder="News Created By" required>
                          </div>
                          <div class="form-group col-md-12 select_sm">
                            <label>Enter Title Of News</label>
                            <input type="text" class="form-control form-control-sm" name="date" id="date"  placeholder="Enter Title Of News" required>
                          </div>



                        </div>
                      </div>

                      <div class="form-group col-md-6 select_sm">
                        <div class="row">
                          <div class="form-group col-md-12 select_sm">
                            <label>News Description</label>
                            <textarea class="form-control" name="name" rows="4" cols="85"></textarea>
                          </div>

                          <div class="form-group col-md-12 select_sm">
                            <label>Select Status</label>
                            <select class="form-control select2" name="status_id" id="status_id" data-placeholder="Select Status">
                              <option value=""> Select Status</option>
                            </select>
                          </div>

                        </div>
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <button class="btn btn-sm btn-primary float-right px-3">Save</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">List All कृषी न्यूज </h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="wt_50">Action</th>
                    <th>Product Name</th>
                    <th>Manufacturer </th>
                    <th>Category</th>
                    <th>Discription</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-default"><i class="fa fa-edit text-primary"></i></button>
                          <button type="button" class="btn btn-sm btn-default" onclick="return confirm('Delete this Party');"><i class="fa fa-trash text-danger"></i></button>
                        </div>
                      </td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>
                      <td>asd</td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>

</body>
</html>
<script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('save_success')){ ?>
    $(document).ready(function(){
      toastr.success('Saved successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('update_success')){ ?>
    $(document).ready(function(){
      toastr.info('Updated successfully');
    });
  <?php } ?>
  <?php if($this->session->flashdata('delete_success')){ ?>
    $(document).ready(function(){
      toastr.error('Deleted successfully');
    });
  <?php } ?>
</script>
