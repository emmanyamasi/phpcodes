<?php
include_once("connect.php");


if(isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    
   
    echo $name;
    echo $email;
    echo $password;
    echo $confirmpassword; 
}
    $sql = "Insert into users(name,email,password,confirmpassword)values('$name','$email','$password','$confirmpassword')";
    $query = mysqli_query($conn,$sql);
    if($query){
       echo "succesfull";
     } 


    else{
    echo"form failed";
    }   
?>