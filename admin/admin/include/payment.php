<?php
session_start();

include_once('function.php');
if(isset($_POST['submit'])){
    include_once('../../connetion.php');
    $userId = $_SESSION['userId'];
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $monay = mysqli_real_escape_string($conn, $_POST['amount']);

    $time = time();
    $hash = hash('sha256', ($time.''.$number.''.$monay));


    Deposit ($number,$monay,$hash);
 
    $query = $conn->query("INSERT INTO  paymentpending(userId, phone, amount,hashednumber) VALUES ('$userId', '$number', '$monay','$hash') ") or die($conn->error);

   
   var_dump($query);


}