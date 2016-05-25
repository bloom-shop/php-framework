
<figure>
     <figcaption><h5>"Where you bring your POOCH to make them PRETTY-Full Service Dog Spa."</h5></figcaption>
     <!--javascript-->
       <img id="contact-us-dog" src="/project/assets/blogPost/Contact-us-dog.jpg"
     onMouseOver="this.src='/project/assets/blogPost/reminder-book-groom.jpg'; "
     onMouseOut="this.src='/project/assets/blogPost/Contact-us-dog.jpg';"
      alt="hover effect" width=400/>
       <script>
                 document.getElementById("contact-us-dog");
         </script>
     <!--javascript end-->
 </figure>
        <!-- page content -->
        <div class="col-md-9">
          <div class="pageContent">
            <form method="post" action="<?php print APP_DOC_ROOT . '/home/contact'; ?>">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="phone">Phone number</label>
                <input type="text" class="form-control" id="phone" name= "phone" placeholder="Phone">
              </div>
              <div class="form-group">
                <label for="comments">Comments</label>
                <textarea class="form-control" id="comments" name= "comments"></textarea>
              </div>

              <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
        <!-- end page content -->
