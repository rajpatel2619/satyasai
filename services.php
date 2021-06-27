<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nnavagency</title>
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
   
            
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>


    <?php include('assets/includes/header.php'); ?>

<div class="header-container">
<img src="assets/images/flight2.jpg" alt="" srcset="">
<div class="on-image">
    <h4 class="teal-text b text-darken-1">BOOK YOUR AMAZING PACKAGES UPTO 30% OFF</h4>
    <!-- <h5 class="ml indigo-text b" >Call @987654321</h5> -->
    <a href="#modal1" class="btn  deep-orange b ml6 modal-trigger">Book Now</a>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content teal-text">
        <h4 class="tc b indigo-text">Book Now</h4>
    <div class="row">
    <form action="action.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  id="from" name="from" type="text" class="validate">
          <label for="from">From</label>
        </div>
        <div class="input-field col s6">
          <input id="to" name="to" type="text" class="validate">
          <label for="to">To</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        <input type="text" class="datepicker" name="dd">
          <label for="dd">Departure Date</label>
        </div>
        <div class="input-field col s6">
        <input type="text" class="datepicker" name="rd">
          <label for="rd">Return Date</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input  id="noa" name="adults" type="text" class="validate">
          <label for="noa">No. of Adults</label>
        </div>
        <div class="input-field col s6">
          <input id="noc" name="childs" type="text" class="validate">
          <label for="noc">No. of Childs</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
        <!-- <label>Browser Select</label> -->
  <select name="coach" class="browser-default">
    <option name="coach" value="" disabled selected>Select Coach</option>
    <option value="economy">Economy/Coach</option>
    <option value="premium">Premium Economy</option>
    <option value="business">Business Class</option>
    <option value="first">First Class</option>
  </select>
        </div>
        <div class="input-field col s6">
        <!-- <label></label> -->
  <select name="way" class="browser-default">
    <option name="way" value="" disabled selected>Trip way</option>
    <option value="onway">On Way</option>
    <option value="return">Return Flight</option>
    
  </select>
        </div>

      </div>

      <div class="row">
        <div class="input-field col s6">
          <input  id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="email" name="email"  type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input  id="phone" name="number" type="number" class="validate">
          <label for="phone">Number</label>
        </div>
      
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input  id="message" name="msg" type="text" class="validate">
          <label for="message">Message</label>
        </div>
      
      </div>
     <input type="submit" value="Book Now" name="booking" class="btn">

    </form>
  </div>
    </div>
    <!-- <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">close</a>
    </div> -->
</div>
</div>
</div>
<!-- Modal Structure -->





<div class=" tour-container">
    <h3 class="tc b">OUR POPULAR FLIGHTS</h3>
    <h5 class="tc  indigo-text">Grab it Now @ 20% off</h5>
    <div class="row tour-row ">
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fsp.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO SINGAPORE</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $499 only</span></p>



                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fi.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO INDIA</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $999 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fd.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO DUBAI</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $399 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fi.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO NEPAL</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $1099 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fd.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO AUSTRALIA</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $999 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>

            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fsp.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO USA</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $499 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fsp.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO THAILAND</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $899 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fi.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO NEWZEALAND</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $1199 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/fd.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">FLIGHT TO SRILANKA</h5>
                <p class="teal-text b"><span></span><br><span> Get 20% off on our popular flights</span><br><span> starting from $699 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                
            </div>
        </div>
    </div>
</div>



    <?php include('assets/includes/footer.php'); ?>




    

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
<script src="https://kit.fontawesome.com/b557c37cf8.js" crossorigin="anonymous"></script>
</body>
</html>