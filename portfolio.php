<?php get_header();?>
<?php
/*
Template Name:Protfolio
*/
?>
  <!-- Start login modal window -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
             <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span></label>
              <button class="btn signin-btn" type="button">SIGN IN</button>
            </div>                    
          </form>
        </div>
        <div class="modal-footer footer-box">
          <a href="#">Forgot password ?</a>
          <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input placeholder="Name" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <label><input type="checkbox"><span>Remember me</span><i class="fa"></i></label>
              <button class="btn signin-btn" type="button">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html">Intensely</a>              
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->                    
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="feature.html">Feature</a></li>
            <li><a href="service.html">Service</a></li>
            <li class="active"><a href="portfolio.html">Portfolio</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="blog-archive.html">Blog Archive</a></li>                
                <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
                <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
                <li><a href="blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>           
              </ul>
            </li>
            <li><a href="404.html">404 Page</a></li>               
            <li><a href="contact.html">Contact</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
  
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Portfolio</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Portfolio</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start portfolio -->
  <section id="portfolio">
    <div class="portfolio-area">
        <!-- portfolio menu -->
       <div class="portfolio-menu">
         <ul>
           <li class="filter" data-filter="all">All</li>
           <li class="filter" data-filter=".branding">Branding</li>
           <li class="filter" data-filter=".design">Design</li>
           <li class="filter" data-filter=".development">Development</li>
           <li class="filter" data-filter=".photography">Photography</li>
         </ul>
       </div>      
       <!-- Portfolio container -->
       <div id="mixit-container" class="portfolio-container">
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-1.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-2.jpg" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-2.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <h4>Mobile application</h4>
                <span>UI Design</span>
              </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-3.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-4.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-5.jpg" alt="img">
            <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-5.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-1.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-2.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-3.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-1.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-2.jpg" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-2.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <h4>Mobile application</h4>
                <span>UI Design</span>
              </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-3.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/portfolio-4.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/portfolio-big-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <h4>Mobile application</h4>
                  <span>UI Design</span>
                </div>
             </div>
           </div>
         </div>
       </div>        
    </div>
  </section>
  <!-- End portfolio -->
  
   <?php
  get_footer();
  ?>