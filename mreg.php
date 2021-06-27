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

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
            
</head>
<body>

<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>


    <?php include('assets/includes/header.php'); ?>

    <div class="container">
        <h3 class="tc teal-text">Register Here</h3>
        <form class="col l12 s12" action="register.php" method="post" enctype="multipart/form-data">
      <div class="row">
      <br>

<!-- <label>Choose One</label> -->
<select name="trainingc" class="browser-default">
<option  value="" disabled selected>Select Training Center</option>
<option value="chitrakoot">CHITRAKOOT</option>
<option value="fatehpur">FATEHPUR</option>
<option value="hamirpur">HAMIRPUR</option>
<option value="mahoba">MAHOBA</option>


</select>

        <div class="input-field col s12">
          <input  name="name" id="first_name" type="text" class="validate ">
          <label for="first_name">Name of the Trainee</label>
        </div>
      
        <p class="b">    &nbsp;&nbsp; Candidate photo (max size 200 kb)
        </p>
        
        <div class="input-field col s12">
         <input type="file" name="pic" id="pic">
        </div>


        <div class="input-field col s12">
          <input  name="father" id="father" type="text" class="validate ">
          <label for="father">Son/Wife/Daughter of</label>
        </div>
        <div class="input-field col s12">
          <input  name="paddress" id="paddress" type="text" class="validate ">
          <label for="paddress">Permanent Address</label>
        </div>
        <div class="input-field col s12">
          <input  name="taddress" id="taddress" type="text" class="validate ">
          <label for="taddress">Temporary Address</label>
        </div>
        <div class="input-field col s12">
          <input  name="phone" id="phone" type="number" class="" >
          <label for="phone">Phone</label>
        </div>
        <div class="input-field col s12">
          <input  name="dob" id="dob" type="text" class="" >
          <label for="dob">Date of Birth (dd-mm-yyyy)</label>
        </div>


        <label>Select</label>
  <select name="vclass" class="browser-default">
    <option  disabled selected>Class of the Vehicle Training</option>
    <option value="lmv">L.M.V (Light Motor Vehicle)</option>
    <option value="htv">H.T.V (Heavy Transport Vehicle)</option>
    
  </select>

<br>

        <label>Select Id Proof</label>
  <select name="idproof" class="browser-default">
    <option disabled selected>Choose One</option>
    <option value="adhar">Adhar Card</option>
    <option value="dl">Driving Licence</option>
    <option value="pan">Pan Card</option>
    <option value="votar">Votar Card</option>
    <option value="passport">Passport</option>
    
  </select>

<br>

  <div class="input-field col s12">
          <input  name="idno" id="dl" type="text" class="" >
          <label for="idno">Id Number</label>
        </div>
<br>
        <span> &nbsp;&nbsp; Id Proof photo (max size 1 mb)</span>
  <div class="input-field col s12">
         <input type="file" name="idfile" id="idfile">
        </div>


  <div class="input-field col s12">
          <input  name="idmark" id="idmark" type="text" class="" >
          <label for="idmark">Identification mark on body</label>
        </div>

      </div>
  
    <input type="submit" name="reg" value="Ragister" class="btn indigo" name="contact">
     
    </form>
    <br>
    </div>

    <?php include('assets/includes/footer.php'); ?>




    

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
<script src="https://kit.fontawesome.com/b557c37cf8.js" crossorigin="anonymous"></script>
</body>
</html>