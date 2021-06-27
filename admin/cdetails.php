

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
       <h2 class="tc indigo-text">Registration Details</h2>
        <div class="row">
<!-- message -->

<?php
$id=$_GET['id'];
$branch = $_SESSION['branch'];
$query_msg = "SELECT * FROM `registrations` where id='$id'";
$run_msg = mysqli_query($conn,$query_msg);
$i=0;
while($items = mysqli_fetch_array($run_msg)){
      $idpic=$items['id_photo'];
        ?>
            <p class="flow-text">
                <span> <img width="100" src="../uploads/<?php echo $items['photo'] ?>" alt="">  </span><br>
                <span>Name: <?php echo $items['name'] ?>  </span><br>
                <span>Father: <?php echo $items['father'] ?>  </span><br>
                <span>Permanent Address: <?php echo $items['p_add'] ?>  </span><br>
                <span>Temporary Address: <?php echo $items['t_add'] ?>  </span><br>
                <span>Phone: <?php echo $items['phone'] ?>  </span><br>
                <span>Date of Birth: <?php echo $items['dob'] ?>  </span><br>
                <span>Class: <?php echo $items['class'] ?>  </span><br>
                <span>Id Proof: <?php echo $items['id_proof'] ?>  </span><br>
                <span>Id Number: <?php echo $items['id_no'] ?>  </span><br>


              
                
                <span>Body Mark: <?php echo $items['body_mark'] ?>  </span><br>
                <span>Date: <?php echo $items['date'] ?>  </span><br>
                            <form action="download.php" class="dib ml4 mr6" method="post">
                                                            <input type="hidden" name="topic_name" value="<?php echo $idpic;?>">
                                                            <input type="submit" name="download-homework" class="btn blue " value="Download Id Proof " />
                                                        </form>
            
                            <br>
               
            </p>
        <?php
}

?>

        </div>
   </div>




    

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
<script src="https://kit.fontawesome.com/b557c37cf8.js" crossorigin="anonymous"></script>
</body>
</html>