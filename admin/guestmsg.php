<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satya Sai Services</title>
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            
</head>
<body>
<?php include('../action.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="../assets/js/scripts.js"></script>


    <?php include('../assets/includes/adminHeader.php'); ?>



   <div class="container">
       <h2 class="tc indigo-text">Admin Dashboard</h2>
        <div class="row">
<!-- message -->
<?php
$query_msg = "SELECT * FROM `guest_messages` ORDER BY id DESC  LIMIT 0,50 ";
$run_msg = mysqli_query($conn,$query_msg);
$i=0;
while($items = mysqli_fetch_array($run_msg)){
  
    $i++;
    $name=$items['name'];
    $email=$items['email'];
    $phone=$items['phone'];
    $msg=$items['message'];
    $date=$items['created_at'];
    echo "
                <div class='col s12 l12'>
                <p class='flow-text'>
                    <span>Sr.No: $i  </span><br>
                    <span>Name: $name</span><br>
                    <span>Email: $email </span><br>
                    <span>Phone: $phone</span><br>
                    <span>Message: $msg </span><br>
                    <span>Date: $date</span>
                </p>
            </div>
    ";
}
?>
           

        </div>
   </div>





    

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
<script src="https://kit.fontawesome.com/b557c37cf8.js" crossorigin="anonymous"></script>
</body>
</html>