<?php
if(isset($_POST['submit'])){
include_once('../../connetion.php');

$names= mysqli_real_escape_string($conn, $_POST['name']);
$message= mysqli_real_escape_string($conn, $_POST['message']);
$target_path = "";
$target_path = $target_path . basename( $_FILES['pnumber']['name']); 
$file= $_FILES['pnumber']['tmp_name'];
// Where the file is going to be placed 


/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */


$handle=fopen($file,'r');

// Getting filename without extension
$i=0;
while (($cont=fgetcsv($handle,1000,',')) !==false )
{
    $fname = $_FILES['pnumber']['name'];
    $table = substr(rtrim($fname, "csv"), 0, -1);
    // Check this condition for creatng a table
    if($i==0){
        $plane="action";
        $sms="smsmsg";
        $own=$names;
        $mesg=$message;
        $name=$cont[0];
        $phone=$cont[1];
        $query = "CREATE TABLE $table (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            $name VARCHAR(30) NOT NULL,
            $phone INT(11) NOT NULL,
            $plane VARCHAR(30) NOT NULL,
            $sms VARCHAR(30) NOT NULL
            )";
        $result=mysqli_query($conn,$query) or die($conn->error);
        echo  $query,'<br>';
    
    }else {
        $sql = "INSERT INTO $table ($name, $phone,$plane, $sms )
        VALUES ('$cont[0]', '$cont[1]','$names','$message')";
         $result=mysqli_query($conn,$sql) or die($conn->error);
        echo  $sql;
        header('Location:../general.php=successfull uplaod');
    }
    $i++;
    
}
$query ="SELECT * FROM $table id="

}