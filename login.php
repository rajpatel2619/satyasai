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


    <?php include('assets/includes/header.php'); ?>



   <div class="container">
       <h2 class="b tc indigo-text">Admin Login</h2>
   <div class="row">
    <form class="col s12 l12" action="action.php" method="post">
        <div class="row">
            <div class="input-field col s12 l12">
                  <input  id="username" name="username" type="text" class="validate">
                  <label for="username">Username</label>
            </div>
            <div class="input-field col s12 l12">
                  <input  id="password" name="password" type="password" class="validate">
                  <label for="password">Password</label>
            </div>

        </div>
        <div class="row">
            <div class="input-field col s12 l12">
                  <input type="submit" class="btn" value="Login" name="login">
            </div>
           

        </div>
    </form>
  </div>
   </div>

    <?php include('assets/includes/footer.php'); ?>




    

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
<script src="https://kit.fontawesome.com/b557c37cf8.js" crossorigin="anonymous"></script>
</body>
</html>