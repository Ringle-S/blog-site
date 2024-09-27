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
        margin-top: 20px;
        /* padding: 10px 30%; */
        display: flex;
        flex-direction: column;
    }
    label{
        display: inline-block;
        /* width: 300px; */
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
        <h1 class="post_title">Add Post</h1>
        <div class="d-flex justify-center">
            <form class="col-10 col-md-6 d-flex flex-col" action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="div_center">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="div_center">
                    <label for="description">Post Description</label>
                    <textarea name="description" id="description"></textarea>
                </div>
                <div class="div_center">
                    <label for="image">Add Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="div_center">
                    <input type="submit" class="btn btn-secondary" value="Add Post">
                </div>
            </form>
        </div>
        </div>

      <!-- choose section end -->
      <!-- footer section start -->
      @include('home.footer')  
    
   </body>
</html>