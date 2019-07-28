<?php
$hash       = $_POST['hash']; 
$status     = $_POST['status'];   
$query= $conn->query("UPDATE paymentpending SET status='$status' WHERE hashednumber = '$hash'");           
if($query)
{
    echo 'yes';   
}else{
    trigger_error($conn->error);
}