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
        < class="container">
          <h1 class="contact_taital">Request A Call Back</h1>
          <form method="POST" action="" class="email_text">
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Name" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
             </div>
             <div class="form-group">
                <input type="text" class="email-bt" placeholder="Email" name="Email">
             </div>
             <div class="form-group">
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
             </div>
             <div class="send_btn"><a href="#">SEND</a></div>
          </form>
        </div>
      </div>
      <!-- contact section end -->

      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>