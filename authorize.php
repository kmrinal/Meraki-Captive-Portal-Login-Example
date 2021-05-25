<?php

## MIT License

## Copyright (c) 2021 cnctdWiFi (https://cnctdwifi.com) and Kumar Mrinal (kumar@cnctdwifi.com)
## Checkout LICENSE file for more detail

if((isset($_POST['base_url'])) && (isset($_POST['continue_url'])) && (isset($_POST['session_duration']))){
    $redirect_url = $_POST['base_url']."?continue_url=".$_POST['continue_url']."&duration=".$_POST['session_duration']; // This redirects user $_POST['continue_url'] after successful login to grants access for 1 Hour
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css"> 
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/script.js" ></script>
    <title>Meraki WiFi login example</title>
</head>
<body>
<!-- div used to make the body blur -->
    <div class="overlay" id="overlay" onclick="closeNav()"></div>

  <div class="outer-container">
    <section class="index-part-1">
        <div class="head-bar">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6">
                    <a href="index.html"><img class="img-responsive" src="assets/img/cnctdwifi-logo-only-graphics-xsm.png"></a>
                </div>
                <div class="col-lg-6 col-xs-6 col-sm-6 col-md-6 text-right">
                    <div id="mySidenav" class="sidenav text-center">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
                        <a href="#">About</a><hr>
                                    
                    </div>
                    <div class="main" id="main">
                      <a href="#" onclick="openNav()">MENU &#9776;</a>
                    </div>
                </div>
              </div>
              <hr>
          </div>
          </div>
          <div class="wow">
          <div class="container">
            <div class="row">
               <div class="wow-logo">
                  <img class="img-responsive img-logo" src="assets/img/Meraki.png">
               </div> 
               <div class="font-1 helmet text-center">
                 <p> Authorizing WiFi User</p>
                    
               </div>
               <div class="wow-btn text-center">
                    <img class="img-responsive img-logo" src="assets/img/loading.gif">
               </div>
            </div>
          
          </div>
        </div>
    </section>

  </div>

    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-xlg-5 col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <div class="footer-p1">
                    <p class="font-2">Copyrights 2021-2022 by cnctd WiFi</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <img class="img-responsive foot-img" src="assets/img/cnctd-logo-without-tagline-xs-1.png">
          </div>
          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <div class="footer-p2" >
                     <p class="font-2">Made with  <i class="fa fa-heart" aria-hidden="true" ></i> by <a href="https://cnctdwifi.com" target="_blank">cnctd WiFi</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
 
</body>
</html>

<?php
## Redirect user to redirect url (which we created earlier) after rendering the page. Adding a few seconds of wait time before redirection will enhance user experience.
header('Location: '.$redirect_url);


?>