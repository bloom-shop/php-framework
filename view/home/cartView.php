
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">

    <figure><a class="btn btn-default" href="<?php echo APP_DOC_ROOT . '/home/cartEmpty/'; ?>">Empty Cart</a></figure>

    <table class= "table table-striped table-hover">
        <thead>
          <tr class="danger">
            <th>Id</th>
            <th>Item Number</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Retail Each</th>
            <th>Subtotal</th>
          </tr>
      </thead>
      <tbody>

 <?php while($row = $dbObj->dbFetch("assoc")) {  ?>

      <tr>
          <td><?php print $row['id']; ?></td>
          <td><?php print $row['item_number']; ?></td>
          <td><?php print substr($row['Description'],0,100) . '...'; ?></td>
          <td><?php print $_SESSION['cart'][$row['id']]; ?></td>
          <td>$<?php print $row['Retail']; ?></td>
          <td>$<?php print number_format($row['Retail'] * $_SESSION['cart'][$row['id']], 2); ?></td>
      </tr>
<?php } ?>
  </tbody>
</table>
<figure><a class="btn btn-default" href="<?php echo APP_DOC_ROOT . '/home/checkout/'; ?>">Checkout</a></figure>


          </div>
        </div>

        <!-- end page content -->
