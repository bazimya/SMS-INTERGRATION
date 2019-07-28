<?php
session_start();

include_once('function.php');
if(isset($_POST['submit'])){
    include_once('../../connetion.php');
    $userId = $_SESSION['userId'];

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // insert the message in the database
    $query = $conn->query("INSERT INTO messages(userId, senderName, message) VALUES ('$userId', '$name', '$message') ") or die($conn->error);

    // Get message ID
    $messageId = $conn->insert_id;

    // Add the phone numbers to be sent to the message
    $target_path = "";
    $target_path = $target_path . basename( $_FILES['pnumber']['name']); 
    $file= $_FILES['pnumber']['tmp_name'];
    $handle=fopen($file,'r');
    $i=0;

    // Loop through contacts in the CSV
    $i=0;
    while (($cont=fgetcsv($handle,1000,',')) !==false ){
        $i++;
        if($i==1){
            // Skip the header
            continue;
        }

        $name = mysqli_real_escape_string($conn, $cont[0]);
        $phone = mysqli_real_escape_string($conn, $cont[1]);

	
     $insertQuery = $conn->query("INSERT INTO messagephones(messageId, name, phoneNumber) VALUES($messageId, '$name', '$phone')") or die($conn->error);
      smsApi($phone,$name,$message);
     
        }

    
        $hash       = $_POST['hash']; 
        $status     = $_POST['status'];   
        $conn->query("UPDATE paymentpending SET status='$status' WHERE hash = '$hash'");           
        if($conn)
        {
            echo 'yes';   
        }
}   