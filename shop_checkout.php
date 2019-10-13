<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<!-- =====  BASIC PAGE NEEDS  ===== -->
<meta charset="utf-8">
<title>Gaan.do</title>
<!-- =====  SEO MATE  ===== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="distribution" content="global">
<meta name="revisit-after" content="2 Days">
<meta name="robots" content="ALL">
<meta name="rating" content="8 YEARS">
<meta name="Language" content="en-us">
<meta name="GOOGLEBOT" content="NOARCHIVE">
<!-- =====  MOBILE SPECIFICATION  ===== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="viewport" content="width=device-width">
<!-- =====  CSS  ===== -->

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/smart_cart.css">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>

<body>
<?php
// Get the results as JSON string
$product_list = filter_input(INPUT_POST, 'cart_list');
// Convert JSON to array
$product_list_array = json_decode($product_list);

$result_html = '';
if($product_list_array) {
    foreach($product_list_array as $p){
        foreach($p as $key=>$value) {
            //var_dump($key, $value);
            $result_html .= $key.": ".$value."<br />";
        }
        $result_html .= '------------------------------------------<br />';
    }
} else {    
    $result_html .= "<strong>Cart is Empty</strong>";
}
?> 
<!-- =====  LODER  ===== -->
<div class="loder"></div>
<div class="wrapper"> 
  <!-- =====  HEADER START  ===== -->
  <header id="header">
    
      <div class="header navbar"> 
        <div class="container"><!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header pull-left" > <a class="navbar-brand" href="index.html"> <img alt="Gaan.do" src="images/logo.png"> </a> </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse" class="navbar-collapse navbar-right">
          <nav id="menu" class='collapse pull-left'> 
            <!-- Navigation Menu -->
            <ul>
              <li> <a>Home</a> 
                <!-- Nav Dropdown -->
                <ul class="nav-dropdown-level-1">
                  <li class="nav-has-sub"> <a href='#'>One page</a>
                    <ul class="nav-dropdown-level-2">
                      <li> <a href='one_default.html'>Default Home</a></li>
                      <li> <a href='one_fix_specing.html'>Fix Specing</a></li>
                      <li> <a href='one_home_container_width.html'>Home Container Width</a></li>
                      <li> <a href='one_page_bubble_animation_banner.html'>Bubble Animation</a></li>
                      <li> <a href='one_page_bubble_parallax.html'>Bubble Parallax banner</a></li>
                      <li> <a href='one_page_fancy_slider.html'>Fancy Slider</a></li>
                      <li> <a href='one_page_fire.html'>Fire banner Animation</a></li>
                      <li> <a href='one_page_fullbg_video.html'>Full bg video</a></li>
                      <li> <a href='one_page_mouse_animation_banner.html'>Mouse Animation</a></li>
                      <li> <a href='one_page_particles_banner.html'>Particles banner</a></li>
                      <li> <a href='one_page_vimio_banner.html'>Vimio Banner</a></li>
                      <li> <a href='one_page_youtube_banner.html'>Youtube Banner</a></li>
                    </ul>
                  </li>
                  <li class="nav-has-sub"> <a href="#">Multi page</a>
                    <ul class="nav-dropdown-level-2">
                      <li> <a href='index.html'>Default Home</a></li>
                      <li> <a href='home_2.html'>Fullwidth Header</a></li>
                      <li> <a href='home_3.html'>Onescreen Banner</a></li>
                      <li> <a href='home_4.html'>Fix Specing</a></li>
                      <li> <a href='home_particles_banner.html'>Particles banner</a></li>
                      <li> <a href='home_5.html'>Windows Fix Screen</a></li>
                      <li> <a href='home_6.html'>Home Dark</a></li>
                      <li> <a href='home_7.html'>Home Container Width</a></li>
                      <li> <a href='home_fullbg_video.html'>Video banner</a></li>
                      <li> <a href='home_mouse_animation_banner.html'>Mouse Animation</a></li>
                      <li> <a href='home_fancy_slider.html'>Fancy Slider</a></li>
                      <li> <a href='home_bubble_animation_banner.html'>Bubble Animation</a></li>
                      <li> <a href='home_youtube_banner.html'>Youtube Banner</a></li>
                      <li> <a href='home_vimio_banner.html'>Vimio Banner</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- End Nav Dropdown --> 
              </li>
              <li> <a>Portfolio</a> 
                <!-- Nav Dropdown -->
                <ul class="nav-dropdown-level-1">
                  <li class="nav-has-sub"> <a href='#'>Grid</a>
                    <ul class="nav-dropdown-level-2">
                      <li><a href="portfolio_2col_grid.html">2 Columns</a></li>
                      <li><a href="portfolio_2col_grid_no_space.html">2 Columns No Space</a></li>
                      <li><a href="portfolio_3col_grid.html">3 Columns</a></li>
                      <li><a href="portfolio_3col_grid_no_space.html">3 Columns No Space</a></li>
                      <li><a href="portfolio_4col_grid.html">4 Columns</a></li>
                      <li><a href="portfolio_4col_grid_no_space.html">4 Columns No Space</a></li>
                    </ul>
                  </li>
                  <li class="nav-has-sub"> <a href="#">Masonry</a>
                    <ul class="nav-dropdown-level-2">
                      <li><a href="portfolio_2col_mesonary.html">2 Columns</a></li>
                      <li><a href="portfolio_2col_mesonary_no_space.html">2 Columns No Space</a></li>
                      <li><a href="portfolio_3col_mesonary.html">3 Columns</a></li>
                      <li><a href="portfolio_3col_mesonary_no_space.html">3 Columns No Space</a></li>
                      <li><a href="portfolio_4col_mesonary.html">4 Columns</a></li>
                      <li><a href="portfolio_4col_mesonary_no_space.html">4 Columns No Space</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- End Nav Dropdown --> 
              </li>
              <li> <a href="#">Blog</a> 
                <!-- Nav Dropdown -->
                <ul class="nav-dropdown-level-1">
                  <li class="nav-has-sub"> <a href='#'>Grid</a>
                    <ul class="nav-dropdown-level-2">
                      <li><a href="blog_2col_grid.html">2 Columns</a></li>
                      <li><a href="blog_3col_grid.html">3 Columns</a></li>
                    </ul>
                  </li>
                  <li class="nav-has-sub"> <a href="#">Masonry</a>
                    <ul class="nav-dropdown-level-2">
                      <li><a href="blog_2col_mesonary.html">2 Columns</a></li>
                      <li><a href="blog_3col_mesonary.html">3 Columns</a></li>
                    </ul>
                  </li>
                  <li class="nav-has-sub"> <a href="#">Blog Detail</a>
                    <ul class="nav-dropdown-level-2">
                      <li><a href="single_blog_image.html">Single Blog Image</a></li>
                      <li><a href="single_blog_slider.html">Single Blog Slider</a></li>
                      <li><a href="single_blog_you_video.html">Single Blog Youtube</a></li>
                      <li><a href="single_blog_vimeo_video.html">Single Blog Vimeo</a></li>
                      <li><a href="single_blog_quote.html">Single Blog Quote</a></li>
                    </ul>
                  </li>
                </ul>
                <!-- End Nav Dropdown --> 
              </li>
              <li> <a href="#">Shop</a>
                <ul class="nav-dropdown-level-1">
                  <li> <a href='shop_3col.html'>3colunm</a></li>
                  <li> <a href='shop_3col_left_sidebar.html'>3colunm Left Sidebar</a></li>
                  <li> <a href='shop_3col_right_sidebar.html'>3colunm Right Sidebar</a></li>
                  <li> <a href='shop_4col.html'>4colunm</a></li>
                  <li> <a href='shop_4col_left_sidebar.html'>4colunm Left Sidebar</a></li>
                  <li> <a href='shop_4col_right_sidebar.html'>4colunm Right Sidebar</a></li>
                  <li> <a href='shop_detail.html'> Detail Page</a></li>
                  <li> <a href='checkout_page.html'>Checkout Page</a></li>
                </ul>
              </li>
              <li> <a href="team.html">Team</a>
                <ul class="nav-dropdown-level-1">
                  <li> <a href='team.html'>Team 3colunm Grid</a></li>
                  <li> <a href='team_3col_slider.html'>Team 3colunm Slider</a></li>
                  <li> <a href='team_4col.html'>Team 4colunm Grid</a></li>
                  <li> <a href='team_4col_slider.html'>Team 4colunm slider</a></li>
                </ul>
              </li>
              <li> <a href="#">Elements</a>
                <ul class="nav-dropdown-level-1">
                  <li> <a href='pricing.html'>Pricing</a></li>
                  <li> <a href='components.html'>Components</a></li>
                  <li> <a href='accordian.html'>Accordian</a></li>
                  <li> <a href='progress_bar.html'>Progress bar</a></li>
                  <li> <a href='tabs.html'>Tabs</a></li>
                  <li> <a href='typography.html'>Typography</a></li>
                </ul>
              </li>
              <li> <a href="contact.html">Contact Us</a>
                <ul class="nav-dropdown-level-1">
                  <li> <a href='contact.html'>Contact</a></li>
                  <li> <a href='contact_fom_top.html'>Contact Form Topside</a></li>
                  <li> <a href='contact_map_right.html'>Map Rightside</a></li>
                  <li> <a href='contact_map_top.html'>Map Topside</a></li>
                </ul>
              </li>
              <li> <a href="about.html">About Us</a> </li>
            </ul>
            <!--End Navigation Menu -->  
            
          </nav>
          <div class="main-search pull-right"   >
            <div class="header-search">
              <form>
                <div class="search-box">
                  <input class="input-text" type="text" placeholder="Search entire store here...">
                  <button class="search-btn" type="button"></button>
                </div>
              </form>
            </div>
          </div>
          <div class="smart-cart-icon"> <i class="fa fa-angle-down" aria-hidden="true"></i> </div>
          <aside class="smartcart"> 
            
            <!-- Cart submit form -->
            <form action="shop_checkout.php" method="POST">
              <!-- SmartCart element -->
              <div id="smartcart"></div>
            </form>
          </aside>
        </div>
      </div>
    </div>
  </header>
  <!-- =====  HEADER END  ===== --> 
  <!-- =====  BREADCRUMB STRAT  ===== -->
  <div class="breadcrumb ptb_80 mt_80 mb_0">
    <h1 class="mb_20">Shop</h1>
    <ul >
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Shop</a></li>
      <li class="active">Cart</li>
    </ul>
  </div>
  <!-- =====  BREADCRUMB END===== --> 
  
  <!-- =====  CONTAINER START  ===== -->
  
  <section id="result">
      <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <div class="heading-part ">
                    <h2 class="main_title mt_50 mb_30">Cart Products</h2>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="main_title">Product List</h3>
                    <div class="pro_list mtb_20">
                    <?= isset($result_html) ? $result_html : '' ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <form action="checkout_page.html">
                      <input class="btn btn-md btn-border btn-light mtb_30" value="Checkout" type="submit">
                    </form>
                </div>
            </div>
        </div>
  </section>

  
  <!-- =====  CONTAINER END  ===== --> 
  
  <!-- =====  FOOTER START  ===== -->
  <div class="footer ptb_100">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mtb_40">
        <h4 class="footer-title ptb_20 light uppr ">Contact Us</h4>
            <ul>
              <li>B-14 Collins Street West Victoria 2386 lorems colerfes state</li>
              <li>(+123) 456 789 - (+024) 666 888</li>
              <li>Contact@yourcompany.com</li>
            </ul>
        </div>
        <div class="col-md-6">
          <div class="footer-logo mb_40"> <a href="index.html"> <img src="images/footer-logo.png" alt="Gaan.do"> </a> </div>
          <div class="footer-link">
            <ul>
              <li><a href="index.html">Home </a></li>
              <li><a href="about.html">Portfolio</a></li>
              <li><a href="blog_2col_grid.html">Blog</a></li>
              <li> <a href="team.html">Team</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="copyright-part mtb_10">@ 2017 All Rights Reserved Gaan.do</div>
          <div class="social_icon">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 mtb_40">
        <h4 class="footer-title ptb_20 light uppr">SIGN UP OUR NEWSLETTER</h4>
        <div class="form-group light">
          <input placeholder="Enter Your Email Address" type="text">
          <br>
          <button class="btn btn-link-w mt_20">Subscribe</button>
        </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- =====  FOOTER END  ===== --> 
</div>
<script src="js/jQuery_v3.1.1.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>
<script src="js/isotope.pkgd.min.js"></script> 
<script src="js/letters-type.js"></script> 
<script src="js/menu.js"></script> 
<script src="js/custom.js"></script> 
<script src="js/jquery.smartCart.js"></script> 
<script src="js/wow.js"></script>  

<script type="text/javascript">
  $(document).ready(function(){
          // Initialize Smart Cart      
    $('#smartcart').smartCart();
  });
</script>
</body>
</html>