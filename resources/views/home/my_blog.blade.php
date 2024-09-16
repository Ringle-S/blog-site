<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
   @include('home.homepagecss')
   <style>
   .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
       
        color: black;
    }
    .div_center{
        text-align: start;
        padding: 10px 30%;
        display: flex;
        flex-direction: column;
    }
    label{
        display: inline-block;
        width: 300px;
    }
    </style>
   </head>
   <body>
      <!-- header section start -->
      <div style="margin-bottom: 30px;" class="header_section">
        @include('home.homeheader')
      </div>
      <div >     
        
        <h1 class="post_title">Your Blogs</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
            </div>

        @endif
        
        @foreach ($data as $post)
        <div class="row d-flex justify-center">
        
                <div  style="margin-top:0px; margin-bottom:30px; text-align: center;"  class="col-md-7">
                      <div><img style="padding: 20px;" src="/postimage/{{$post->image}}" class="services_img"></div>
                     <div><h2 style="font-size: 32px;"><b>{{$post->title}}</b></h2></div>
                     <div><h4 style="font-size: 20px;">{{$post->description}}</h4></div>
                     <div style="margin-top: 20px;"class="row">
                        <div class="col">
                            <a style="padding: 8px 30px; border-radius:5px;" onclick="return confirm('Are you sure to delete this blog?')" href="{{url('my_post_delete',$post->id)}}" class="btn btn-danger">Delete</a>
                        </div>
                        <div class="col">
                            <a style="padding: 8px 30px; border-radius:5px;" href="{{url('my_post_edit',$post->id)}}" class="btn btn-success">Edit</a>
                        </div>
                     </div>
                     
                </div>
                @endforeach
        </div>
        </div>

      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>