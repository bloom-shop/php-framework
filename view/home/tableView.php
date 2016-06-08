
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <table id= "tableFormat" class= "table table-hover table-striped">
                <thead>
                  <tr class="danger">
                    <th>Image</th>
                    <th>Item Number</th>
                    <th>Description</th>
                    <th>Quantity on Hand</th>
                    <th>Retail Each</th>
                  </tr>
              </thead>
              <tbody>
<?php while($row = $dbObj->dbFetch("assoc")){
  ?>
  <tr>
    <td><img src="<?php echo APP_BLOG_IMG . '/' . $row['id'] . '.jpg'; ?>"width=120 height=90></td>
    <?php $row['id']; ?>
    <td><a href="<?php echo APP_DOC_ROOT . '/home/Item/' . $row['id']; ?>"class="linkStyle">
      <?php print $row['item_number']; ?>
    </a></td>
    <td><?php print substr($row['Description'],0,100) . '...'; ?></td>
    <td><?php print $row['Quantity']; ?></td>
    <td>$<?php print $row['Retail']; ?></td>
  </tr>
<?php } ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- end page content -->
