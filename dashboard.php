<?php
session_start();
if (isset($_SESSION["username"])) {
  $username = $_SESSION["username"];
  $idmember = $_SESSION["id_member"];
  session_write_close();
} else {
  session_unset();
  session_write_close();
  $url = "./index.php";
  header("Location: $url");
}

include 'navbar.php';

require_once("db.php");
$sql = "SELECT i.image, i.name, i.price, o.id_order, o.id_member
        FROM items i 
        JOIN orders o ON i.id_item = o.id_item 
        WHERE o.id_member = '$idmember' 
        ORDER BY o.id_order DESC";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Meta Start -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title style = "Font : cursive" >PATDUA COFFEE</title>
  <meta name="description" content="Patdua - Where coffee meet your heart and soul!" />
  <meta name="theme-color" content="#EF6E73" />
  <link rel="apple-touch-icon" href="./images/logo192.jpeg">
  <link rel="shortcut icon" href="./images/logo.jpeg">
  <!-- Meta End -->

  <!-- Link Start -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./css/materialize.css" type="text/css" rel="stylesheet" />
  <link href="./css/style.css" type="text/css" rel="stylesheet" />
  <link href="./css/session.css" type="text/css" rel="stylesheet" />
  <link rel="manifest" href="./manifest.json">
  <link rel="shortcut icon" href="./view.images/favicon.png" type="image/x-icon">
  <link rel="icon" href="./view/images/favicon.png" type="image/x-icon">
  <!-- Link End -->
</head>

<body>

  <!-- Content Start -->
  <div class="container" id="body-content">

    <!-- Order Start -->
    <div class="order">

      <!-- Banner Start -->
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br><br>
          <h1 class="header center red-text">Patdua Coffeeshop Order</h1>
          <div class="row center">
            <h5 class="header col s12 light">Put your credentials and order in the form below</h5>
          </div>
          <br><br>
        </div>
      </div>
      <!-- Banner Ends -->

      <!-- Form Starts -->
      <div class="row">
        <div class="col s10 offset-s1">
          <div class="card red lighten-2">
            <div class="card-content white-text">
              <span class="card-title center-align">All of your orders from PatDua</span>
              <br>
              <div class="row">
                <form name="frmUser" method="post" action="" class="col s12">
                  <div class="message"><?php if (isset($message)) {
                                          echo $message;
                                        } ?></div>
                  <div style="padding-bottom:5px;">
                    <a href="add_order.php" class="link">
                      <i class="medium material-icons white-text right">add</i>
                    </a>
                  </div>
                  <br><br><br>
                  <table class="highlight centered responsive-table">
                    <thead>
                      <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Commands</th>
                      </tr>
                    </thead>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                      if ($i % 2 == 0)
                        $classname = "evenRow";
                      else
                        $classname = "oddRow";
                    ?>
                      <tbody>
                        <tr class="<?php if (isset($classname)) echo $classname; ?>">
                          <td><img src="images/menu/<?= $row['image']; ?>" width="200"></td>
                          <td><?php echo $row["name"]; ?></td>
                          <td>Rp<?php echo number_format($row["price"], 0, ',', '.'); ?></td> 
                          <td><a href="delete_order.php?order=<?php echo $row["id_order"]; ?>" class="link"><i class="small material-icons white-text">delete</i></a></td>
                        </tr>
                      </tbody>
                    <?php $i++;
                    } ?>
                  </table>
                  <br>
                  <div class="row">
                    <div class="center-align">
                      <a href="./checkout.php" class="btnLogin">Checkout</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>

      <!-- Form Ends -->

    </div>
    <!-- Order Ends -->

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
  <script src="./view/js/materialize.js"></script>
  <script src="./view/js/init.js"></script>
  <script src="./view/js/script.js"></script>
  <!-- Script End -->

</body>

</html>