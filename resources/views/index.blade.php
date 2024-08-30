<x-header />

      <!-- header section end -->
      <!-- about section start -->
      <div class="header_section">
      <div class="banner_section layout_padding">
            <div class="container">
               <div id="banner_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Coffee <br>Shop</h1>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">About Us</a></div>
                                    <div class="callnow_bt"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Coffee <br>Shop</h1>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">About Us</a></div>
                                    <div class="callnow_bt"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="banner_taital_main">
                                 <h1 class="banner_taital">Coffee <br>Shop</h1>
                                 <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                                 <div class="btn_main">
                                    <div class="about_bt active"><a href="#">About Us</a></div>
                                    <div class="callnow_bt"><a href="#">Call Now</a></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
                  </a>
               </div>
            </div>
         </div>
         </div>
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="about_taital_box">
                        <h1 class="about_taital">About Our shop</h1>
                        <h1 class="about_taital_1">Coffee distribution '</h1>
                        <p class=" about_text">has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        <div class="readmore_btn"><a href="#">Read More</a></div>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="website/images/about-img.png" class="about_img"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- coffee section start -->
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
      <!-- coffee section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">What syas customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="website/images/client-img1.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text">Joy Moark</h3>
                              <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">What syas customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="website/images/client-img1.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text">Joy Moark</h3>
                              <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="about_taital">What syas customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="client_taital_main">
                           <div class="client_left">
                              <div class="client_img"><img src="website/images/client-img1.png"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="moark_text">Joy Moark</h3>
                              <p class="client_text">now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancynow use Lorem Ipsum as their default model text, </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left"></i>
               </a>
               <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- blog section start -->
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
      <!-- blog section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               <form method="post" action="{{URL::to('addcontact')}}">
                  @csrf
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="phone">
                        <textarea class="massage-bt" placeholder="Massage"  name="message"></textarea>
                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                     </div>
                  </div>
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180261.19016138412!2d78.06208029413523!3d26.217717456314645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c5d1792291fb%3A0xff4fb56d65bc3adf!2sGwalior%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1723452487685!5m2!1sen!2sin" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>

                     </div>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <x-footer />