<?php 
session_start();
?>

<?php
include_once('../admin/pages2/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- ushaka kubona to  heade harimo na log out reba muri iyi link kand ctr ukirike kuri link -->
 <?php 
 include_once('../admin/pages2/topheader.php')
 ?>
 <!-- irangirira ahangaha -->
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
 include_once('../admin/pages2/leftsidepage.php')
 ?>

  <!-- Content Wrapper. Contains page content -->
 <?php include_once('../admin/pages2/contentindex.php');?>
  <!-- /.content-wrapper -->
  
  <?php include_once('../admin/pages2/footer.php');?>
  <!-- Control Sidebar -->

<?php
include_once('../admin/pages2/javascript.php')
?>
</body>
</html>
