
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
              <a href="#" class="linkStyle dropdown-toggle" data-toggle="dropdown">Pretty Pooch Menu<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="<?php print APP_DOC_ROOT . '/home'; ?>" class="linkStyle">Home</a></li>
            <li><a href="<?php print APP_DOC_ROOT . '/home/aboutus'; ?>" class="linkStyle">About Us</a></li>
            <li><a href="<?php print APP_DOC_ROOT . '/home/contact'; ?>" class="linkStyle">Contact Us</a></li>
          <li><a href="<?php print APP_DOC_ROOT . '/home/table'; ?>" class="linkStyle">Products</a></li>
            <li><a href="<?php print APP_DOC_ROOT . '/blog'; ?>" class="linkStyle">Customer Blog</a></li>

        <!--<li><a href="#">Menu 3</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 4 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>-->
              </ul>
            </li>
          </ul>

<?php if ( 0 !== APP_AUTH_TYPE && isset($_SESSION["username"]) ) { ?>

          <ul class="nav navbar-left">
            <li class="dropdown">
              <a href="#" class="linkStyle dropdown-toggle" data-toggle="dropdown"><?php print $_SESSION['username']; ?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--  <li><a href="#" class="linkStyle">Profile</a></li>
                  <li><a href="#" class="linkStyle">Settings</a></li>
                  <li class="divider"></li>-->
                  <li><a href="<?php echo APP_DOC_ROOT;?>/auth/logout" class="linkStyle">Logout</a></li>
              </ul>
            </li>
          </ul>

<?php } ?>

        </div>
      </div>
    </div>
    <!-- end main navigation -->

    <!-- start page container -->
    <div class="container-fluid">
      <div class="row">
