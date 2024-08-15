<x-header/>

<div class="coffee_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="coffee_taital">OUR Coffee OFFER</h1>
               </div>
            </div>
         </div>
         <div class="coffee_section_2">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container-fluid">
                        <div class="row">
                           @foreach($offer as $key)
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{('/images/'.$key->image)}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">{{$key->title}}</h3>
                                 <p class="looking_text">{{$key->description}}</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                        @foreach($offer as $key)
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{('/images/'.$key->image)}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">{{$key->title}}</h3>
                                 <p class="looking_text">{{$key->description}}</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container-fluid">
                        <div class="row">
                        @foreach($offer as $key)
                           <div class="col-lg-3 col-md-6">
                              <div class="coffee_img"><img src="{{('/images/'.$key->image)}}"></div>
                              <div class="coffee_box">
                                 <h3 class="types_text">{{$key->title}}</h3>
                                 <p class="looking_text">{{$key->description}}</p>
                                 <div class="read_bt"><a href="#">Read More</a></div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>

<x-footer/>