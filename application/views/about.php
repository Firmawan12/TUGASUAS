<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>brandon</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('assets/images/fevicon.png')?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css')?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout head_posstinhi">
     
      <div id="mySidepanel" class="sidepanel">
         <a href= "javascript:void(0)"  class="closebtn" onclick="closeNav()">×</a>
         <a href="<?php echo base_url() . 'welcome'?>">Home</a>
         <a class="active" href="<?php echo base_url() . 'welcome/about'?>">About</a>
         <a href="<?php echo base_url() . 'welcome/classes'?>">Classes</a>
         <a href="<?php echo base_url() . 'welcome/contact'?>">Contact</a>
      </div>
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="<?php echo base_url() . 'welcome'?>"><img src="<?php echo base_url('assets/images/logo.png')?>" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="right_bottun">
                        <a class="login" href="#">Login</a>
                        <button class="openbtn" onclick="openNav()"><img src="<?php echo base_url('assets/images/menu_icon.png')?>" alt="#"/> </button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
   <div class="red_bg">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage">
                     <h2>About</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
      <!-- about section -->
      <div id="about" class="about afbecros">
         <div class="container">
            <div class="row ">
               <div class="col-md-12">
                  <div class="titlepage">
                    
                     <figure><img src="<?php echo base_url('assets/images/Skate11.JPG')?>" alt="#"/></figure>
                     <p> Web Ini dibuat untuk membantu mempermudah untuk belajar Skateboard<br>
                        dan berbagi pengalaman tentang dunia skatboard.</p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->
     
      <!--  footer -->
      <footer>
         
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
      <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
      <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
      <script src="<?php echo base_url('assets/js/jquery-3.0.0.min.js')?>"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js')?>"></script>
      <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
   </body>
</html>

