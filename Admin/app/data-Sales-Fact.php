    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Time ID</th>
                      <th>Customer ID</th>
                      <th>Employee ID</th>
                      <th>Product ID</th>
                      <th>Sub Total</th>
                      <th>Line Total</th>
                      <th>Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($conn, "SELECT * FROM sales_fact LIMIT 1000");
                    while ($order = mysqli_fetch_array($query)) {
                      $no++;
                    ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $order['salesfactID']; ?></td>
                        <td><?php echo $order['time_id']; ?></td>
                        <td><?php echo $order['customer_id']; ?></td>
                        <td><?php echo $order['employee_id']; ?></td>
                        <td><?php echo $order['product_id']; ?></td>
                        <td><?php echo $order['sub_total']; ?></td>
                        <td><?php echo $order['line_total']; ?></td>
                        <td><?php echo $order['order_qty']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Time ID</th>
                      <th>Customer ID</th>
                      <th>Employee ID</th>
                      <th>Product ID</th>
                      <th>Sub Total</th>
                      <th>Line Total</th>
                      <th>Quantity</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->