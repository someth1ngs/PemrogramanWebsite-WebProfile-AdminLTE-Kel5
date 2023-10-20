<?php
session_start();

// navbar
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
    <link rel="apple-touch-icon" href="./images/logo192.jpeg">
    <link rel="shortcut icon" href="./images/logo.jpeg">
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

        <!-- Menu Start -->
        <div class="menu">

            <!--Banner Start -->
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <br><br>
                    <h1 class="header center green-text">Our Menu</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Behold all of our tasty coffee created with barista skills</h5>
                    </div>
                    <br><br>
                </div>
            </div>
            <!--Banner End -->

            <!-- Menu Details Start -->
            <!-- Row Start -->
            <div class="row">
                <div class="col s12 l0">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/product-1.jpeg" alt="COFFEE SIGNATURE">
                            <span class="card-title green-text"><strong>COFFEE SIGNATURE</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l0">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/product-2.jpeg" alt="DRINK HOT/COLD">
                            <span class="card-title green-text"><strong>DRINK HOT/COLD</strong></span>
                        </div>
                    </div>
                </div>

                <div class="col s12 l0">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/product-3.jpeg" alt="TEA BASED">
                            <span class="card-title green-text"><strong>TEA BASED</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row End -->

            <!-- Row Start -->
                <div class="col s12 l0">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./images/menu/product-4.jpeg" alt="SIGNATURE NON COFFEE">
                            <span class="card-title green-text"><strong>SIGNATURE NON COFFEE</strong></span>
                        </div>
                    </div>
                </div>
            <!--Row End -->

            <!-- Menu Details End -->

        </div>
        <!-- Menu Ends -->

    </div>
    <!-- Content End -->

    <!-- Footer Start -->
    <footer class="page-footer" style="background-color: #1B5E20;">
        <div class="container">
            <div class="row">
                <div class="col l12 s12 center-align">
                    <h5 class="white-text">PATDUA COFFEE</h5>
                    <p class="white-text text-lighten-4">Where coffee meets your heart and soul!</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright center-align">
            <div class="container">
                © 2023 PatDua <br>
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