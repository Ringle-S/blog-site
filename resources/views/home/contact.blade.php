<!DOCTYPE html>
<html lang="en">
   <head>
   @include('home.homepagecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.homeheader')
         <!-- banner section start -->
       @include('home.banner')
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="col-12 col-lg-8">
          <h1 class="contact_taital">Request A Call Back</h1>
          <form method="post" action="" class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="name">
             </div>
             <div class="form-group">
                <input type="number" class="email-bt" placeholder="Phone Number" name="phnumber">
             </div>
             <div class="form-group">
                <input type="email" class="email-bt" placeholder="Email" name="email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message"></textarea>
             </div>
             <input style="padding: 5px 15px;" type="submit" value="Send" class="btn btn-primary"></input>
          </form>
        </div>
      </div>
      <!-- contact section end -->

      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>