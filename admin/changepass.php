<?php
include('../action.php');

if(isset($_POST['passup'])){
    $id=$_POST['id'];
    $pass = $_POST['pass'];
    $qq="UPDATE admin SET `password`='$pass' where `id`='$id' ";
    $run=mysqli_query($conn,$qq);
    header("location:index.php");

}

?>

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
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="../assets/js/scripts.js"></script>


    <?php include('../assets/includes/adminHeader.php'); ?>



   <div class="container">
       <h2 class="tc indigo-text">Change Password</h2>
        <div class="row">

        <?php
    if(isset($_GET['id']) && $_SESSION['role']){
        ?>
            <form action="" method="post">
                <div class="input-field">
                    <input type="password" name="pass" id="pass" class="form-control" required>
                    <label for="pass">New Password</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <input type="submit" value="Update Password" class="btn" name="passup">
            </form>
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