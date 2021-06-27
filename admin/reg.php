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
       <h2 class="tc indigo-text">Registrations</h2>
        <div class="row">
<!-- message -->

<?php
$branch = $_SESSION['branch'];
$query_msg = "SELECT * FROM `registrations` where training_center='$branch' order by id desc ";
$run_msg = mysqli_query($conn,$query_msg);
$i=0;
while($items = mysqli_fetch_array($run_msg)){
  
    $i++;
    $username=$items['name'];
    $phone=$items['phone'];
    $uid=$items['id'];
    
   
    echo "
                <div class='col s12 l12'>
                <p class='flow-text'>
                    <span>Sr.No: $i  </span><br>
                    <span>Username: $username</span><br>
                    <span>Password: $phone </span><br>
                    <span><a href='cdetails.php?id=$uid'>See Full Details</a> </span><br>
                   
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