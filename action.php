<?php

session_start();
$conn = new mysqli("localhost","root","","satya_sai");



if(isset($_POST['login'])){
    
    if(isset($_SESSION['username'])){
        header('location: admin/index.php');
        exit();
    }
   else{
    $username=$_POST['username'];
    $password=$_POST['password'];
  
  
    $query = "SELECT * FROM `admin` where username = '$username' and `password` ='$password' ";
    $run = mysqli_query($conn,$query);
 
    $records = mysqli_num_rows($run);
    if($records>0){
        while($row = mysqli_fetch_array($run)){
            $_SESSION['username']=$row['username'];
            $_SESSION['branch']=$row['branch'];
            $_SESSION['role']=$row['roll'];
            $_SESSION['id']=$row['id'];

        }
        header('location: admin/index.php');
        exit();
    
    }
    else{
           header('location:login.php');
        exit();
    
    }
   }
 
}


if(isset($_POST['contact'])){
  
    $c_name=$_POST['name'];
    $c_email=$_POST['email'];
    $c_phone=$_POST['phone'];
    $c_msg=$_POST['msg'];
  
    $query = "INSERT INTO `guest_messages`(`id`,`name`, `email`, `phone`, `message`,`created_at`) VALUES ('','$c_name','$c_email','$c_phone','$c_msg',NOW())";
    $run = mysqli_query($conn,$query);
    header('location:index.php');
    exit();
    
}

//fetching messages


?>