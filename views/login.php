<!DOCTYPE html>
<html>
<title>Neeleader|Auth</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="shortcut icon" type="image/x-icon" href=https://neeleader.com/views/neeleader/assets/img/favicon_neeleader.png>
<body>
    <div class="w3-container w3-padding-32">
        <div>
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <center><span class="w3-right w3-padding w3-hide-small"><a href="#"></a></span></center>
                </div>
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                    <img src="assets/w3c/avatar3.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
                </div>
                <form class="w3-container" action="controllers/auth.php" method="post" id="loginForm">
                    <div class="w3-section">
                        <label><b>Pseudonyme</b></label>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Entrer votre pseudonyme" name="username" required autocomplete="off">
                        <label><b>Chaine de connexion</b></label>
                        <input class="w3-input w3-border" type="text" placeholder="Entrer la chaine de connexion" name="password" required autocomplete="off">
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Se connecter</button>
                    </div>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="resetInput();" id="reset_btn" class="w3-button w3-red">Annuler</button>
                    <span class="w3-right w3-padding w3-hide-small">Contacter l'<a href="mailto:nongomariam@neeleader.com">administrateur?</a></span>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // function resetInput() {
            // const reset_btn = document.getElementById('reset_btn');
            // event.preventDefault();
            // const inputs = document.querySelectorAll('#username, #password');
            // inputs.forEach(input => {
            //         input.value = '';
            //     }
            // );
        // }
    </script>
    <script>
        // Accordion
        function resetInput() {
            const form = document.getElementById('loginForm');
            event.preventDefault();
            form.reset();
        }
    </script>
</body>
</html>
