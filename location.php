<?php
session_start();

// Navbar
include 'navbar.php'
?>


<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Meta Start -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PATDUA COFFEE</title>
  <meta name="description" content="PATDUA - Where coffee meet your heart and soul!" />
  <meta name="theme-color" content="#EF6E73" />
  <link rel="apple-touch-icon" href="../images/logo192.jpeg">
  <link rel="shortcut icon" href="../images/logo.jpeg">
  <!-- Meta End -->

  <!-- Link Start -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="./css/style.css" type="text/css" rel="stylesheet" />
  <link rel="manifest" href="./manifest.json">
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
  <link rel="icon" href="./images/favicon.png" type="image/x-icon">
  <!-- Link End -->
</head>

<body>

  <!-- Content Start -->
  <div class="container" id="body-content">

    <!-- Location Start -->
    <div class="location">

      <!-- Banner Start -->
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br><br>
          <h1 class="header center green-text">Our Location</h1>
          <div class="row center">
            <h5 class="header col s12 light">Located in the heart of Surabaya to keep in touch with you</h5>
          </div>
          <br>
        </div>
      </div>
      <!-- Banner Ends -->

      <!-- Place Starts -->
      <div class="row">
        <div class="col s12">
          <div class="icon-block">
              <h2 class="center green-text">
              <a href="https://goo.gl/maps/pWCv8eamtGrtG7DL6">
                <i class="large material-icons green-text">location_on</i>
              </h2>
            <h5 class="center green-text">Jl. Rungkut Madya No.203, Rungkut Kidul, Kec. Rungkut <br> Surabaya, Jawa Timur 60294</h5>
            <br>
            </a>
          </div>
        </div>
      </div>
      <!-- Place Ends -->

      <!-- Photo Starts -->
      <div class="row">
        <div class="col s12 m8 offset-m2">
          <div class="card hoverable">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="./images/location.jpeg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4 center-align">Our cozy place<i class="material-icons right">arrow_downward</i></span>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">A little love letter for you<i class="material-icons right">close</i></span>
              <p> - Meeting Room > sangat cocok dan nyaman untuk melakukan meeting, diskusi, pertemuan dengan rekan kerja maupun teman-teman </p>
                  <p> - Indoor Room > charging friendly, cozy, full AC dan tersedia banyak tempat yang nyaman dan fleksibel untuk digunakan </p>
                  <p> - Terdapat Bean Bag Seat </p>
                  <p> - Musholla </p>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <!-- Photo Ends -->

    </div>
    <!-- Location Ends -->

  </div>
  <!-- Content End -->

    <!-- Footer Start -->
    <footer class="page-footer" style="background-color: #1B5E20">
        <div class="container">
            <div class="row">
                <div class="col l12 s12 center-align">
                    <h5 class="white-text">PATDUA</h5>
                    <p class="grey-text text-lighten-4">Where coffee meets your heart and soul!</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright center-align">
            <div class="container">
                © 2023 Patdua<br>
                <a href="https://instagram.com/patdua_eatery?igshid=MzRlODBiNWFlZA==">Visit Our Instagram</a>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

  <!-- Script Start -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="./js/materialize.js"></script>
  <script src="./js/init.js"></script>
  <script src="./js/script.js"></script>
  <!-- Script End -->

</body>

</html>