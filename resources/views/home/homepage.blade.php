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
      <!-- services section start -->
      @include('home.services')
      <!-- services section end -->
      
      @include('home.about')
      <!-- about section end -->
      
      @include('home.blog') 
      <!-- blog section end -->
      <!-- client section start -->
      @include('home.client')  
      @include('home.choose')  
      
      
      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>