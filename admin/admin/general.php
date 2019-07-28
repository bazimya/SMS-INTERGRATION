
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
            <form role="form" method="POST" action="include/smsdetails.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NAME</label>
                  <input type="text" maxlength="10" class="form-control" name="name" id="exampleInputEmail1" placeholder="name of Action">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">MESSAGE YOUR WANT TO SEND</label>
                  <div class="form-group">
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" name="message"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">UPLOAD YOUR EXCEL HERE</label>
                  <input type="file" id="exampleInputFile" name="pnumber" accept=".csv">

                  <p class="help-block">FORMATE OF EXCEL IS LIKE THIS </p>
                 <div class="container">
                   <div class="col-md-2">NEMA</div>
                   <div class="col-md-2">NUMBER</div>
                 </div>
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
