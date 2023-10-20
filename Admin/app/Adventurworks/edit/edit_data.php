<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <title>Adventureworks</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script> -->
  </head>
  <?php include '../../../conf/config.php';
  $query = mysqli_query($conn, "SELECT *
FROM orders;");
  $list = mysqli_fetch_array($query); ?>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">
    <div class="card card-info">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="GET" action="./data.php">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">ID ORDER</label>
              <div class="col">
                <input type="text" class="form-control" placeholder="id" name="kode" value="<?php echo $list['id_order'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">INVOICE</label>
              <div class="col">
                <input type="text" class="form-control" placeholder="Invoice" name="Invoice" value="<?php echo $list['invoice'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">MEMBER ID</label>
              <div class="col">
                <input type="text" class="form-control" placeholder="Member ID" name="member" value="<?php echo $list['id_member'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">ITEM ID</label>
              <div class="col">
                <input type="text" class="form-control" placeholder="item" id="quantityInput" name="item" value="<?php echo $list['id_item'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">QUANTITY</label>
              <div class="col">
                <input type="text" class="form-control" placeholder="Quantity" id="quantityInput" name="Quantity" value="<?php echo $list['qty'] ?>">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">TOTAL</label>
              <div class="col">
                <input type="text" class="form-control" placeholder="Total" id="totalInput" name="Total" value="<?php echo $list['price'] ?>">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save Changes</button>
            <a href="../data-Sales-Fact.php" class="btn btn-default float-right">Cancel</a>
          </div>
          <!-- /.card-footer -->
  </div>
</Body>