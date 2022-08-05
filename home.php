<?php
if(isset($_POST['weight_lift'])){
    $server="localhost";
    $user="root";
    $password="";
    $con=mysqli_connect($server,$user,$password);
    $weight_lift=$_POST["weight_lift"];
    $weights=$_POST['weight'];
    $date=$_POST['date'];
   
    $sql="INSERT INTO `weight1`.`weight1`(`weight_lift`,`weights`,`date`) VALUES ('$weight_lift','$weights','$date');";
    if($con->query($sql)==true){
        echo "success";
    }
    else{
       echo "failure";
    }
    
    $con->close();
}
?>