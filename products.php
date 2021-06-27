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
    <h3 class="tc b">OUR POPULAR TOUR</h3>
    <h5 class="tc  indigo-text"> Grab it Now @ 30% off</h5>
    <div class="row tour-row ">
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/sp.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">SINGAPORE TOUR</h5>
                <p class="teal-text b"><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $1199 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modalsp" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modalsp" class="modal">
   <div class="modal-content">
   <h4 class="black-text b">singapore/kuala lumpur  1199$</h4>
    <p class="black-text tl">This week-long holiday with your loved one in Malaysia and Singapore will be unforgettable. <br> While Genting Highlands offers a peaceful escape away from the bustle, be in awe of the colorful streets of Kuala Lumpur’s Chinatown. <br> Enjoy the captivating Thumbuakar dance performance at Singapore’s famed attraction, Night Safari. <br> The vast expanse of colorful flowers and plants at Gardens by the Bay will be a visual delight. <br> Don’t miss out on some adventure at Sentosa Island.</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/dubai.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">DUBAI TOUR</h5>
                <p class="teal-text b"><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $999 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modaldb" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modaldb" class="modal">
   <div class="modal-content">
   <h4 class="black-text b">
Dubai tour 999$
</h4>
     <p class="black-text tl">Arrive in Dubai by flight; relax and go for a Dhow Cruise with Dinner in the evening. <br>
Morning city tour of Dubai and shopping at Dragon Mart; evening Desert safari with BBQ dinner. <br>
Visit the Burj Khalifa's 124th Floor, followed by the Dubai Aquarium and Underwater Zoo. <br>
Tour of Ferrari World and Abu Dhabi. <br>
Morning shopping and leave for the airport!
</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/thailand.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">THAILAND TOUR</h5>
                <p class="teal-text b"><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $599 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modalth" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modalth" class="modal">
   <div class="modal-content">
   <h4 class="black-text b">Thailand 599$</h4>
     <p class="black-text tl">
Day 1: Arrival in Bangkok airport and transfer to Pattaya by road. Attend the Alcazar show at Night.
<br>
Day 2: Coral Island tour.
<br>
Day 3: Leisure day; you can relax on the beach or go shopping or get a massage.
<br>
Day 4: Transfer to Bangkok. Evening dinner cruise on the Chao Praya river.
<br>
Day 5: Half day Temple and City Tour in the morning, with time for shopping afterwards.
<br>
Day 6: Departure day.
</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
            </div>
        </div>
    </div>
        <div class="row tour-row ">
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/paris.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">PARIS TOUR</h5>
                <p class="teal-text b"><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $399 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modalps" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modalps" class="modal">
   <div class="modal-content">
     <h4 class="black-text b">
Paris  399$
</h4>
     <p class="black-text tl">Pick this holiday for a relaxing vacation in Paris and Switzerland. <br> Your tour embarks from Paris. Enjoy an excursion to popular attractions like the iconic Eiffel Tower. <br> After experiencing the beautiful city, you will drive past mustard fields through Burgundy to reach Switzerland. <br> While there, you can opt for a tour to Interlaken and then to the Trummelbach Falls. <br> Photostop at Zurich Lake and a cable car ride to Mt. <br> class="black-text b" Titlis are the main highlights of the holiday</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/srilanka.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">SRILANKA TOUR</h5>
                <p class="teal-text "><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $899 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modalsa" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modalsa" class="modal">
   <div class="modal-content">
     <h4 class="black-text b">srilanka 899$</h4>
     <p class="black-text tl">Pinnawala Entrance with Lunch <br>
Complimentary visit to Gem Gallery with Kandy Cultural Show <br>
Complimentary visit to Spice Garden
</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/new-zealand.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">NEWZELAND TOUR</h5>
                <p class="teal-text b"><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $1999 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modalnd" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modalnd" class="modal">
   <div class="modal-content">
     <h4 class="black-text b">newzeland 1999$</h4>
     <p class="black-text tl">Holiday in New Zealand with your loved ones will let you cherish your memories forever. <br> In Auckland, the famed SEA LIFE Kelly Tarlton's Aquarium will be enjoyable. <br> Waitomo Glowworm Caves offer the perfect adventure. <br> The natural geothermal marvels at Te Puia are a sight to behold. <br> Enjoy a farm show at Agrodome near Rotorua and go for a cruise at Milford Sound. <br> Don’t miss the scenic Haast Pass. <br> Marvel at the scenery more when on the famed TranzAlpine train.</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
            </div>
        </div>
        <div class="col s12 l3 m2  z-depth-2 white box">
            <div class="tour-image pt2 pb2 grow">
                <img src="assets/images/nepal.jpg" alt="">
            </div>
            <div class="tour-content tc mb4">
                <h5 class="b black-text">NEPAL TOUR</h5>
                <p class="teal-text b"><span>Hotels Available</span><br><span> Get 30% off on our popular tour packages</span><br><span> Starting from $499 only</span></p>
                <a href="#modal1" class="btn my-btn grow modal-trigger">Book Now</a>
                <a href="#modalnl" class="btn my-btn grow modal-trigger ml2">Show Details</a>
 

 <!-- Modal Structure -->
 <div id="modalnl" class="modal">
   <div class="modal-content">
     <h4 class="black-text b">Nepal 499$</h4>
     <p class="black-text tl">Are you bored with the humdrum of city life? Enjoy the best of Nepal’s attractions with this week-long vacation. <br> Situated on the banks of Bagmati River, Pashupatinath temple, a UNESCO World Heritage Site is a significant Hindu pilgrimage destination in the Kathmandu Valley. <br> Explore the rich biodiversity at Chitwan National Park with an exciting elephant safari. <br> Near Pokhara, pay respects at the sacred Gupteshwar Mahadev Cave, comprising an enormous stalagmite formation dedicated to Lord</p>
   </div>
   <!-- <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
   </div> -->
 </div>
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