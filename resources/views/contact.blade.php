<x-header />

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
                        <textarea class="massage-bt" placeholder="Massage" name="message"></textarea>
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

<x-footer />