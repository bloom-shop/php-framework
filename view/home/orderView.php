

        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">

            <table class= "table table-striped table-hover">
                <thead>

                  <tr class="danger">
                    <th>Ordered By </th>
                    <th>Item Number</th>
                    <th>Description</th>
                    <th>Quantity Ordered</th>
                    <th>Retail</th>
                    <th>Subtotal</th>

                  </tr>
              </thead>
              <tbody>
        <?php while($row = $dbObj->dbFetch("assoc")){
        ?>

        <tr>
        <td><?php print $row['username']; ?></td>
        <td><?php print $row['item_number']; ?></td>
        <td><?php print $row['Description']; ?></td>
        <td><?php print $row['qty_ordered']; ?></td>
        <td>$<?php print $row['retail']; ?></td>
        <td>$<?php print $row['sub_total']; ?></td>
        </tr>
        <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- end page content -->
