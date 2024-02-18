
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Athena - Minimal Blog HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/athena-favicon.svg">
    <!-- Theme CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/widgets.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="scroll-progress bg-dark"></div>
    <!-- Start Preloader -->
    <!-- <div class="preloader text-center">
            <div class="gooey">               
              <span class="dot"></span>
              <div class="dots">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
        </div> -->
    <!--Offcanvas sidebar-->
    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar">
        <button class="off-canvas-close"><i class="athena-cancel"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-widget widget-creative-menu">
                <ul>
                    <li><a href="category.html">Blog<sup>235</sup></a></li>
                    <li><a href="category-2.html">Lifestyle<sup>186</sup></a></li>
                    <li><a href="category-3.html">Inspiration<sup>98</sup></a></li>
                    <li><a href="category-4.html">Healthy<sup>247</sup></a></li>
                </ul>
            </div>
            <div class="sidebar-widget widget-menu pt-30">
                <div class="widget-header-3 font-primary mb-20">
                    <h5 class="widget-title text-uppercase text-white">Follow</h5>
                </div>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Behance</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
            </div>
            <div class="offcanvas-copyright">
                <p class="text-muted text-uppercase mb-0">Athena Magazine</p>
                <p class="text-muted mb-0 font-medium">123 Main Street</p>
                <p class="text-muted mb-0 font-medium">New York, NY 10001</p>
            </div>
        </div>
    </aside>
    <!-- Start Header -->
    <header class="main-header header-sticky header-style-1 bg-white">
        <!--Main navigation-->
        <div class="container">
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="mobile_logo d-md-none">
                <h1 class="font-secondary"><a href="index.html">Athena</a></h1>
            </div>
            <div class="mobile-search d-md-none">
                <button class="search-icon d-inline">
                    <i class="athena-search mr-5"></i>
                </button>
            </div>
            <div class="row align-items-center d-none d-md-flex">
                <div class="col-lg-5 col-md-4">
                    <div class="off-canvas-toggle-cover d-none d-lg-inline-block mr-20">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                    <ul class="main-menu d-none d-lg-inline font-primary">
                        <li> <a href="category.html">Healthy </a> </li>
                        <li> <a href="category-2.html">Lifestyle</a> </li>
                        <li class="menu-item-has-children">
                            <a href="category-3.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category-2.html">Travel</a></li>
                                <li><a href="category-3.html">Gallery</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--Mobile menu-->
                    <ul id="mobile-menu" class="d-none">
                        <li class="menu-item-has-children">
                            <a href="#">Recipes</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Specialty Diets</a></li>
                                <li><a href="category-2.html">Meal Prep Recipes</a></li>
                                <li><a href="category-3.html">Whole30</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Lifestyle</a>
                            <ul class="sub-menu">
                                <li><a href="category-4.html">Style</a></li>
                                <li><a href="category.html">Travel</a></li>
                                <li><a href="category-2.html">Shop</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="category-3.html">Clothing</a></li>
                                <li><a href="category-4.html">Beauty</a></li>
                                <li><a href="category.html">Kitchen</a></li>
                                <li><a href="category-2.html">Home</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <!--Logo and tagline -->
                    <div class="header-logo text-center">
                        <h1 class="font-secondary"><a href="index.html">Athena</a></h1>
                        <p class="tagline font-primary">Creative Magazine</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-4 text-right ">
                    <ul class="header-social-network d-none d-md-inline-block list-inline">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="athena-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="athena-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="athena-instagram"></i></a></li>
                    </ul>
                    <button class="search-icon d-inline">
                        <i class="athena-search mr-5"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!--Start search form-->
    <div class="main-search-form">
        <div class="container">
            <div class="pt-150 pb-50 ">
                <div class="row mb-20">
                    <div class="col-12 align-self-center main-search-form-cover m-auto">
                        <button class="search-icon search-icon-close -md-inline">
                            <i class="athena-cancel mr-5"></i>
                        </button>
                        <p><span class="search-text-bg font-secondary">Search</span></p>
                        <form action="#" class="search-header">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Enter your keywords and hit Enter">
                                <div class="input-group-append">
                                    <button class="btn btn-search bg-white" type="submit">
                                        <i class="athena-search mr-5"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="search-suggested mt-80">
                            <h5 class="suggested font-heading mb-20"> <strong>Suggested:</strong></h5>
                            <ul class="list-inline d-inline-block">
                                <li class="list-inline-item"><a href="category.html">Events</a></li>
                                <li class="list-inline-item"><a href="category-2.html">Shop</a></li>
                                <li class="list-inline-item"><a href="category-3.html">Tech</a></li>
                                <li class="list-inline-item"><a href="category-4.html">Fashion</a></li>
                                <li class="list-inline-item"><a href="category.html">Books</a></li>
                                <li class="list-inline-item"><a href="category-2.html">Travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content -->
    <main class="main-content bg-white">
        <!--archive header-->
        <div class="archive-header pt-50 pb-50 bg-3 mb-50">
            <div class="container">
                <div class="widget-header-1 font-primary mb-30">
                    <span class="widget-subtitle position-relative text-primary"><span class="divider-separator"></span>Category</span>
                    <h2 class="widget-title mt-5 mb-30">Inspiration<sup>125 posts</sup></h2>
                </div>
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Inspiration
                </div>
            </div>
        </div>
        <div class="container mb-50">
            <div class="sidebar-widget post-module-1">
                <div class="row mb-50">
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-1.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Travel</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">The World's Most Refined Mountaineering Equipment </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-2.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Ideas</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">Carrie Underwood Shows Off Her Abs in Bikini Selfie: 'Is It Summer Yet?'</a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-3.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Home Decor</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">These Merrell Sandals Are the Most Comfortable Slides I’ve Ever Worn </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-4.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Foody</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">This Oprah-Approved Brand Is Offering Up to 40% Off Its Comfy Shoes for 4th of July </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-5.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Decor</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">The Boody Bra Is So Comfortable, Even Bra Haters Can’t Stop Raving About It </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-6.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Healthy</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">Jennifer Aniston Called These Leggings a 'Fitness Staple'</a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-7.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Fashion</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">The Unexpected Place You Can Score a Ton of Comfy Shoes for Up to 75% Off Right Now </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-8.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Blog</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">These Aerie Bike Shorts Made Me Break Up With Leggings for Summer </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-9.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Inspiration</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">The Sneakers Emily Ratajkowski Wears on Repeat Just Got Even More Affordable </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-10.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Landing</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">You Can Already Score Vionic Sandals on Sale Ahead of Memorial Day</a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-11.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Room</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">This Bralette Is So Comfy, I’m Never Going Back to Real Bras Again </a>
                        </h5>
                    </article>
                    <article class="col-lg-3 col-md-6 mb-50 wow animated fadeIn">
                        <figure class="mb-20">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-12.jpg" alt=""></a>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html">Tips</a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.html">This Sports Bra Is So Comfortable, I Own It in 5 Different Colors</a>
                        </h5>
                    </article>
                </div>
                <!--Pagination-->
                <div class="view-more text-center wow animated fadeIn">
                    <button class="btn btn-outline-primary border-radius-0 font-weight-thin">Load more posts</button>
                </div>
            </div>
        </div>
        <div class="sidebar-widget widget-instagram bg-white pt-50 wow animated fadeIn">
            <div class="widget-header-2 font-primary mb-50 text-center">
                <i class="athena-instagram mr-5"></i><span class="widget-subtitle position-relative text-primary">athena</span>
                <h3 class="widget-title mt-5 mb-0">Follow Me On Instagram </h3>
                <span class="font-small text-muted">Followed by: 256,215</span>
            </div>
            <ul class="alith-row alith-gap-0 overflow-hidden">
                <li class="alith-col alith-col-6">
                    <a target="_blank" href="#">
                        <img title="" alt="instar" src="assets/imgs/posts/thumb-9.jpg">
                    </a>
                </li>
                <li class="alith-col alith-col-6">
                    <a target="_blank" href="#">
                        <img title="" alt="instar" src="assets/imgs/posts/thumb-10.jpg">
                    </a>
                </li>
                <li class="alith-col alith-col-6">
                    <a target="_blank" href="#">
                        <img title="" alt="instar" src="assets/imgs/posts/thumb-11.jpg">
                    </a>
                </li>
                <li class="alith-col alith-col-6">
                    <a target="_blank" href="#">
                        <img title="" alt="instar" src="assets/imgs/posts/thumb-12.jpg">
                    </a>
                </li>
                <li class="alith-col alith-col-6">
                    <a target="_blank" href="#">
                        <img title="" alt="instar" src="assets/imgs/posts/thumb-13.jpg">
                    </a>
                </li>
                <li class="alith-col alith-col-6">
                    <a target="_blank" href="#">
                        <img title="" alt="instar" src="assets/imgs/posts/thumb-14.jpg">
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <!-- End Main content -->
    <!-- Footer Start-->
    <footer class="fixed-footer bg-dark text-white pt-100 pb-100 overflow-hidden">
        <div class="container-larger">
            <div class="row align-items-center wow animated fadeIn">
                <div class="col-lg-4 col-md-12 text-center  d-none d-md-flex">
                    <img class="d-inline-block float-lg-left mb-30 mr-30" src="assets/imgs/ads/ads-2.jpg" alt="ads2">
                    <div class="d-inline-block">
                        <div class="header-logo mb-20">
                            <h1 class="font-secondary"><a class="text-white" href="index.html">Athena</a></h1>
                            <p class="tagline font-primary">Creative Magazine</p>
                        </div>
                        <p class="site-des">123 Main Street <br>New York, NY 10001</p>
                        <div class="view-more text-center mt-30">
                            <button class="btn btn-outline-white border-radius-0 font-weight-thin">Subcrible</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col">
                            <h5 class="widget-title-muted mb-15">About</h5>
                            <ul class="mb-30 mr-30 text-white">
                                <li class="cat-item cat-item-2"><a class="text-white" href="category.html">Terms & Conditions</a></li>
                                <li class="cat-item cat-item-3"><a class="text-white" href="category.html">Help & Support Policy</a></li>
                                <li class="cat-item cat-item-4"><a class="text-white" href="category.html">Licensing Policy</a></li>
                                <li class="cat-item cat-item-5"><a class="text-white" href="category.html">Refund Policy</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5 class="widget-title-muted mb-15">News</h5>
                            <ul class="mb-30 mr-30 text-white">
                                <li class="cat-item cat-item-2"><a class="text-white" href="category.html">Mindfulness</a></li>
                                <li class="cat-item cat-item-3"><a class="text-white" href="category.html">Environment</a></li>
                                <li class="cat-item cat-item-4"><a class="text-white" href="category.html">Religion</a></li>
                                <li class="cat-item cat-item-5"><a class="text-white" href="category.html">Recipes</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5 class="widget-title-muted mb-15">Travel</h5>
                            <ul class="mb-30 mr-30 text-white">
                                <li class="cat-item cat-item-2"><a class="text-white" href="category.html">Destinations</a></li>
                                <li class="cat-item cat-item-3"><a class="text-white" href="category.html">Travel Tips</a></li>
                                <li class="cat-item cat-item-4"><a class="text-white" href="category.html">Hotels review</a></li>
                                <li class="cat-item cat-item-5"><a class="text-white" href="category.html">Air ticket</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <h5 class="widget-title-muted mb-15">Healthy</h5>
                            <ul class="mb-30 mr-30 text-white">
                                <li class="cat-item cat-item-2"><a class="text-white" href="category.html">Integrative Health</a></li>
                                <li class="cat-item cat-item-3"><a class="text-white" href="category.html">Mental Health</a></li>
                                <li class="cat-item cat-item-4"><a class="text-white" href="category.html">Health Food</a></li>
                                <li class="cat-item cat-item-5"><a class="text-white" href="category.html">Sleep Disorders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right text-center mt-30">
                <p class="font-medium mb-0"><span class="text-muted">© 2020, Athena Magazine | All rights reserved | Designed by </span><a href="https://alithemes.com" target="_blank" class="text-primary">AliThemes.com</a></p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/vendor/popper.min.js"></script>
    <script src="./assets/js/vendor/jquery.slicknav.js"></script>
    <script src="./assets/js/vendor/slick.min.js"></script>
    <script src="./assets/js/vendor/wow.min.js"></script>
    <script src="./assets/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="./assets/js/vendor/jquery.magnific-popup.js"></script>
    <script src="./assets/js/vendor/jquery.sticky.js"></script>
    <script src="./assets/js/vendor/perfect-scrollbar.js"></script>
    <script src="./assets/js/vendor/waypoints.min.js"></script>
    <script src="./assets/js/vendor/jquery.theia.sticky.js"></script>
    <script src="./assets/js/vendor/masonry.pkgd.min.js"></script>
    <script src="./assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <!-- Theme JS -->
    <script src="./assets/js/main.js"></script>
</body>

</html>