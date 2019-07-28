<?php
if(isset($_POST['signup'])){
include_once('../admin/connetion.php');
$fname= mysqli_real_escape_string($conn, $_POST['fname']);
$lname= mysqli_real_escape_string($conn, $_POST['lname']);
$phone= mysqli_real_escape_string($conn, $_POST['phone']);
$fphone= mysqli_real_escape_string($conn, $_POST['fphone']);
$location= mysqli_real_escape_string($conn, $_POST['location']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$password= md5(mysqli_real_escape_string($conn, $_POST['password']));
$repassword= md5(mysqli_real_escape_string($conn, $_POST['repassword']));
$message= mysqli_real_escape_string($conn, $_POST['message']);

if($password !=$repassword){
    echo "hello erro";
}
else {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $query ="INSERT INTO signup(fname, lname, phone, fphone, lcation, email, psw, mssg) VALUES ('$fname','$lname','$phone','$fphone','$location','$email','$password','$message')";
        $result =mysqli_query($conn,$query);
    
        header('Location: ../login.php?sigup=success');
        
        
        }
        else {
            header('Location: ../login.php?sigup=fail');
         }
        }
    


}
      ?>
