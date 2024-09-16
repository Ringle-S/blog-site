<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
   @include('home.homepagecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.homeheader')
      </div>
      <div style="display: flex; justify-content:center;" class="row d-flex justify-center">
                <div  style="margin-top: 100px; text-align: center;"  class="col-md-6">
                      <div><img style="padding: 20px;" src="/postimage/{{$post->image}}" class="services_img"></div>
                     <div><h2 style="font-size: 32px;"><b>{{$post->title}}</b></h2></div>
                     <div><h4 style="font-size: 20px;">{{$post->description}}</h4></div>
                     <p>Posted by <b>{{$post->name}}</b></p>
                     
                </div>
        </div>
      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>