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
         <a  href="<?php echo base_url() . 'welcome/about'?>">About</a>
         <a class="active" href="<?php echo base_url() . 'welcome/classes'?>">Classes</a>
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
                              <a href="<?php echo base_url() . 'welcome'?>"><img src="<?php echo base_url('assets/')?>images/logo.png" alt="#" /></a>
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
                         <h2> classes</h2>
                </div>
             </div>
          </div>
       </div>
    </div>
      <!-- classes section -->
      <div class="classes afbecros">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="classes_box">
                     <figure><img src="<?php echo base_url('assets/images/skate22.png')?>" alt="#"/></figure>
                     <h3>Easy Class</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="classes_box">
                     <figure><img src="<?php echo base_url('assets/images/skate22.png')?>" alt="#"/></figure>
                     <h3>Medium Class</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="classes_box">
                     <figure><img src="<?php echo base_url('assets/images/skate22.png')?>" alt="#"/></figure>
                     <h3>Hard Class</h3>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="p_fulltext">
                     <p>Selamat Belajar...<br>Ingat belajar dari step easy terlebih dahulu.<br>
                  SEMANAGT BELAJARNYA UNTUK PEMULA :) </p>
                     <a class="read_more" href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- classes section -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="fid_box">
                     <ul class="location_icon">
                           <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> Location</li>
                           <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a><br>+085933534561
                           </li>
                           <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> ardiardiansyah261@gmail.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="dolor">
                     <p>Jika Kurang Paham Silahkan Datang<br>Kelokasi Atau Bisa Kirim Pesan</p>
                     </div>
                  </div>
               </div>
            </div>
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

