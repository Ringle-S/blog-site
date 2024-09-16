<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                  <ul>
                     <li class="active"><a style="color: aliceblue;" href="{{url('/')}}">Home</a></li>
                     <li><a style="color: aliceblue;" href="{{url('contactus')}}">Contact us</a></li>
                     
                     <li><a style="color: aliceblue;" href="{{url('my_blog')}}">My Blog</a></li>
                     <li><a style="color: aliceblue;" href="{{url('create_post')}}">Write a Blog</a></li>
                   
                  </ul>
                  <ul style="margin-left: 100px;">
                  @if (Route::has("login"))
                    
                     @auth
                     <li>
                     
                     
                     <x-app-layout></x-app-layout></li>
 
                     @else
                     <li><a class="btn btn-primary" href="{{route('login')}}">Login</a></li>
                     <li><a class="btn btn-primary" href="{{route('register')}}">Register</a></li>
                     @endauth
                     @endif
                  </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
            <h3 style="text-align: center;"><img src="/css/logo.svg" alt=""></h3>
               <div class="menu_main">
               
                  <ul>
                     <li class="active"><a href="{{url('/')}}">Home</a></li>
                     <li><a href="{{url('contactus')}}">Contact us</a></li>
                     
                     <li><a href="{{url('my_blog')}}">My Blog</a></li>
                     <li><a href="{{url('create_post')}}">Write a Blog</a></li>
                   
                  </ul>
                  <ul style="margin-left: 100px;">
                  @if (Route::has("login"))
                    
                     @auth
                     <li>
                     
                     
                     <x-app-layout></x-app-layout></li>
 
                     @else
                     <li><a class="btn btn-primary" href="{{route('login')}}">Login</a></li>
                     <li><a class="btn btn-primary" href="{{route('register')}}">Register</a></li>
                     @endauth
                     @endif
                  </ul>
               </div>
            </div>
         </div>