<!DOCTYPE html>
<html>
<head>
<title>Neeleader | Panel</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href=https://neeleader.com/views/neeleader/assets/img/favicon_neeleader.png>
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
</head>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Neeleader</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <a href="login" onclick="return confirm('Vous êtes sûr de vouloir vous déconnecter ?');" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="assets/w3c/avatar3.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
  </a>
  </div>
</div>

<!-- Navbar on small screens -->
<!-- <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div> -->

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         
         <p class="w3-center"><img src="assets/w3c/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <h4 class="w3-center">Prosper SEDGO</h4>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Fullstack developer</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Ouaga, BF</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Sept 09, 1988</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> Mes Groupes</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Groupe 01</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Mes evennements</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Formation leadership</p>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Albums</button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="assets/w3c/lights.jpeg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/assets/w3c/nature.jpeg" style="width:100%" class="w3-margin-bottom">
           </div>

           <div class="w3-half">
             <img src="assets/w3c/nature.jpeg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/w3c/lights.jpeg" style="width:100%" class="w3-margin-bottom">
           </div>

           <div class="w3-half">
             <img src="/assets/w3c/lights.jpeg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="assets/w3c/nature.jpeg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey! Prosper SEDGO</strong></p>
        <p>Ici vous pouvez nous dire ce que vous pensez de vos collaborateurs. 
          Pour cela , vous devez nous citer, 
          03 qualités de chacun de vos collaborateurs 
          en remplissant le formulaire ci-dessous.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="assets/w3c/avatar2.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <span class="w3-right w3-opacity">1 min</span>
        <h4>Neeleader Admin</h4><br>
        <!-- <hr class="w3-clear"> -->
        <p>
        Bienvenue Prosper SEDGO, ici vous pouvez nous dire ce que vous pensez de vos collaborateurs.
        Pour cela , vous devez nous citer, 3 qualités de chacun de vos collaborateurs en remplissant le formulaire
        ci-dessous.
        </p>
        
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <!-- <center><h4>Formulaire de qualités</h4><br></center> -->
        
        <?php
          if(isset($_GET['level'])){
            $bar   = ($_GET['level'] <= 10) ? 10 * $_GET['level'] : 1;
            $level = ($_GET['level'] <= 10) ? $_GET['level'] : 1;
        ?>
          <div class="w3-light-grey w3-round-large">
            <div class="w3-container w3-green w3-round-large" style="width:<?php echo $bar?>%"><?php echo $level."/10"?></div>
          </div>
        <?php
          }else{
            $bar = 10;
        ?>
          <div class="w3-light-grey w3-round-large">
            <div class="w3-container w3-green w3-round-large" style="width:<?php echo $bar?>%"> 1/11</div>
          </div>
        <?php
          }
        ?>

        <form action="controllers/addQos.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
          <h2 class="w3-center">Evaluations de qualités</h2>
          
          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border" name="user" type="text" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité">
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité">
              </div>
          </div>

          <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
              <div class="w3-rest">
                <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité">
              </div>
          </div>

          <?php
            if(!isset($_GET['level']) || $_GET['level'] != 10){
          ?>
            <p class="w3-center">
              <button class="w3-button w3-section w3-blue w3-ripple"> Passer au suivant </button>
            </p>
          <?php
            }else{
          ?>
            <p class="w3-center">
              <a href="resume" class="w3-button w3-section w3-green w3-ripple"> Voir le resumé </a>
            </p>
          <?php
            }
          ?>

        </form>

        <hr class="w3-clear">
      </div>
      
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Laisser un message à l'administrateur</h6>
              <p contenteditable="true" class="w3-border w3-padding">Message: ......</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Envoyer</button> 
              <!-- <a href="https://api.whatsapp.com/send?phone=whatsappphonenumber&text=urlencodedtext"> -->
            </div>
          </div>
        </div>
      </div>
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Evénement à venir :</p>
          <img src="assets/w3c/nature.jpeg" alt="Forest" style="width:100%;">
          <p><strong>Vacances</strong></p>
          <p>Lundi 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->
<footer class="w3-container w3-theme-d3 w3-padding-16">
  <h5></h5>
</footer>

<footer class="w3-container w3-theme-d5">
  <center><p>Powered by <a href="http://www.neeleader.com" target="_blank">Neeleader@2022</a></p></center>
</footer>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// function whatsapp(id){
//   let msg = document.getElementById(id)
//   if(msg){

//   }
// }

</script>

</body>
</html> 
