<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <title>Adventureworks</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script> -->
  </head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">

    <?php include "side-bar.php";
    include "../../conf/config.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-3">
      <div class="col-12">
        <!-- /.card-header -->

        <!-- /.card-body -->
        <!-- /.card -->

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>

          <!-- /.card-header -->
          <div class="card-body">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-xl">
              Tambah Data
            </button>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Invoice</th>
                  <th>Member ID</th>
                  <th>Item ID</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($conn, "SELECT *
                    FROM orders_history;");
                while ($order = mysqli_fetch_array($query)) {
                  $no++;
                ?>
                  <tr>
                    <td><?php echo $order['id_order']; ?></td>
                    <td><?php echo $order['invoice']; ?></td>
                    <td><?php echo $order['id_member']; ?></td>
                    <td><?php echo $order['id_item']; ?></td>
                    <td><?php echo $order['qty']; ?></td>
                    <td><?php echo $order['price']; ?></td>
                    <td><?php echo $order['date']; ?></td>
                    <td>
                      <a href="edit/edit_data.php?kode=<?php echo $order['id_order']?>" class="btn btn-sm btn-success">Ubah</a>
                      <a href="delete/hapus_data.php?id=<?php echo $order['id_order'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Invoice</th>
                  <th>Member ID</th>
                  <th>Item ID</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Date</th>
                  <Th>Action</Th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <!-- Tambah -->
    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Extra Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="GET" action="add/tambah_data.php">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Invoice" name="Invoice">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Member ID" name="member">
                </div>
                <select class="col" id="menuSelect" name="item">
                  <option> </option>
                  <?php
                  $query1 = mysqli_query($conn, "SELECT * FROM items");
                  while ($menu = mysqli_fetch_array($query1)) {
                    echo '<option value="' . $menu['id_item'] . '" data-price="' . $menu['price'] . '" data-name="' . $menu['name'] . '">' . $menu['id_item'] . '</option>';
                  }
                  ?>
                </select>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Produk" readonly id="productInput">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Quantity" id="quantityInput" name="Quantity">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Total" readonly id="totalInput" name="Total">
                </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- EDIT -->
    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Large Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="get" action="edit/edit_data.php">
              <div class="form-row">
              <div class="col">
                  <input type="text" class="form-control" placeholder="id_order" name="id_order">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Invoice" name="Invoice">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Member ID" name="member">
                </div>
                <select class="col" id="menuSelect" name="item">
                  <option> </option>
                  <?php
                  $query1 = mysqli_query($conn, "SELECT * FROM items");
                  while ($menu = mysqli_fetch_array($query1)) { ?>
                    <option><?php echo $menu['id_item'] ?></option>
                    <?php } ?>
                </select>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Quantity" id="quantityInput" name="Quantity">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Total" id="totalInput" name="Total">
                </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>


    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script> -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(document).ready(function() {
    // Check if 'item' parameter is set in the URL
    var selectedItemId = '<?php echo isset($_GET['item']) ? $_GET['item'] : ''; ?>';

    // Set the selected item in the dropdown if 'item' parameter is set
    if (selectedItemId) {
      $('#menuSelect').val(selectedItemId);
      var selectedOption = $('#menuSelect option:selected');
      var productName = selectedOption.data('name');
      $('#productInput').val(productName);
    }

    $('#menuSelect').change(function() {
      var selectedOption = $('#menuSelect option:selected');
      var productName = selectedOption.data('name');
      $('#productInput').val(productName);
    });

    $('#quantityInput').keyup(function() {
      var selectedOption = $('#menuSelect option:selected');
      var price = parseFloat(selectedOption.data('price'));
      var quantity = parseInt($('#quantityInput').val());

      if (!isNaN(price) && !isNaN(quantity)) {
        var total = price * quantity;
        $('#totalInput').val(total);
      } else {
        $('#totalInput').val('');
      }
    });
  });
</script>

</html>