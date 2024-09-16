<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Blog Post </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  @foreach ($post as $post)
                  
               
                  <div style="padding: 20px;" class="col-md-4">
                     <div><img style="padding-bottom: 20px;" src="/postimage/{{$post->image}}" class="services_img"></div>
                     <div><h4>{{$post->title}}</h4></div>
                     <p>Posted by <b>{{$post->name}}</b></p>
                     <div class="btn_main"><a style="margin-top: 0;" href="{{url('post_details',$post->id)}}">Read More</a></div>
                  </div>
                 @endforeach
               </div>
            </div>
         </div>
      </div>