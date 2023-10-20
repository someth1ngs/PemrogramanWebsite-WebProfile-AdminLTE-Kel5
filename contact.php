<?php
session_start();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Meta Start -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PATDUA COFFEE</title>
    <meta name="description" content="Tastefood - Where food meet your heart and soul!" />
    <meta name="theme-color" content="#EF6E73" />
    <link rel="apple-touch-icon" href="./images/logo192.jpeg">
    <link rel="shortcut icon" href="./images/logo.jpeg">
    <!-- Meta End -->

    <!-- Link Start -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./css/materialize.css" type="text/css" rel="stylesheet" />
    <link href="./css/style.css" type="text/css" rel="stylesheet" />
    <link rel="manifest" href="./manifest.json">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./images/favicon.png" type="image/x-icon">
    <!-- Link End -->
</head>

<body>
    <!-- Navbar Start -->
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo"><img class="responsive-img" src="./images/logo.jpeg" width="60" height="auto"></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect" href="home.php">Home</a></li>
                <li><a class="waves-effect" href="menu.php">Our Menu</a></li>
                <li><a class="waves-effect" href="location.php">Location</a></li>
                <li><a class="waves-effect" href="contact.php">Contact</a></li>
                <?php if(!empty($_SESSION["username"])) 
                {
                    echo '<li><a class="waves-effect" href="dashboard.php">Orders</a></li>';
                    echo '<li><a class="waves-effect" href="index.php">Logout</a></li>';
                }
                else
                {
                    echo '<li><a class="waves-effect" href="login-form.php">Login</a></li>';   
                    echo '<li><a class="waves-effect" href="register.php">Register</a></li>';
                };?>
            </ul>
            <ul id="nav-mobile" class="sidenav">
            <li><a class="waves-effect" href="home.php">Home</a></li>
                <li><a class="waves-effect" href="menu.php">Our Menu</a></li>
                <li><a class="waves-effect" href="location.php">Location</a></li>
                <li><a class="waves-effect" href="contact.php">Contact</a></li>
                <?php if(!empty($_SESSION["username"])) 
                {
                    echo '<li><a class="waves-effect" href="dashboard.php">Orders</a></li>';
                    echo '<li><a class="waves-effect" href="index.php">Logout</a></li>';
                }
                else
                {
                    echo '<li><a class="waves-effect" href="login-form.php">Login</a></li>';   
                    echo '<li><a class="waves-effect" href="register.php">Register</a></li>';
                };?>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="container" id="body-content">

        <!-- Contact Start -->
        <div class="contact">

            <!-- Banner Start -->
            <div class="section no-pad-bot" id="index-banner">
                <div class="container">
                    <br><br>
                    <h1 class="header center green-text">Our Contact</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Kami menawarkan delivery service dan reservasi di tempat</h5>
                    </div>
                    <br><br>
                </div>
            </div>
            <!-- Banner Ends -->

            <!-- How to Order Start -->
            <div class="how-to-order">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <ol>
                            <h4>Delivery Service</h4>
                            <li>Cek jam operasional PATDUA Coffee</li>
                            <li>Silakan login dan gunakan menu online kami untuk memilih kopi favorit Anda</li>
                            <li>Checkout pesanan Anda dan beri kami detail alamat Anda dalam formulir yang diberikan</li>
                            <li>Makanan favorit Anda akan diproses dan dikirimkan kepada Anda segera</li>
                            <li>Atau, Anda dapat menggunakan mitra pengiriman makanan kami seperti Go-jek untuk memesan dari kami (cukup cari "Patdua")</li>
                        </ol>
                    </div>
                    <div class="col s12 m6 l6">
                        <ol>
                            <h4>In-Place Dining</h4>
                            <li>Cek jam operasional PATDUA Coffee</li>
                            <li>Jika ingin melakukan reservasi, bisa langsung menghubungi kontak pada list yang tertera di bawah</li>
                            <li>Setelah melakukan reservasi, bisa mengunjungi dan datang ke coffeeshop kami</li>
                            <li>Kami akan melayani Anda dengan senang hati dan profesional di coffee shop kami</li>
                        </ol>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- How to Order Ends -->

            <!-- Opening Time Start -->
            <div class="opening-time">
                <div class="row">
                    <div class="col s6 offset-s3">
                        <table class="highlight centered responsive">
                            <thead>
                                <tr>
                                    <th>Days of the Week</th>
                                    <th>Opening Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>EVERYDAY</td>
                                    <td>9 AM - 11 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- Opening Time Ends -->

            <!--Details Start-->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="large material-icons">sms</i></h2>
                        <h5 class="center">Whatsapp</h5>
                        <h6 class="center">+62 851-7435-4242</h6>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="material-icons">mail</i></h2>
                        <h5 class="center">E-mail</h5>
                        <h6 class="center">patdua@gmail.com</h6>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center green-text"><i class="material-icons">motorcycle</i></h2>
                        <h5 class="center">Go-Food</h5>
                        <h6 class="center">Patdua Eatery</h6>
                    </div>
                </div>
            </div>
            <br><br>
            <!--Details Ends-->
        <!-- Contact Ends -->

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