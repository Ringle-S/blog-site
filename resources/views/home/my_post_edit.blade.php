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
         @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
            </div>

        @endif
        <h1 class="post_title">Edit Post</h1>
        <div>
            <form action="{{url('update_my_post',$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_center">
                    <label style="text-align: center; width:100%" for="oldimgae">Old Image</label>
                    <img style="margin: auto;" height="100px" width="150px" src="/postimage/{{$post->image}}" alt="">
                </div>
                <div class="div_center">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" value="{{$post->title}}" id="title">
                </div>
                <div class="div_center">
                    <label for="description">Post Description</label>
                    <textarea name="description"  id="description">{{$post->description}}</textarea>
                </div>

                
                <div class="div_center">
                    <label for="image">update Image</label>
                    <input type="file" name="image" id="image">
                </div>

                <div class="div_center">
                    <input type="submit" class="btn btn-secondary">
                </div>
            </form>
        </div>
        </div>

      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>