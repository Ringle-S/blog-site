<!DOCTYPE html>
<html>
  <head> 
 @include("admin.admincss")
 <style>
    .title_deg{
        font-size: 30px;
        font-weight: bold;
        color: aliceblue;
        text-align: center;
        padding: 30px;
    }
    .table_DEG{
        border: 1px solid #ffffff;
        width: 95%;
        text-align: center;
        margin-left: 2.5%;
    }
    .th_deg{
        background-color:darkcyan;
        color: #ffffff;
    }
    th{
        padding: 10px 15px;
    }
    td{
        padding: 9px 8px;
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
    <h1 class="title_deg">All Post</h1>
    <table class="table_DEG">
        <tr class="th_deg">
        <th>Image</th>
        <th>Post Title</th>
        <!-- <th>Description</th> -->
        <th>Post by</th>
        <th>post Status</th>
        <th>User type</th>
        <th>Delete</th>
        <th>update</th>
        <th>Accept</th>
        <th>Reject</th>
        </tr>
        @foreach ($post as $post)
        
        <tr>
            <td><img width="150px" height="100px" src="postimage/{{$post->image}}" alt=""></td>
            <td>{{$post->title}}</td>
            <!-- <td>{{$post->description}}</td> -->
            <td>{{$post->name}}</td>
            <td>{{$post->post_status}}</td>
            <td>{{$post->usertype}}</td>
            <td><a href="{{url('delete_post',$post->id)}}" onclick="return confirm('Are you Sure to Delete this?')" class="btn btn-danger">Delete</a></td>
            <td><a href="{{url('edit_post',$post->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{url('accept_post',$post->id)}}" class="btn btn-success">Accept</a></td>
            <td><a href="{{url('reject_post',$post->id)}}"  onclick="return confirm('Are you Sure to Reject this?')" class="btn btn-outline-danger">Reject</a></td>
        </tr>
        @endforeach
    </table>
      </div>


    </div>
    <!-- JavaScript files-->
   @include('admin.footer')
  </body>
</html>
