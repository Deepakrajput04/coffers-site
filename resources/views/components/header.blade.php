<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Coffo</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="website/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="website/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="website/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="website/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="website/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="website/https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="/"><img src="website/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/coffees">Coffees</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/blog">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                     </li>
                  </ul>
                  
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                        @if(session()->has('id'))
                           <li><a href="{{URL::to('/logout')}}">Logout</a></li>
                        @else
                          <li><a href="/login"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                          @endif
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
         <!-- banner section start --> 
        
         <!-- banner section end -->
      </div>
      
      