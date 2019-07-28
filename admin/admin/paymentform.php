
<?php 
session_start();
?>
<?php
include_once('../admin/pages2/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php 
 include_once('../admin/pages2/topheader.php');
 ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
 include_once('../admin/pages2/leftsidepage.php');
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">SEND SMS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">YOUR MESSAGE GOES HERE</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="include/payment.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">phone number</label>
                  <input type="number" maxlength="10" class="form-control" name="number" id="exampleInputEmail1" placeholder="insert your phone number here to pay">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">amount of money</label>
                  <input type="number" maxlength="10" class="form-control" name="amount" id="exampleInputEmail1" placeholder="insert your phone number here to pay">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              </div>
            </form>
          </div>
          
        </div>
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once('../admin/pages2/footer.php');?>
  <!-- Control Sidebar -->

<?php
include_once('../admin/pages2/javascript.php')
?>
</body>
</html>
