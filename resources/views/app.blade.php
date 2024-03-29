<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hutche - Furniture ECommerce Bootstrap 5 Template </title>
    <meta name="description" content="Hutche Furniture eCommerce Template is a wonderful and elegant-looking website template that is the best choice for any type of online furniture store."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />
    
    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <!-- <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Be Furniture – About Us" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Be Furniture – About Us" /> -->
    <!-- For the og:image content, replace the # with a link of an image -->
    <!-- <meta property="og:image" content="#" />
    <meta property="og:description" content="Be Furniture – About Us" /> -->
    
    <!-- Add site Favicon -->
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="https://hasthemes.com/wp-content/uploads/2019/04/cropped-favicon-270x270.png" />

           

    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "Replace_with_your_site_title",
        "url": "Replace_with_your_site_URL"
        }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
  </head>
  <body>

    <!--offcanvas menu area start-->
    <div class="body_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Home 1</a></li>
                                        <li><a href="#">Home 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">shop left sidebar</a></li>
                                        <li><a href="#">shop fullwidth</a></li>
                                        <li><a href="#">shop collection</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Product</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">blog</a></li>
                                        <li><a href="#">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!--header area start-->
    <header class="header_section mb-30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main_header d-flex justify-content-between align-items-center">
                        <div class="header_logo">
                            <a class="sticky_none" href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a class="active" href="index.html">Home</a>
                                        <ul class="sub_menu">
                                            <li><a href="#">Home 1</a></li>
                                            <li><a href="#">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub_menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop </a>
                                        <ul class="sub_menu">
                                            <li><a href="#">shop left sidebar</a></li>
                                            <li><a href="#">shop fullwidth</a></li>
                                            <li><a href="#">shop collection</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="blog.html">blog</a>
                                        <ul class="sub_menu">
                                            <li><a href="#">Blog Pages</a></li>
                                            <li><a href="#">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--main menu end-->
                        <div class="header__ridebar d-flex align-items-center">
                            <div class="header_account">
                                <ul class="d-flex">
                                    <li class="header_search_btn"><a href="#"><img src="../assets/img/icon/search.png"
                                                alt=""></a></li>
                                    <li class="shopping_cart"><a href="#"><img src="../assets/img/icon/cart.png"
                                                alt=""></a></li>
                                    <li class="account_link_menu"><a href="#"><img src="../assets/img/icon/person.png"
                                                alt=""></a>
                                        <ul class="dropdown_account_link">
                                            <li><a href="">About Us</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--mini cart-->
    <div class="mini_cart">
        <div class="cart_gallery">
            <div class="cart_close">
                <div class="cart_text">
                    <h3>cart</h3>
                </div>
                <div class="mini_cart_close">
                    <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="../assets/img/product/small-product1.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Primis In Faucibus</a>
                    <p>1 x <span> $65.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
            <div class="cart_item">
                <div class="cart_img">
                    <a href="#"><img src="../assets/img/product/small-product2.png" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="#">Letraset Sheets</a>
                    <p>1 x <span> $60.00 </span></p>
                </div>
                <div class="cart_remove">
                    <a href="#"><i class="icon-close icons"></i></a>
                </div>
            </div>
        </div>
        <div class="mini_cart_table">
            <div class="cart_table_border">
                <div class="cart_total">
                    <span>Sub total:</span>
                    <span class="price">$125.00</span>
                </div>
                <div class="cart_total mt-10">
                    <span>total:</span>
                    <span class="price">$125.00</span>
                </div>
            </div>
        </div>
        <div class="mini_cart_footer">
            <div class="cart_button">
                <a href="#"><i class="fa fa-shopping-cart"></i> View cart</a>
            </div>
            <div class="cart_button">
                <a href="#"><i class="fa fa-sign-in"></i> Checkout</a>
            </div>
        </div>
    </div>
    <!--mini cart end-->
    <!-- page search box -->
    <div class="page_search_box">
        <div class="search_close">
            <i class="ion-close-round"></i>
        </div>
        <form class="border-bottom" action="#">
            <input class="border-0" placeholder="Search products..." type="text">
            <button type="submit"><i class="icofont-search"></i></button>
        </form>
    </div>
    <!--header area end-->
    
       @inertia


       <!-- footer section start -->
    <footer class="footer_section footer_bg">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="main_footer d-flex justify-content-between align-items-center">
                      <div class="footer_left">
                          <div class="footer_logo">
                              <a href="index.html"><img src="../assets/img/logo/logo.png" alt=""></a>
                          </div>
                          <div class="footer_social">
                              <ul class="d-flex">
                                  <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                  <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                  <li><a href="#"><i class="ion-social-vimeo"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="footer_sidebar d-flex">
                          <div class="footer_widget_list">
                              <div class="footer_widget_title">
                                  <h3>COMPANY</h3>
                              </div>
                              <div class="footer_menu">
                                  <ul>
                                      <li><a href="#">About Us</a></li>
                                      <li><a href="#">Help Center</a></li>
                                      <li><a href="#">Licenses</a></li>
                                      <li><a href="#">Market API</a></li>
                                      <li><a href="#">Site Map</a></li>
                                  </ul>
                              </div>
                          </div>

                          <div class="footer_widget_list">
                              <div class="footer_widget_title">
                                  <h3>MORE FROM US</h3>
                              </div>
                              <div class="footer_menu">
                                  <ul>
                                      <li><a href="#">Mobile and Layout Apps</a></li>
                                      <li><a href="#">Marketplace</a></li>
                                      <li><a href="#">About Vendors</a></li>
                                      <li><a href="#">Gift Vouchers</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="footer_widget_list">
                              <div class="footer_widget_title">
                                  <h3>Userful Links</h3>
                              </div>
                              <div class="footer_menu">
                                  <ul>
                                      <li><a href="#">The Collections</a></li>
                                      <li><a href="#">Size Guide</a></li>
                                      <li><a href="#">Fashion Inspiration</a></li>
                                      <li><a href="#">Look Book</a></li>
                                      <li><a href="#">Instagram Shop</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="footer_widget_list">
                              <div class="footer_widget_title">
                                  <h3>Sing up for newsletter</h3>
                              </div>
                              <div class="newsletter_subscribe">
                                  <form id="mc-form">
                                      <input id="mc-email" type="email" autocomplete="off"
                                          placeholder="Email address... ">
                                      <button id="mc-submit">Subscribe</button>
                                  </form>
                                  <!-- mailchimp-alerts Start -->
                                  <div class="mailchimp-alerts text-centre">
                                      <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                      <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                      <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                  </div><!-- mailchimp-alerts end -->
                              </div>
                              <div class="instagram_shop">
                                  <h3>instagram shop</h3>
                                  <div class="instagram_inner d-flex">
                                      <div class="instagram_img">
                                          <a href="#"><img src="../assets/img/others/instagram1.png" alt=""></a>
                                      </div>
                                      <div class="instagram_img">
                                          <a href="#"><img src="../assets/img/others/instagram2.png" alt=""></a>
                                      </div>
                                      <div class="instagram_img">
                                          <a href="#"><img src="../assets/img/others/instagram3.png" alt=""></a>
                                      </div>
                                      <div class="instagram_img">
                                          <a href="#"><img src="../assets/img/others/instagram4.png" alt=""></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="footer_bottom">
                      <div class="copyright_right text-center">
                          <p>&copy; 2021 All rights reserved This template is Made with <i class="ion-heart"></i>
                              by <a href="https://hasthemes.com">HasThemes</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer section end -->

  <!-- Js 
    ========================= -->
   
   
   
  </body>
</html>