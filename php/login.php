<?php 
 session_start();
 if(isset($_POST['login'])){
  include_once('../admin/connetion.php');
  $email= mysqli_real_escape_string($conn, $_POST['email']);
  $password= mysqli_real_escape_string($conn, $_POST['psw']);
  $pw =md5($password); 

  $query="SELECT * FROM signup WHERE email='$email' AND psw='$pw'";
  // var_dump($query);
  // die(" ".mysqli_error($query));
  $result=mysqli_query($conn,$query);
  // or die($conn->error)

  $check =mysqli_num_rows($result);

  if( $check ==1){
   if ($rows=mysqli_fetch_assoc( $result))
   {
  
    $_SESSION['usename']=$rows['fname'];
    $_SESSION['userId']=$rows['id'];
     $_SESSION['fname']=$rows['lname'];
    
   }
    header('Location:../admin/admin/index.php?signup=seccessful');

  }else {
    // Check the query which is being sent to the DB
    // echo $query;
    // die();
    header('Location: ../login.php?sigup=failed');
  }
   
   
 }


 $sql = "SELECT * FROM signup ";
$result2 = $conn->query($sql);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
       $_SESSION['number']=count($row["fname"]);
      
       die();
    }
} else {
    echo "0 results";
}
$conn->close();
 ?>


