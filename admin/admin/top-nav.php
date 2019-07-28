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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->
<?php include_once('../admin/pages2/footer.php');?>
  <!-- Control Sidebar -->

<?php
include_once('../admin/pages2/javascript.php')
?>
</body>
</html>
