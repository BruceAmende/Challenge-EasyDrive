
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>EasyDrive</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   </head>
   <body id="home_page" class="home_page">
      <!-- loader -->
      <div id="preloader">
         <img class="preloader" src="images/gay2.jpg" alt="#">
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="header">
      

        <div class="header_top_section">
           <div class="container">
           <?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<body class="loggedin">
		<nav class="navtop">
			<div>
				
				<a href="profiel.php"><i class="fas fa-user-circle"></i>Profiel</a>
				<a href="loguit.php"><i class="fas fa-sign-out-alt"></i>Loguit</a>
			</div>
		</nav>
		<div class="content">
			
			<p>Welcom terug, <?=$_SESSION['name']?>!</p>
		</div>
               
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.html"><img src="images/gay2.jpg" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                      <div class="top_section_info">
                         <ul>
                           <li>Contacteer ons: <img src="images/i1.png" alt="#" /> <a href="#">( +71 7569834142 )</a></li>
                           <li><img src="images/i2.png" alt="#" /> <a href="#">easydrive@gmail.com</a></li>
                           <li><img src="images/i3.png" alt="#" /> <a href="#">Huizenlaan 23 Den bosch , NL</a></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>
           </div>
        </div>

        <div class="header_bottom_section">

         <div class="container">
            
           <div class="row">
               <div class="col-md-12">
                  <div class="full ">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.html">Over ons</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="overzicht.php">Overzicht</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="lesoverzicht.php">Les overzicht</a>
                                 </li>
                                
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact.php">Aanmelden</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="login.php">Inloggen</a>
                                 </li>
                                
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="search_bar">
                        <form action="index.html">
                           <input type="text" class="search_field" placeholder="Zoek" required />
                           <button class="search_button" type="button"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- slider -->
      <section class="slider_section">
         <div class="container-fluid">
            <div class="row">
               <div id="main_slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                  <div class="carousel-inner">
                     <div class="carousel-item slider_inner L active "><img src="images/L.png"  alt="" >
                        <div class="container">
                           <div class="row">
                              <div class="slider_coint_inner">
                                 <h3>Gegarandeert<br><strong>Je rijbewijs halen</strong></h3>
                                 <h4 class="font_themecolor">Rijschool Easydrive</h4>
                                 <div class="field center">
                                       <a href="contact.php">Direct Aanmelden</a>
                                       </div
                                 <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis<br>
                                    lacinia nec et est aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item slider_inner slider2">
                        <div class="container">
                           <div class="row">
                              <div class="slider_coint_inner">
                                 <h3>Best<br><strong>New Collection</strong></h3>
                                 <h4 class="font_themecolor">Loxury Jewellery</h4>
                                 <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis<br>
                                    lacinia nec et est aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="slider_bullets">
                        <ol class="carousel-indicators">
                           <li data-target="#main_slider" data-slide-to="0" class="active"><i class="fa fa-chevron-left"></i></li>
                           <li data-target="#main_slider" data-slide-to="1"><i class="fa fa-chevron-right"></i></li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end slider -->

      <!-- about section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>Waarom Easydrive?</h2>
                  </div>
                  <div class="full">
                     <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                     <img src="images/auto.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end about section -->

      <!-- section --> 
      <section class="layout_padding padding_bottom_0" style="background: #fff;">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>Onze prijzen</h2>
                  </div>
                  <div class="full">
                     <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                  </div>
               </div>
            </div>
            <div class="row product_section">
               <div class="col-md-4"> 
                  <div class="full product_blog margin_top_30">
                     <img src="images/pakket a.png" alt="#" />
                     <h3><span style="color: #72dd78 !important;">Pakket A</span> €599</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="full product_blog margin_top_30">
                     <img src="images/pakket b.png" alt="#" />
                     <h3><span style="color: #72dd78 !important;">Pakket B</span> €899</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="full product_blog margin_top_30">
                     <img src="images/pakket c.png" alt="#" />
                     <h3><span style="color: #72dd78 !important;">Pakket C</span> €1209</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="full product_blog margin_top_30">
                     <img src="images/pakket d.png" alt="#" />
                     <h3><span style="color: #72dd78 !important;">Pakket D</span> €1525</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="full product_blog margin_top_30">
                     <img src="images/spoedopleiding.png" alt="#" />
                     <h3><span style="color: #72dd78 !important;">Spoedopleiding</span> €1050</h3>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="full product_blog margin_top_30">
                     <img src="images/tijdelijke actie.png" alt="#" />
                     <h3><span style="color: #72dd78 !important;">Tijdelijke actie</span> €250</h3>
                  </div>
               </div>
            </div>
          </div>
      </section>
      <!-- end section -->
     
      <!-- section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="full heading_s1">
                     <h2>Over ons</h2>
                  </div>
                  <div class="full">
                     <p class="large">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
       
       <!-- section -->
      <section class="layout_padding haf_layout section">
         <div class="container-fluid">
            <div class="row">
              <div class="col-md-11">
                 <div class="row">
                   <div class="container">
                    <div class="col-md-8">
                     <div class="full banner_section">
                         <h3>Beste <span style="color: #72dd78 !important;">Keuze</span></h3>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                     </div>
                    </div>
                 </div>
                  </div>
                 <img class="img-responsive" src="images/interieur.png" alt="#" />
              </div>
            </div>
         </div>
      </section>
      <!-- end section -->

      <!-- section -->

      <!-- end section -->

     
      <!-- footer -->
      <footer class="footer layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-12">
                  <a href="index.html"><img class="img-responsive" src="images/gay2.jpg" alt="#" /></a>
               </div>

               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Address</h3>
                  </div>
                  <div class="address_infor">
                     <p> 
                        <span class="icon"><img src="images/location_icon.png" alt="#" /></span>
                        <span class="addrs">104 New York , USA</span>
                     </p>
                  </div>
               </div>

               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Social Link</h3>
                  </div>
                  <div class="social_icon">
                    <ul>
                       <li><a href="#"><img src="images/fb.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/tw.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/gp.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/in.png" alt="#" /></a></li>
                    </ul>
                  </div>
               </div>
               
               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Newsletter</h3>
                  </div>
                  <div class="email_address_bottom">
                     <form>
                        <fieldset>
                           <div class="field_email">
                              <input type="email" name="email" placeholder="Enter Your Email">
                              <button><i class="fa fa-search"></i></button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <div class="cpy">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <p>© 2020 Rijschool Easydrive.</p>
             </div>
           </div>
        </div>
      </div>
      <!-- end footer -->
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
