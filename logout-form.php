<?php
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
include 'navbar.php';
?>

<!DOCTYPE html>

<html lang="en">
  
    <head>
        <!-- Meta Start -->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>PATDUA COFFEE</title>
        <meta name="description" content="PATDUA - Where coffee meet your heart and soul!"/>
        <meta name="theme-color" content="#EF6E73"/>
        <link rel="apple-touch-icon" href="./images/logo192.jpeg">
        <link rel="shortcut icon" href="./images/logo.jpeg">
        <!-- Meta End -->
        
        <!-- Link Start -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="./css/materialize.css" type="text/css" rel="stylesheet"/>
        <link href="./css/style.css" type="text/css" rel="stylesheet"/>
        <link href="./css/session.css" type="text/css" rel="stylesheet"/>
        <link rel="manifest" href="./manifest.json">
        <link rel="shortcut icon" href="./view.images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="./view/images/favicon.ico" type="image/x-icon">
        <!-- Link End -->
    </head>
    
    <body>

    <!-- Content Start -->
    <div class="container" id="body-content">
        
        <!-- Logout Start -->
        <br><br>
        <div class="row">
            <div class="col s12 l6 offset-l3">
                <div class="card">
                    <div class="card-image">
                        <img src="images/profile.jpg">
                        <span class="card-title white-text center-align">HELLO THERE!</span>
                    </div>
                    <div class="card-content center-align">
                        <p>Welcome <b><?php echo $username; ?></b>, You have successfully logged in!<br>
                        Click to <a href="logout.php" class="logout-button">Logout</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Logout Ends -->
        
    </div>../
    <!-- Content End -->
       
    <!-- Footer Start -->
    <footer class="page-footer">
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
    <script src="./view/js/materialize.js"></script>
    <script src="./view/js/init.js"></script>
    <script src="./view/js/script.js"></script>
    <!-- Script End -->
        
  </body>
  
</html>