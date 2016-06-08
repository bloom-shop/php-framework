
<!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">

              <h3><strong>Item Number:  <?php print $row['item_number']; ?></h3>
              <p>
              <img src="<?php echo APP_BLOG_IMG . '/' . $row['id'] . '.jpg'; ?>" width=35%>
              <?php print $row['Description']; ?></p>
              <small>Quantity on Hand: <?php print $row['Quantity']; ?></small>
              <br>
              <h3><strong>$<?php print $row['Retail']; ?> each</h3>

              <a class="btn btn-default" href="<?php echo APP_DOC_ROOT . '/home/addToCart/' . $row['id']; ?>">Add to Cart</a>
              <br>


          </div>
        </div>
<!-- end page content -->
