
      </div><!-- end page row -->
    </div><!-- end page container -->

    <?php if ( 1 <= APP_DEBUG_LEVEL ) { include('debug.php'); } ?>
<!--added this-->
    <article class="fluid textContainer" id="secondaryStyling">
            <section class="fluid secondarySection zeroMargin_desktop zeroMargin_tablet">
              <h2 class="fluid secondaryHeading headingStyle">Special News</h2>
               <p class="contentArea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </section>
              <section class="fluid secondarySection hide_mobile">
              <h2 class="fluid secondaryHeading headingStyle">Dog Food Specials</h2>
              <p class="contentArea">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </section>
          </article>
  <!--added all above-->
    <div id="footer">
      <div class="container">
        <p class="text-muted">
  <!--added this-->
  <footer class="fluid footer">
  <section class="fluid footerSection zeroMargin_desktop zeroMargin_tablet"><h2 class="fluid footerTitle headingStyle">Locations</h2>
    <p class="paraContent footerTextContainer">7890 W. 89th Street<br>Gresham, OR 97030</p>

</section>
<section class="fluid footerSection hide_mobile">
<h2 class="fluid footerTitle headingStyle">Hours</h2>

  <p class="paraContent footerTextContainer">8am-9pm Monday-Friday<br>10am-6pm Saturday and Sunday</p>

</section>
<section class="fluid footerSection hide_mobile">
<h2 class="fluid footerTitle headingStyle">Special Events</h2>

  <p class="paraContent footerTextContainer">FREE shampoo with every purchase of a Dog Wash EVERY WEDNESDAY.</p>

</section>
</footer>
<!--added all above this-->
    </p>
      </div>
    </div>
</div>
    <!-- JavaScript Files
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <script src="<?php echo APP_DOC_ROOT; ?>/js/jquery.min.js"/></script>
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
    <script src="<?php echo APP_DOC_ROOT; ?>/js/bootstrap.min.js"/></script>
    <script src="<?php echo APP_DOC_ROOT; ?>/js/respond.min.js"/></script>

  </body>
</html>
