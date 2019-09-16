<!DOCTYPE html>
<html>
   <head>
      <title>Module 1984</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/1984.less', 'css/1984.css');
         ?>
      <link href="css/1984.css" rel="stylesheet" type="text/css"/>
      <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
   </head>
   <body>
      <div class="type-576">
         <!--BEGIN MENU -->
         <nav class="navbar-default" role="navigation">
            <div class="container">
               <!--BEGIN NAVMIN -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <!--LOGO-->
                  <div class="logo_image">
                     <img src="images/logo.png" alt="Varse" class="img-responsive" >
                  </div>
               </div>
               <!--END NAVMIN -->
               <!--BEGIN MENU CENTER-->
               <div class="navbar-collapse" id="bs-slide-dropdown">
                  <ul class="nav navbar-nav menu-center">
                     <!--HOME-->
                     <li class="dropdown active-item">
                        <a href="#" class="dropdown-toggle active-item " data-toggle="dropdown">HOME</a>
                     </li>
                     <li><a href="#">SHOP</a>
                     </li>
                     <!--PAGES-->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCT</a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Coming soon</a></li>
                           <li><a href="#">How it works</a></li>
                           <li><a href="#">Page elements</a></li>
                           <li><a href="#">404</a></li>
                        </ul>
                     </li>
                     <!--BLOG-->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG</a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Decoration</a></li>
                        </ul>
                     </li>
                     <!--PORTFOLIO-->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PORTFOLIO</a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Dress Watch</a></li>
                           <li><a href="#">Uncategorized</a></li>
                        </ul>
                     </li>
                     <!--Pages-->
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >PAGES</a>
                        <ul class="dropdown-menu">
                           <li><a href="#"> About us</a></li>
                           <li><a href="#">Our team</a></li>
                           <li><a href="#">Contact</a></li>
                           <li><a href="#">FAQ’s</a></li>
                           <li><a href="#">Coming soon</a></li>
                           <li><a href="#">Page not found</a></li>
                        </ul>
                     </li>
                    
                  </ul>
                    <!--END MENU RIGHT-->
                     <div class="icon">
                         <div class="icon2">
                              <div class="icon-search"><a href="#"><i class="fa fa-search"></i></a></div>
                   
                        <div class="icon-heart"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                    
                        <div class="icon-cart">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-cart-plus"></i></a>
                          
                        </div>
                         </div>
                     </div>
                     <!--END MENU -->   
               </div>
            </div>
            <!------------Nav----------------------->
            <div class="shop title-size-default">
               <h1> SHOP</h1>
               <div><a href="#">Home</a> 
                  <span></span> Shop
               </div>
            </div>
         </nav>
      </div>
      <script src="js/scripts.js" type="text/javascript"></script>
   </body>
</html>