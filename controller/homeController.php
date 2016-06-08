<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {

  case 'aboutus':
      if(isset($_POST['submit'])){
        print'<pre>';
        print_r($_POST);
        print'<pre>';
      }else{
      include( APP_VIEW .'/home/aboutusView.php' );
      }
      break;

    case 'addToCart':
        $itemId = $route->getParams()[2];

        if (isset($_SESSION["cart"][$itemId]))
        {
          $_SESSION["cart"][$itemId]++;
        }
        else
        {
          $_SESSION["cart"][$itemId] = 1;
        }

        $dbObj = new db();

        $sql = "SELECT * FROM store_inventory WHERE id = ?";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([$itemId]);

        $row = $dbObj->dbFetch("assoc");

        include( APP_VIEW .'/home/continueSubNav.php' );
        include( APP_VIEW .'/home/addItemView.php' );

        break;


    case 'cart':

        if (isset($_SESSION["cart"])) {
          $productIdList = implode(',', array_keys($_SESSION["cart"]));

          $dbObj = new db();
          $sql = "SELECT *
                  FROM store_inventory
                  WHERE id IN (" . $productIdList .")
                  ORDER BY item_number";
          $dbObj->dbPrepare($sql);
          $dbObj->dbExecute([]);

          include( APP_VIEW .'/home/continueSubNav.php' );
          include( APP_VIEW .'/home/cartView.php' );

        }
        else {
          include( APP_VIEW .'/home/continueSubNav.php' );
          include( APP_VIEW .'/home/cartEmptyView.php' );

        }
        break;

        case 'cartEmpty':
            $_SESSION["cart"] = null;
            $dbObj = new db();

            $sql = "SELECT * FROM store_inventory ORDER BY item_number";
            $dbObj->dbPrepare($sql);
            $dbObj->dbExecute([]);

            include( APP_VIEW .'/home/continueSubNav.php' );
            include( APP_VIEW .'/home/cartEmptyView.php' );

            break;


    case 'checkout':

        if (isset($_SESSION["cart"])) {
          $productIdList = implode(',', array_keys($_SESSION["cart"]));
          //create a new database connection
          $dbObj = new db();
          $sql = "SELECT *
                  FROM store_inventory
                  WHERE id IN (" . $productIdList . ")
                  ORDER BY item_number";
          $dbObj->dbPrepare($sql);
          $dbObj->dbExecute([]);

          $dbObj2 = new db();
          while($row = $dbObj->dbFetch("assoc")) {

               $sql = "INSERT INTO customer_orders2
                       (username, item_number, Description, qty_ordered, retail, sub_total)
                       VALUES
                       (?, ?, ?, ?, ?, ?)";

               $dbObj2->dbPrepare($sql);
               $dbObj2->dbExecute([
                 $_SESSION['username'],
                 $row['item_number'],
                 $row['Description'],
                 $_SESSION['cart'][$row['id']],
                 $row['Retail'],
                 number_format($row['Retail'] * $_SESSION['cart'][$row['id']], 2),
               ]);
          }

          $_SESSION["cart"] = null;

          include( APP_VIEW .'/home/checkoutView.php' );

        }
        else
        {
          include( APP_VIEW .'/home/cartEmptyView.php' );
        }
        break;

    case 'contact':
        if(isset($_POST['submit'])){
          print'<pre>';
          print_r($_POST);
          print'<pre>';
        }
        else
        {
        include( APP_VIEW .'/home/contactView.php' );
        }
        break;

  case 'Item':
      $itemId = $route->getParams()[2];

      $dbObj = new db();

      $sql = "SELECT * FROM store_inventory WHERE id = ?";
      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([$itemId]);

      $row = $dbObj->dbFetch("assoc");

      include( APP_VIEW .'/home/productsSubNav.php' );
      include( APP_VIEW .'/home/itemView.php' );

      break;

  case 'order':
      $dbObj = new db();

      $sql = "SELECT * FROM customer_orders2 ORDER BY item_number";
      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([]);

      include( APP_VIEW .'/home/orderView.php' );
      break;

  case 'table':
      $dbObj = new db();

      $sql = "SELECT * FROM store_inventory ORDER BY item_number";
      $dbObj->dbPrepare($sql);
      $dbObj->dbExecute([]);

      include( APP_VIEW .'/home/tableView.php' );

      break;

  default:
      include( APP_VIEW .'/home/homeView.php' );
      break;

}
# Include html footer
include( APP_VIEW . '/footer.php' );
