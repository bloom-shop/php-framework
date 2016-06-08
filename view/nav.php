
    <!-- main navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
    <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-left">

            <li class="dropdown">
              <a href="#" class="linkStyle dropdown-toggle navbar" data-toggle="dropdown">Pretty Pooch Menu<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php print APP_DOC_ROOT . '/home'; ?>" class="linkStyle">Home</a></li>
                <li><a href="<?php print APP_DOC_ROOT . '/home/aboutus'; ?>" class="linkStyle">About Us</a></li>
                <li><a href="<?php print APP_DOC_ROOT . '/home/contact'; ?>" class="linkStyle">Contact Us</a></li>
                <li><a href="<?php print APP_DOC_ROOT . '/home/table'; ?>" class="linkStyle">Products</a></li>
                <li><a href="<?php print APP_DOC_ROOT . '/blog'; ?>" class="linkStyle">Customer Blog</a></li>
              </ul>
            </li>
          </ul>


<?php if ( 0 !== APP_AUTH_TYPE && isset($_SESSION["username"]) ) { ?>

          <ul class="nav navbar-left">
            <li class="dropdown">
              <a href="#" class="linkStyle dropdown-toggle navbar" data-toggle="dropdown"><?php print $_SESSION['username']; ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="<?php echo APP_DOC_ROOT;?>/auth/logout" class="linkStyle">Logout</a></li>

              </ul>
            </li>
          </ul>

<?php } ?>
<a id="shoppingCart" class="linkStyle nav navbar" href="<?php print APP_DOC_ROOT . '/home/cart'; ?>">Shopping Cart</a>
        </div>
      </div>
    </div>
    <!-- end main navigation -->

    <!-- start page container -->
    <div class="container-fluid">
      <div class="row">
