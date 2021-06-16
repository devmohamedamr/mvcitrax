<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL."/website/sky/" ?>css/external/slick.css">
    <link rel="stylesheet" href="<?= URL."/website/sky/" ?>css/external/all.min.css">
    <link rel="stylesheet" href="<?= URL."/website/sky/" ?>css/external/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL."/website/sky/" ?>css/external/dscountdown.css">
    <link rel="stylesheet" href="<?= URL."/website/sky/" ?>css/style.css">
    <title>Document</title>
</head>
<body>
    <!------------------------------- start navbar ----------------------------------->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Search Here">
                <button class="close"><i class="fas fa-times"></i></button>
              </div>
            <a class="navbar-brand" href="#">
                <img src="img/prdouct/logo.webp" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <?php foreach($menu as $m): ?>
            <li class="nav-item active">
              <a class="nav-link" href="#"><?= $m['name']; ?></a>
            </li>
              <?php endforeach; ?>
          </ul>
        </div>
        <div class="icon">
            <a href="#" id="search"><i class="fas fa-search"></i></a>
            <a href="#"><i class="far fa-heart"></i></a>
            <a href="#"><i class="fas fa-cart-plus"></i></a>
        </div>
        </div>
      </nav>

    <!------------------------------- end navbar ----------------------------------->


    <!------------------------------- start slider ----------------------------------->
    <div class="headerSlider">
        <div class="slider">
            <div class="container">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <h1>Wood & Cloth Sofa</h1>
                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                            <button class="btn butt">buy now</button>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="img/prdouct/banner_img.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="slider">
            <div class="container">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <h1>Cloth & Wood Sofa</h1>
                            <p>Incididunt ut labore et dolore magna aliqua quis ipsum suspendisse ultrices gravida. Risus commodo viverra</p>
                            <button class="btn butt">buy now</button>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="img/prdouct/banner_img.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!------------------------------- end Header ----------------------------------->

    <!------------------------------- start Category ----------------------------------->
    <div id="Category" class="Featured-Category">
        <div class="container">
            <div class="text text-center mb-5"><h2>Featured Category</h2></div>
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="product-item">
                        <div class="text-product">
                            <p>Premium Quality</p>
                            <h4>Latest foam Sofa</h4>
                        </div>
                        <img src="img/feature/feature_1.webp" class="img-fluid" alt="">
                        <div class="link-product"><a href="#">EXPLORE NOW<i class="fas fa-caret-right"></i> </a></div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="product-item">
                        <div class="text-product">
                            <p>Premium Quality</p>
                            <h4>Latest foam Sofa</h4>
                        </div>
                        <img src="img/feature/feature_2.webp" class="img-fluid" alt="">
                        <div class="link-product"><a href="#">EXPLORE NOW<i class="fas fa-caret-right"></i> </a></div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6">
                    <div class="product-item">
                        <div class="text-product">
                            <p>Premium Quality</p>
                            <h4>Latest foam Sofa</h4>
                        </div>
                        <img src="img/feature/feature_3.webp" class="img-fluid" alt="">
                        <div class="link-product"><a href="#">EXPLORE NOW<i class="fas fa-caret-right"></i> </a></div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-6">
                    <div class="product-item">
                        <div class="text-product">
                            <p>Premium Quality</p>
                            <h4>Latest foam Sofa</h4>
                        </div>
                        <img src="img/feature/feature_4.webp" class="img-fluid" alt="">
                        <div class="link-product"><a href="#">EXPLORE NOW<i class="fas fa-caret-right"></i> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ------------------------------------start shop------------------------------- -->
    <section id="shop" class="shop">
        <div class="container">
            <div class="text">
                <h2>Awesome <span>shop</span></h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <div class="row">
                       <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="item">
                               <img src="img/products/product_1.webp" class="img-fluid" alt="">
                               <div class="dec">
                                   <h3>Quartz Belt Watch</h3>
                                   <p>$150.00</p>
                                   <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_2.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                                <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_3.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                                <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_4.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                                <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_5.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                                <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="item">
                         <img src="img/products/product_1.webp" class="img-fluid" alt="">
                         <div class="dec">
                             <h3>Quartz Belt Watch</h3>
                             <p>$150.00</p>
                             <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="item">
                         <img src="img/products/product_7.webp" class="img-fluid" alt="">
                         <div class="dec">
                             <h3>Quartz Belt Watch</h3>
                             <p>$150.00</p>
                             <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="item">
                         <img src="img/products/product_8.webp" class="img-fluid" alt="">
                         <div class="dec">
                             <h3>Quartz Belt Watch</h3>
                             <p>$150.00</p>
                             <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                         </div>
                     </div>
                 </div>
                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="item">
                                <img src="img/products/product_1.webp" class="img-fluid" alt="">
                                <div class="dec">
                                    <h3>Quartz Belt Watch</h3>
                                    <p>$150.00</p>
                                    <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_2.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                                 <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_3.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                                 <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_4.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                                 <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                             </div>
                         </div>
                     </div>
                    </div>
                    <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_5.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                                 <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="item">
                          <img src="img/products/product_1.webp" class="img-fluid" alt="">
                          <div class="dec">
                              <h3>Quartz Belt Watch</h3>
                              <p>$150.00</p>
                              <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="item">
                          <img src="img/products/product_7.webp" class="img-fluid" alt="">
                          <div class="dec">
                              <h3>Quartz Belt Watch</h3>
                              <p>$150.00</p>
                              <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="item">
                          <img src="img/products/product_8.webp" class="img-fluid" alt="">
                          <div class="dec">
                              <h3>Quartz Belt Watch</h3>
                              <p>$150.00</p>
                              <a href="#">+ add to cart <i class="far fa-heart"></i></a>
                          </div>
                      </div>
                  </div>
                     </div>
                   </div>
                   </div>
             

                   <div class="control">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">prev</a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">next</a>
    
                   </div>


              </div>
        </div>
    </section>
    <!-- ------------------------------------end shop------------------------------- -->

    <!-- ------------------------------------start sale------------------------------- -->
    <section id="Sale" class="sale">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="item">
                        <img src="img/prdouct/offer_img.webp" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <h2>Weekly Sale on 60% Off All Products</h2>
                        <div class="countdown"></div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter email">
                            <button class="btn butt">Book now</button>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ------------------------------------end sale------------------------------- -->

    <!-- ------------------------------------start best------------------------------- -->
    <section class="shop">
        <div class="container">
            <div class="text">
                <h2>Best Sellers  <span>shop</span></h2>
            </div>
            <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <div class="row">
                       <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="item">
                               <img src="img/products/product_1.webp" class="img-fluid" alt="">
                               <div class="dec">
                                   <h3>Quartz Belt Watch</h3>
                                   <p>$150.00</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_2.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_3.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="item">
                            <img src="img/products/product_4.webp" class="img-fluid" alt="">
                            <div class="dec">
                                <h3>Quartz Belt Watch</h3>
                                <p>$150.00</p>
                            </div>
                        </div>
                    </div>
                   </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="item">
                                <img src="img/products/product_1.webp" class="img-fluid" alt="">
                                <div class="dec">
                                    <h3>Quartz Belt Watch</h3>
                                    <p>$150.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_2.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_3.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="item">
                             <img src="img/products/product_4.webp" class="img-fluid" alt="">
                             <div class="dec">
                                 <h3>Quartz Belt Watch</h3>
                                 <p>$150.00</p>
                             </div>
                         </div>
                     </div>
                    </div>
                   </div>
                </div>
             

                <div class="control">
                    <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">prev</a>
                    <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">next</a>
                </div>


              </div>
        </div>
    </section>
    <!-- ------------------------------------start Subscribe ------------------------------- -->
    <section class="Subscribe">
        <div class="container">
            <div class="dec text-center">
                <p>JOIN OUR NEWSLETTER</p>
                <h2>Subscribe to get Updated with new offers</h2>
    
                <div class="form-group">
                   <input type="email" class="form-control" placeholder="Enter email adress">
                   <button class="btn butt">Subscribe  now</button>
                 </div>
               </div>
        </div>
    </section>  
    
    <!-- ------------------------------------end Subscribe ------------------------------- -->

    <!-- ------------------------------------start logo ------------------------------- -->
    <section class="client-logo">
        <div class="container">
            <div class="client">
                <div class="item">
                    <img src="img/client_logo/client_logo_1.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_2.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_3.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_4.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_5.webp" alt="">
                </div>

                <div class="item">
                    <img src="img/client_logo/client_logo_1.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_3.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_2.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_4.webp" alt="">
                </div>
                <div class="item">
                    <img src="img/client_logo/client_logo_5.webp" alt="">
                </div>
            </div>
        </div>    
    </section>
    <!-- ------------------------------------end logo ------------------------------- -->

    <!-- ------------------------------------start footer ------------------------------- -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-3">
                    <div class="footer-item">
                        <h3>Top Products</h3>
                        <ul>
                            <li><a href="#">Managed Website</a></li>
                            <li><a href="#">Manage Reputation</a></li>
                            <li><a href="#">Power Tools</a></li>
                            <li><a href="#">Marketing Service</a></li>    
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="footer-item">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Jops</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>   
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="footer-item">
                        <h3>Features</h3>
                        <ul>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Brand Assets</a></li>
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Terms of Service</a></li>    
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-md-3">
                    <div class="footer-item">
                        <h3>Resources</h3>
                        <ul>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Research</a></li>
                            <li><a href="#">Experts</a></li>
                            <li><a href="#">Agencies</a></li> 
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="footer-item">
                        <h3>Resources</h3>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping</p>   
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Addres">
                            <button class="btn butt">Subscribe</button>
                          </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-8">
                        <p>Copyright ©2021 All rights reserved | This template is made with <i class="far fa-heart"></i> by <span>Mostafa ElNemr</span></p>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- -------------------------------------end footer------------------------------------ -->

    <!-- ------------------------------------- butup ------------------------------------ -->

    <button class="btn butup"><i class="fas fa-arrow-up"></i></button>

    <!-- -------------------------------------loading------------------------------------ -->
    
    <div class="loading">
        <div class="lds-dual-ring"></div>
    </div>



















     










    <script src="<?= URL."/website/sky/" ?>js/External/jquery-3.5.1.js"></script>
    <script src="<?= URL."/website/sky/" ?>js/External/popper.min.js"></script>
    <script src="<?= URL."/website/sky/" ?>js/External/bootstrap.min.js"></script>
    <script src="<?= URL."/website/sky/" ?>js/External/slick.min.js"></script>
    <script src="<?= URL."/website/sky/" ?>js/External/dscountdown.min.js"></script>
    <script src="<?= URL."/website/sky/" ?>js/main.js"></script>
</body>
</html>