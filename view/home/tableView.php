
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <table class= table table-striped table-condensed">
                <thead>
                  <tr>
                    <th>Item_id</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Cost</th>
                    <th>Retail</th>
                  </tr>
              </thead>
              <tbody>
<?php while($row = $dbObj->dbFetch("assoc")){
  ?>
  <tr>
    <td><?php print $row['item_id']; ?></td>
    <td><?php print $row['Description']; ?></td>
    <td><?php print $row['Quantity']; ?></td>
    <td><?php print $row['Cost']; ?></td>
    <td><?php print $row['Retail']; ?></td>
  </tr>
<?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- end page content -->
