<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Delivery Man</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- fonts -->
<link href="css/icofont.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- <link rel="stylesheet" href="css/slicknav.min.css" /> -->
<link href="css/style.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
</head>
<body id="body">
 <!-- header -->
 <header>
        <div class="ic-nav-container">
          <!-- site logo -->
          <div class="ic-logo">
            <a href="index.html"><img src="images/logo.png" alt="Logo"></a>
          </div>
          <!-- site logo /end -->
          
          <!-- nav --> 
          <nav>
            <ul id="menu">
              <li><a href="index.html">Home</a></li>
              <li class="ic-dropdown"><a href="#">Music</a>
                <ul>
                  <li class="active"><a href="albums.html">Music</a></li>
                  <li><a href="music-audio.html">Music Audio</a></li>
                  <li><a href="music-video.html">Music Video</a></li>
                </ul>
              </li>
              <li><a href="artists.html">Artists</a></li>
              <li><a href="tours.html">Tour</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="shop.html">Shop</a></li> 
              <li class="ic-dropdown"><a href="#">Pages</a>
                <ul>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="album-detail.html">album detail</a></li>
                  <li><a href="artist-detail.html">Artist detail</a></li>
                  <li><a href="billing-detail.html">Billing detail</a>
                  <li><a href="blog-detail.html">Blog detail</a>
                  <li><a href="comming-soon.html">Comming soon</a>
                  <li><a href="shop-detail.html">Shop detail</a>
                  <li><a href="tour-detail.html">tour detail</a>
                  <li><a href="view-cart.html">View cart</a>
                </ul>
              </li> 
            </ul> 
          </nav>
          <!-- nav /end --> 

          <!-- right nav -->
          <div class="ic-right-nav">
            <!-- search -->
            <div class="ic-search">
              <a href="#search"><i class="icofont icofont-search-alt-2"></i></a>
              <div id="search">
                <button type="button" class="close"></button>
                <form action="#">
                  <input type="search" value="" placeholder="SEARCH KEYWORD(s)" />
                  <button type="submit" class="ic-btn">Search</button>
                </form>
              </div>
            </div>
            <!-- search /end -->

            <!-- share social-->
            <div class="ic-share-sites">
              <a href="view-cart.html" class="ic-cart-link">
                <i class="icofont icofont-bag"></i>
              </a>
            </div>
            <!-- share social /end -->
          </div>
          <!-- right nav /end-->
        </div>
      </header> 
      <!-- header /end -->

<!--navbar -->

<!-- navbar -->

<!-- register modal -->
<div class="modal-bg"></div>
<div class="modal fade ic-modal" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <div class="bclose-l1"></div>
            <div class="bclose-l2"></div>
        </button>
      <div class="modal-body">
        <div class="content-top text-center">
            <img src="images/home/modal-logo.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  eiusmod tempor 
            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <form action="">
            <div class="reg-log-right">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create AN Account" class="form-control ic-form-btn">
                </div>
                <p class="login">Already have an account? <a href=""  data-dismiss="modal" data-toggle="modal" data-target="#login">Log in</a></p>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- login modal -->
<div class="modal-bg"></div>
<div class="modal fade ic-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <div class="bclose-l1"></div>
            <div class="bclose-l2"></div>
        </button>
      <div class="modal-body">
        <div class="content-top text-center">
            <img src="images/home/modal-logo.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  eiusmod tempor 
            dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
        </div>
        <form action="">
            <div class="reg-log-right">
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="User Name or Email Address">
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="submit" value="log into my account" class="form-control ic-form-btn mb-0">
                </div>
                <div class="text">
                    <p class="forget-password"><a href="">Forgot your password?</a></p>
                    <h2>Don't have a free account yet?</h2>
                    <p class="create-account"><a href=""  data-dismiss="modal" data-toggle="modal" data-target="#register" class="ic-form-btn">Crearte An account</a></p>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>