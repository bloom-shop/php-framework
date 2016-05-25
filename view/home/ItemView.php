
<!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">

              <h3><strong>Item Number:  <?php print $row['item_number']; ?></h3>
              <p>
              <img src="<?php echo APP_BLOG_IMG . '/' . $row['id'] . '.jpg'; ?>"><?php print $row['Description']; ?></p>
              <br>
              <h3><strong>$<?php print $row['Retail']; ?> each</h3>
              <small>Quantity on Hand: <?php print $row['Quantity']; ?></small>

          </div>
        </div>
<!-- end page content -->
