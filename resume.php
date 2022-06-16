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
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Panel</a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Account Settings"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
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
  <div class="w3-row w3-container w3-card w3-white w3-round w3-margin">
    <!-- Left Column -->
    
    <!-- Middle Column -->
    <div class="w3-col m6">
        <!-- <div class="w3-container w3-card w3-white w3-round w3-margin"><br> -->
            <!-- <center><h4>Formulaire de qualités</h4><br></center> -->
        
            <form action="controllers/updateQoS.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
                <h2 class="w3-center">OUEDRAOGO DRAMANE</h2>
                
                <input class="w3-input w3-border" name="user" type="hidden" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité" value="Fait preuve de proactivité">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité" value="Fait preuve d'honnêteté">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité" value="A un sens de l’organisation, une qualité personnelle pour un résultat professionel">
                    </div>
                </div>

                <p class="w3-center">
                    <button class="w3-button w3-section w3-blue w3-ripple"> Modifier </button>
                </p>

            </form>

            <form action="controllers/updateQoS.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
                <h2 class="w3-center">SAWADOGO SAMUEL</h2>
                
                <input class="w3-input w3-border" name="user" type="hidden" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité" value="Fait preuve de proactivité">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité" value="Fait preuve d'honnêteté">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité" value="A un sens de l’organisation, une qualité personnelle pour un résultat professionel">
                    </div>
                </div>

                <p class="w3-center">
                    <button class="w3-button w3-section w3-blue w3-ripple"> Modifier </button>
                </p>

            </form>

            <form action="controllers/updateQoS.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
                <h2 class="w3-center">KONATE LARISSA</h2>
                
                <input class="w3-input w3-border" name="user" type="hidden" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité" value="Fait preuve de proactivité">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité" value="Fait preuve d'honnêteté">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité" value="A un sens de l’organisation, une qualité personnelle pour un résultat professionel">
                    </div>
                </div>

                <p class="w3-center">
                    <button class="w3-button w3-section w3-blue w3-ripple"> Modifier </button>
                </p>

            </form>
            <hr class="w3-clear">
        <!-- </div> -->
    </div>

    <div class="w3-col m6">
        <!-- <div class="w3-container w3-card w3-white w3-round w3-margin"><br> -->
            <!-- <center><h4>Formulaire de qualités</h4><br></center> -->

            <form action="controllers/updateQoS.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
                <h2 class="w3-center">TOURE AWA</h2>
                
                <input class="w3-input w3-border" name="user" type="hidden" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité" value="Fait preuve de proactivité">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité" value="Fait preuve d'honnêteté">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité" value="A un sens de l’organisation, une qualité personnelle pour un résultat professionel">
                    </div>
                </div>

                <p class="w3-center">
                    <button class="w3-button w3-section w3-blue w3-ripple"> Modifier </button>
                </p>

            </form>

            <form action="controllers/updateQoS.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
                <h2 class="w3-center">ILBOUDO ISMAEL</h2>
                
                <input class="w3-input w3-border" name="user" type="hidden" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité" value="Fait preuve de proactivité">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité" value="Fait preuve d'honnêteté">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité" value="A un sens de l’organisation, une qualité personnelle pour un résultat professionel">
                    </div>
                </div>

                <p class="w3-center">
                    <button class="w3-button w3-section w3-blue w3-ripple"> Modifier </button>
                </p>

            </form>

            <form action="controllers/updateQoS.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
                <h2 class="w3-center">COMPAORE RAYMOND</h2>
                
                <input class="w3-input w3-border" name="user" type="hidden" value="OUEDRAOGO DRAMANE" placeholder="First Name" readonly>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality1" type="text" placeholder="Definition de la première qualité" value="Fait preuve de proactivité">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality2" type="text" placeholder="Definition de la deuxieme qualité" value="Fait preuve d'honnêteté">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border" name="quality3" type="text" placeholder="Definition de la troisième qualité" value="A un sens de l’organisation, une qualité personnelle pour un résultat professionel">
                    </div>
                </div>

                <p class="w3-center">
                    <button class="w3-button w3-section w3-blue w3-ripple"> Modifier </button>
                </p>

            </form>

            <hr class="w3-clear">
        <!-- </div> -->
    </div>
    
    <p class="w3-center">
        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-section w3-green w3-ripple w3-block w3-round-large"> Terminer </button>
    </p>
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Modale de fin de resume -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
  
      <div class="w3-center"><br>
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span> -->
        <span onclick="nextHyperLinks();" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
        <img src="assets/w3c/validate2.webp" alt="Validation success" style="width:70%; height:auto" class="w3-circle w3-margin-top">
      </div>
    </div>
  </div>
</div>




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

function nextHyperLinks() {
  document.getElementById("id01").href = "panel.php?already=true"; // you probably don't need this if you will anyway navigate away from the page.
  window.open('panel.php?already=true', '_self');
}

</script>

</body>
</html> 
