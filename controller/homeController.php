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
      /*include( APP_VIEW .'/home/homeSubNav.php' );*/
      include( APP_VIEW .'/home/aboutusView.php' );
    }
      break;

    case 'contact':
        if(isset($_POST['submit'])){
          print'<pre>';
          print_r($_POST);
          print'<pre>';
        }else{
      /*include( APP_VIEW .'/home/homeSubNav.php' );*/
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

    include( APP_VIEW .'/home/homeSubNav.php' );
    include( APP_VIEW .'/home/itemView.php' );
    break;

  case 'table':
  $dbObj = new db();

  $sql = "SELECT * from store_inventory ORDER BY item_number";
  $dbObj->dbPrepare($sql);
  $dbObj->dbExecute([]);

        /*include( APP_VIEW .'/home/homeSubNav.php' );*/
        include( APP_VIEW .'/home/tableView.php' );
        break;

    default:


    /*include( APP_VIEW .'/home/homeSubNav.php' );*/
    include( APP_VIEW .'/home/homeView.php' );
    break;


}
# Include html footer
include( APP_VIEW . '/footer.php' );
