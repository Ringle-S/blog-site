<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <style>
                         @media only screen and (max-width: 760px) {
                        .navlinks{
                           padding: 10px 0;
                        }
                         }
                     </style>
   <?php
use Illuminate\Support\Facades\Request;

$currentUrl = Request::fullUrl();
$basename = basename($currentUrl);

echo "Current URL: " . $currentUrl . "<br>";
echo "Basename: " . $basename;

?>
                  <ul>
                     <li class="active navlinks"><a style="color: aliceblue;" href="{{url('/')}}">Home</a></li>
                     <li class="navlinks {{$basename == 'contactus' ? 'activelink' : ''}}"><a style="color: aliceblue;" href="{{url('contactus')}}">Contact us</a></li>
                     
                     <li class="navlinks {{$basename == 'my_blog' ? 'activelink' : ''}}"><a style="color: aliceblue;" href="{{url('my_blog')}}">My Blog</a></li>
                     <li class="navlinks {{$basename == 'create_post' ? 'activelink' : ''}}"><a style="color: aliceblue;" href="{{url('create_post')}}">Write a Blog</a></li>
                   
                  </ul>
                  <style>
                     .activelink{
                        color: #ffffff !important;
                        background-color: #2b2278 !important;
                     }
                     .log-btn{
                        margin-left: 100px;
                     }
                      @media only screen and (max-width: 760px) {
                     .log-btn{
                        margin-left: 0px;
                     }
                  }
                  </style>
                  <ul class="log-btn">
                  @if (Route::has("login"))
                    
                     @auth
                     <li>
                     
                     
                     <x-app-layout></x-app-layout></li>
 
                     @else
                     <li class="navlinks"><a class="btn btn-primary" href="{{route('login')}}">Login</a></li>
                     <li class="navlinks"><a class="btn btn-primary" href="{{route('register')}}">Register</a></li>
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
                     <li class="{{$basename == 'contactus' ? 'activelink' : ''}}"><a href="{{url('contactus')}}">Contact us</a></li>
                     
                     <li class="{{$basename == 'my_blog' ? 'activelink' : ''}}"><a href="{{url('my_blog')}}">My Blog</a></li>
                     <li class="{{$basename == 'create_post' ? 'activelink' : ''}}"><a href="{{url('create_post')}}">Write a Blog</a></li>
                   
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