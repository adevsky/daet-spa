
<?php

  if (isset($_SESSION['uname'])) {
    header("Location:index.php");
  }

?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Daet Spa Central Massage</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css"> 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140" data-spy="scroll" data-target=".navbar" data-offset="50">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <!-- code here -->  
          <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo logo-small">
                     <a href="index.php">LOGO <br /><strong>SPA CENTER</strong></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#second-block">Services</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="#">LOGO <br /><strong>SPA CENTER</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="upload.php">Upload</a>
                        </li>
                        <li><a href="contact.php">Contact</a>
                        </li>
                        <li><a href="controller/controller.php?action=logout">Logout</a>                
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>

      <section>
         <!-- CAROUSEL -->    
         <div id="carousel">
            <div id="header-carousel" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="img/first.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>24/7 Home & Hotel Service Massage</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>We have available professional Male and Female Massage Therapists.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/second.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>24/7 Home & Hotel Service Massage</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>We have available professional Male and Female Massage Therapists.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/third.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>24/7 Home & Hotel Service Massage</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>We have available professional Male and Female Massage Therapists.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


         <!-- FIRST BLOCK -->   
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1>Massage Services</h1>    
                         <p class="subtitile">Spa Central Massage’s goal is to provide the very best quality of massage and spa services as possible. 
                         </p>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         

          <!-- SERVICES -->    
         <div id="third-block">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/1.jpg" alt="alternative text" style="width:100%">
                     <h5 style="color:#80bfff;"><strong>Swedish Massage</strong></h5>
                      <h6>P299 – 60 mins</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/2.jpg" alt="alternative text" style="width:100%">      
                   <h5 style="color:#80bfff;"><strong>Shiatsu Massage</strong></h5>
                      <h6>P299 – 60 mins</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/3.jpg" alt="alternative text" style="width:100%">      
                    <h5 style="color:#80bfff;"><strong>Thai Massage</strong></h5>
                      <h6>P299 – 60 mins</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/4.jpg" alt="alternative text" style="width:100%">      
                   <h5 style="color:#80bfff;"><strong>Reflexology</strong></h5>
                      <h6>P299 – 60 mins</h6> 
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/5.jpg" alt="alternative text" style="width:100%">
                     <h5 style="color:#80bfff;"><strong>Pre-Natal Massage</strong></h5>
                      <h6>P299 – 60 mins</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/6.jpg" alt="alternative text" style="width:100%">      
                   <h5 style="color:#80bfff;"><strong>Body Scrub with Massage</strong></h5>
                      <h6>P599 – 90 mins</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/7.jpg" alt="alternative text" style="width:100%">      
                    <h5 style="color:#80bfff;"><strong>Ventosa with Massage</strong></h5>
                      <h6>P499 – 90 mins</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/8.jpg" alt="alternative text" style="width:100%">      
                    <h5 style="color:#80bfff;"><strong>Twin Massage</strong></h5>
                      <h6>P600 – 60 mins</h6> 
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/services/9.jpg" alt="alternative text" style="width:100%">      
                   <h5 style="color:#80bfff;"><strong>Central Signature Massage</strong></h5>
                      <h6>P500 – 90 mins</h6> 
                  </div>

               </div>
            </div>
         </div>




        <!-- SECOND BLOCK -->   
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1>Other Services</h1>  
                         <p class="subtitile">Spa Central Massage’s goal is to provide the very best quality of massage and spa services as possible. 
                         </p>   
                     </article>
                  </div>
               </div>
            </div>
         </div>




          <!-- OTHER SERVICES -->   
         <div id="third-block">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="uploads/other_services/1.jpg" alt="alternative text" style="width:100%">
                      <h5 style="color:#80bfff;"><strong>Foot Spa/Scrub</strong></h5>
                      <h6>P350</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/other_services/2.jpg" alt="alternative text" style="width:100%"> <h5 style="color:#80bfff;"><strong>Mani-Pedi</strong></h5>
                      <h6>P350</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/other_services/3.jpg" alt="alternative text" style="width:100%"> <h5 style="color:#80bfff;"><strong>Ear Candling</strong></h5>
                      <h6>P250</h6>
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/other_services/4.jpg" alt="alternative text" style="width:100%"> <h5 style="color:#80bfff;"><strong>Body Scrub</strong></h5>
                      <h6>P350</h6> 
                  </div>

                  <div class="s-12 m-6 l-3">
                     <img src="uploads/other_services/5.jpg" alt="alternative text" style="width:100%">
                     <h5 style="color:#80bfff;"><strong>Ventosa</strong></h6>
                     <h6>P350</h6> 
                  </div>
               </div>

            </div>
         </div>



          <!-- CONTACT -->   
          <div id="fourth-block">
            <div class="line">
                  <div class="item">
                    <div class="row">
                    <div class="column">
                      <h3 style="color: #80bfff ">Landline:</h3>
                      <p>713-11-11</p>
                    </div>
                    <div class="column">
                      <h3 style="color: #80bfff ">Cellphone Number:</h3>
                      <p>Smart: 09103164520</p>
                      <p>Globe: 09261111111</p>
                    </div>
                    <div class="column">
                      <h3 style="color: #80bfff ">E-mail | Facebook:</h3>
                      <p>www.facebook.com</p>
                       <p>juanadevs29@gmail.com</p>
                    </div>
                  </div>

                    </div>
                  </div>
            </div>
         </div>


        <!-- 
        
         <h2>CONTACT</h2>
                     <p class="s-12 m-12 l-8 center">
                      <h2 style="color: white;"> <strong>LANDLINE: 711-11-11 | SMART: 09103164520 | GLOBE: 09261111111 </strong> </h2>
                     </p>




        <div id="fourth-block">
            <div class="line">
               <div id="news-carousel" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Amazing responsive template</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Responsive components</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Retina ready</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
               </div>
            </div>
         </div>
       -->

      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2018, Bicolano IT <a href="login.php"> Developers </a>
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="#" title="Responsee - lightweight responsive framework">Design and Developed by Bicolano IT Developers</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
            var owl = $('#header-carousel');
            owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
           var owl = $('#news-carousel');
           owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
         });  
          
      </script> 
   </body>
</html>