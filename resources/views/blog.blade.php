<x-header/>

<div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="about_taital">Our Blog</h1>
               </div>
            </div>
            <div class="blog_section_2">
               <div class="row">
                  @foreach($blog as $key)
                  <div class="col-md-6">
                     <div class="blog_box">
                        <div class="blog_img"><img src="{{('/images/'.$key->image)}}"></div>
                        <h4 class="date_text">05 April</h4>
                        <h4 class="prep_text">{{$key->title}}</h4>
                        <p class="lorem_text">{{$key->description}}</p>
                     </div>
                     <div class="read_btn"><a href="#">Read More</a></div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
     

<x-footer/>