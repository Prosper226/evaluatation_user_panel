<?php

define('HOST',"http://".$_SERVER['HTTP_HOST'].'/');

$availableROOT = [

    // Views
    '/login'    =>  'views/login',
    '/panel'    =>  'views/panel',
    '/resume'   =>  'views/resume',

    // Controllers
    // '/auth'        => 'controllers/login',
    // '/addQos'       => 'controllers/addQos',
    // '/updateSos'    => 'controllers/updateQoS',
];

$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : '/login';


if(!array_key_exists($path, $availableROOT)){ ?>
    
    <!DOCTYPE html>
    <html>
    <title>Neeleader|Forms</title>
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
                        <span onclick="window.history.back();" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                        <img src="assets/w3c/404.jpg" alt="Avatar" style="width:100%; height:auto" class="w3-circle w3-margin-top">
                    </div>
                    <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <span style="text-align: center;" class="w3-center w3-padding w3-hide-small"> La page recherchée <a href="#" onclick="window.history.back();">n'existe pas!</a></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>

<?php }else{
    try{
        $template = $availableROOT[$path];
        render($template);
    }catch(Exception $e){
        error_log('error: '.$e->getMessage());
        exit();
    }
}

function render($template){
    ob_start();
    include($template.'.php');
    $content    =   ob_get_clean();
    echo($content);
}

function redirect($route){
    header("Location:".HOST.$route);
}


?>