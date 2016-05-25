<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PRETTY POOCH</title />

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="////cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="<?php echo APP_DOC_ROOT; ?>/css/style.css"/>

    <!--adding stylesheets-->
    <link rel="stylesheet" href="<?php echo APP_DOC_ROOT; ?>/css/boilerplate.css"/>
    <link rel="stylesheet" href="<?php echo APP_DOC_ROOT; ?>/css/portfolioResponsive.css"/>
    <link rel="stylesheet" href="<?php echo APP_DOC_ROOT; ?>/css/portfolioStyle.css"/>
    <link rel="shortcut icon" href="/project/assets/blogPost/favicon.ico" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--beginning of javascript-->
    <script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML =
        mm + "/" + dd + "/" + yyyy + " at " + h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
    }
    </script>
<!--end if javascript-->
  </head>
  <body onload="startTime()">
<br>
<div id="clock"></div>
<!--added this header-->
<header class="fluid hero heroHeader">
    <div class="gridContainer clearfix">

      <div><figure class="fluid logo textStyle"></figure>

        <nav class="fluid topNav">

          <ul class="fluid fluidList topNavUl">

            <li class="fluid topNavLI zeroMargin_desktop zeroMargin_tablet zeroMargin_mobile">
              <strong><a href="<?php print APP_DOC_ROOT . '/home'; ?>" class="linkStyle" title="Nav Link">HOME</a></strong></li>
            <li class="fluid topNavLI"><strong><a href="<?php print APP_DOC_ROOT . '/home/aboutus'; ?>" class="linkStyle" title="Nav Link">ABOUT US</a></strong></li>
            <li class="fluid topNavLI"><strong><a href="<?php print APP_DOC_ROOT . '/home/contact'; ?>" class="linkStyle" title="Nav Link">CONTACT US</a></strong></li>
            <li class="fluid topNavLI"><strong><a href="<?php print APP_DOC_ROOT . '/home/table'; ?>" class="linkStyle" title="Nav Link">PRODUCTS</a></strong></li>
            <li class="fluid topNavLI"><strong><a href="<?php print APP_DOC_ROOT . '/blog'; ?>" class="linkStyle" title="Nav Link">CUSTOMER BLOG</a></strong></li>          </ul>
        </nav>
        <h6 class="fluid mainTagline textStyle">.</h6></div>
        <div><h1 class="fluid mainHeading headingStyle">PRETTY POOCH</h1>
          <!--<figure>
               <figcaption><h5>"Where you bring your POOCH to make them PRETTY-Full Service Dog Spa."</h5></figcaption>
               <img id="dogsintub" src="/project/assets/blogPost/pet-grooming.jpg" alt="dog groomers"/>
           </figure>-->
        </div>

      </div>
  </header>
