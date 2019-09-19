<html>

<head>
   <title>Module 1983</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <?php
         if (!class_exists('lessc')) {
             include ('./libs/lessc.inc.php');
         }
         $less = new lessc;
         $less->compileFile('less/1983.less', 'css/1983.css');
         ?>
   <link href="css/1983.css" rel="stylesheet" type="text/css" />
   <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
   <section class="type-1983">

      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="type-1983">
                  <!------------Nav----------------------->
                  <div class="wishlist title-size-default">
                     <h1> WishList </h1>
                     <div><a href="#">Home</a>
                        <span></span> Wishlist
                     </div>
                  </div>
                  <!------------Nav 2----------------------->
                  <div class="table wish">
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="product-order">NO.</th>
                              <th class="product-name">
                                 <span class="nobr">Product Name</span>
                              </th>
                              <th class="product-price">
                                 <span class="nobr">
                                    Unit Price </span>
                              </th>
                              <th class="product-stock-status">
                                 <span class="nobr">
                                    Stock Status </span>
                              </th>
                              <th class="product-remove">Delete</th>
                              <th class="product-add-to-cart"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="item">
                              <td class="item__order">1</td>
                              <td class="item__name">product name 1</td>
                              <td class="item__price">500.00d</td>
                              <td class="item__status">No products were added to the wishlist</td>
                              <td class="item__delete"><button><i class="fa fa-times" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           <tr class="item">
                              <td class="item__order">2</td>
                              <td class="item__name">product name 2</td>
                              <td class="item__price">50.00d</td>
                              <td class="item__status">Available</td>
                              <td class="item__delete"><button><i class="fa fa-times" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           <tr class="item">
                              <td class="item__order">3</td>
                              <td class="item__name">product name 2</td>
                              <td class="item__price">50.00d</td>
                              <td class="item__status">Available</td>
                              <td class="item__delete"><button><i class="fa fa-times" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           <tr class="item">
                              <td class="item__order">4</td>
                              <td class="item__name">product name 2</td>
                              <td class="item__price">50.00d</td>
                              <td class="item__status">Available</td>
                              <td class="item__delete"><button><i class="fa fa-times" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           <tr class="item">
                              <td class="item__order">5</td>
                              <td class="item__name">product name 2</td>
                              <td class="item__price">50.00d</td>
                              <td class="item__status">Available</td>
                              <td class="item__delete"><button><i class="fa fa-times" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                           <tr class="item">
                              <td class="item__order">6</td>
                              <td class="item__name">product name 2</td>
                              <td class="item__price">50.00d</td>
                              <td class="item__status">Available</td>
                              <td class="item__delete"><button><i class="fa fa-times" aria-hidden="true"></i></button>
                              </td>
                           </tr>
                        </tbody>
                        <!--tfoot-->
                        <tfoot>
                           <tr>
                              <td colspan="6">
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
               <!------------Footer----------------------->
               <footer>
                  <div class="foot">
                     <div class="container">
                        <div class="row">
                                 <div class="row col-sm-12 col-lg-6">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <div class="Getintouch">
                                          <h4>Get In Touch</h4>
                                          <br>
                                          <div class="adress">
                                             <p>No.868 Rochester Suite 69, New York NY, United Stated </p>
                                          </div>
                                          <div class="phone">
                                             <p>Call: +01 1 2268 7749 </p>
                                          </div>
                                          <div class="email">
                                             <p>Email: Varsecare@demo.com</p>
                                          </div>
                                          <div class="Open">
                                             <p>Opening: 9.00am - 9.30pm</p>
                                          </div>
                                       </div>
                                    </div>

                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <div class="information">
                                             <h4>Information</h4>
                                             <br>
                                             <div class='inf'>
                                                <div class="FA">
                                                   <a href="#">FAQ's</a>
                                                </div>
                                                <div class='contact'>
                                                   <a href="#">Contact Us</a>
                                                </div>
                                                <div class='returns'>
                                                   <a href="#">Returns & Refunds</a>
                                                </div>
                                                <div class='wish'>
                                                   <a href="#">My Wishlist</a>
                                                </div>
                                                <div class='top'>
                                                   <a href="#">Top Popular</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="row col-sm-12 col-lg-6">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <div class="needhelp">
                                          <h4>Need Help</h4>
                                          <br>
                                          <div class='need'>
                                             <div class="onl">
                                                <a href="#"> Online Store</a>
                                             </div>
                                             <div class='cus'>
                                                <a href="#">Customer Services</a>
                                             </div>
                                             <div class='pro'>
                                                <a href="#">Promotion</a>
                                             </div>
                                             <div class='bra'>
                                                <a href="#">Top Brands</a>
                                             </div>
                                             <div class='res'>
                                                <a href="#"> Top Research</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <div class="follow">
                                          <h4>Follow Us</h4>
                                          <br>
                                          <div class='fol'>
                                             <div class="sub">
                                                <a href="#"> Subscribe now to get 15% off on any product for your next
                                                   buy!</a>
                                             </div>
                                             <div class='form'>
                                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-78" method="post"
                                                   data-id="78" data-name="Newletter">
                                                   <div class="mc4wp-form-fields">
                                                      <div class="form-newletter">
                                                         <input type="email" name="EMAIL"
                                                            placeholder="email@example.com" required="">
                                                         <input type="submit" value="sign up">
                                                      </div>
                                                   </div>
                                                   <label style="display: none !important;">Leave this field empty if
                                                      you're human: <input type="text" name="_mc4wp_honeypot" value=""
                                                         tabindex="-1" autocomplete="off"></label>
                                                   <input type="hidden" name="_mc4wp_timestamp" value="1556006719">
                                                   <input type="hidden" name="_mc4wp_form_id" value="78"><input
                                                      type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                                   <div class="mc4wp-response"></div>
                                                </form>
                                             </div>
                                             <div
                                                class="varse-social-icons flex icon-align-left icon-style-default icon-size-small icon-color-default">
                                                <div class="varse-social-icon social-facebook"><a href="#"><i
                                                         class="fa fa-facebook"></i></a></div>
                                                <div class="varse-social-icon social-twitter"><a href="#"><i
                                                         class="fa fa-twitter"></i></a></div>
                                                <div class="varse-social-icon social-google-plus"><a href="#"><i
                                                         class="fa fa-google-plus"></i></a></div>
                                                <div class="varse-social-icon social-linkedin"><a href="#"><i
                                                         class="fa fa-linkedin"></i></a></div>
                                                <div class="varse-social-icon social-instagram"><a href="#"><i
                                                         class="fa fa-instagram"></i></a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                     </div>
                  </div>
                  <div class="copyright">
                     <div class="col-md-12">
                        <div class="col-md-6">
                           <div class="foot2">
                              <a href="#">Shipping</a>
                              <a href="#">Privacy Policy</a>
                              <a href="#">Support</a>
                              <a href="#">Contact</a>
                           </div>
                        </div>
                        <div class="col-md-6 text-md-center">
                           <p >Copyright 2019. All rights reserved. Design by
                              <a href="#">Joommasters.com</a>
                           </p>
                        </div>
                     </div>
                  </div>
               </footer>
               <!------------END CONTENT UPDATES---------->
            </div>
         </div>
      </div>
      <script src="js/javascript.js" type="text/javascript"></script>
   </section>
</body>

</html>