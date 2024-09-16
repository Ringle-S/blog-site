<!DOCTYPE html>
<html>
  <head> 
 @include("admin.admincss")
 <style>
    .post_title{
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        padding: 30px;
        color: aliceblue;
    }
    .div_center{
        text-align: start;
        padding: 10px 300px;
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
  @include("admin.adminheader")



    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidenav')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
            </div>

        @endif
        <h1 class="post_title">Add Post</h1>
        <div>
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
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
                    <input type="submit" class="btn btn-secondary">
                </div>
            </form>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('admin.footer')
  </body>
</html>
