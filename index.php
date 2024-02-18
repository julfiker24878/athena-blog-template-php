<?php require 'header.php'; ?>
    <!-- Start Main content -->
    <main class="main-content bg-lighter">
        <div class="container pt-30 mb-50">
            <div class="carausel-3-columns row">

            <?php foreach($blogs_four_query as $four_blog){ ?>
                <div class="col">
                    <article>
                        <figure class="mb-20">
                            <a href="single.php?id=<?= $four_blog['id']; ?>"><img src="option_blog/uploaded/<?= $four_blog['blog_image']; ?>" alt=""></a>
                        </figure>
                        <div class="post-meta mb-15 font-primary text-uppercase">
                            <span class="category"><a href="category-2.html"><?= $four_blog['category']; ?></a></span>
                        </div>
                        <h5 class="post-title">
                            <a href="single.php?id=<?= $four_blog['id']; ?>"><?= $four_blog['title']; ?></a>
                        </h5>
                    </article>
                </div>
            <?php } ?>

            </div>
        </div>
		<!--Most Popular -->
        <div class="container mb-50">
            <div class="sidebar-widget post-module-1">
                <div class="widget-header-1 font-primary mb-30">
                    <span class="widget-subtitle position-relative text-primary"><span class="divider-separator"></span>Trending</span>
                    <h2 class="widget-title mt-5 mb-30">Most Popular</h2>
                </div>
                <div class="row mb-50">

                <?php foreach($blogs_two_query as $asc_two_query){ ?>
                    <article class="col-md-6 mb-30">
                        <figure class="mb-20 position-relative">
                            <a href="single.php?id=<?= $asc_two_query['id']; ?>"><img src="option_blog/uploaded/<?= $asc_two_query['blog_image']; ?>" alt=""></a>
                            <div class="post-meta font-primary text-uppercase rotate-90 top-left">
                                <span><?= $asc_two_query['posted_at']; ?></span>
                            </div>
                        </figure>
                        <div class="post-meta mb-10 font-primary text-uppercase">
                            <span><a href="category.html"><?= $asc_two_query['category']; ?></a></span>
                        </div>
                        <h3 class="post-title">
                            <a href="single.php?id=<?= $asc_two_query['id']; ?>"><?= $asc_two_query['title']; ?></a>
                        </h3>
                    </article>
                <?php } ?>

                <?php foreach($blogs_three_query as $desc_three_query){ ?>
                    <article class="col-lg-4 col-md-6">
                        <figure class="mb-20">
                            <a href="single.php?id=<?= $desc_three_query['id']; ?>"><img src="option_blog/uploaded/<?= $desc_three_query['blog_image']; ?>" alt=""></a>
                            <div class="post-meta font-primary text-uppercase rotate-90 top-left">
                                <span><?= $desc_three_query['posted_at']; ?></span>
                            </div>
                        </figure>
                        <div class="post-meta mb-15 font-primary text-uppercase">
                            <span class="category"><a href="category.html"><?= $desc_three_query['category']; ?></a></span>
                        </div>
                        <h4 class="post-title">
                            <a href="single.php?id=<?= $desc_three_query['id']; ?>"><?= $desc_three_query['title']; ?></a>
                        </h4>
                    </article>
                <?php } ?>

                </div>
                <div class="view-more text-center">
                    <button class="btn btn-outline-primary border-radius-0 font-weight-thin">View all trending articles</button>
                </div>
            </div>
        </div>
		<!-- Interior & Home Decoration -->
        <div class="container mb-50">
            <div class="sidebar-widget post-slider-4">
                <div class="widget-header-1 font-primary mb-30">
                    <span class="widget-subtitle position-relative text-primary"><span class="divider-separator"></span>Lifestyle</span>
                    <h2 class="widget-title mt-5 mb-30">Interior & Home Decoration</h2>
                    <div class="carausel-4-columns-arrow"></div>
                </div>
                <div class="carausel-4-columns row">

                <?php foreach($blogs_asc_four_query as $asc_four_blog){ ?>
                    <div class="col">
                        <article>
                            <figure class="mb-20">
                                <a href="single.php?id=<?= $asc_four_blog['id']; ?>"><img src="option_blog/uploaded/<?= $asc_four_blog['blog_image']; ?>" alt=""></a>
                            </figure>
                            <div class="post-meta mb-10 font-primary text-uppercase">
                                <span><a href="category.html"><?= $asc_four_blog['category']; ?></a></span>
                            </div>
                            <h5 class="post-title">
                                <a href="single.php?id=<?= $asc_four_blog['id']; ?>"><?= $asc_four_blog['title']; ?></a>
                            </h5>
                        </article>
                    </div>
                <?php } ?>    

                </div>
            </div>
        </div>
		<!-- Explore interesting journeys -->
        <div class="container-larger mb-80">
            <div class="sidebar-widget post-module-2 p-80 bg-white has-border">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="widget-header-1 font-primary mb-50">
                            <span class="widget-subtitle position-relative text-primary"><span class="divider-separator"></span>Travel</span>
                            <h2 class="widget-title mt-5 mb-30">Explore interesting journeys</h2>
                        </div>
                    <?php foreach($select_health_post_two_query as $select_health_post_two){ ?>
                        <article class="row mb-30">
                            <div class="col-md-4">
                                <figure class="mb-0">
                                    <a href="single.php?id=<?= $select_health_post_two['id']; ?>"><img src="option_blog/uploaded/<?= $select_health_post_two['blog_image']; ?>" alt=""></a>
                                    <div class="post-meta font-primary text-uppercase rotate-90 top-left">
                                        <span><?= $select_health_post_two['posted_at']; ?></span>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-md-8 pl-0">
                                <h3 class="post-title">
                                    <a href="single.php?id=<?= $select_health_post_two['id']; ?>"><?= $select_health_post_two['title']; ?></a>
                                </h3>
                                <div class="post-meta mb-10 font-primary text-uppercase">
                                    <span class="category mr-15"><a href="category.html"><?= $select_health_post_two['category']; ?></a></span>
                                    <span class="date">By <a class="text-primary" href="author.html">Serena </a></span>
                                </div>
                                <div class="post-excerpt text-muted">
                                    <p class="mb-0">
                                        Tollit ceteros disputationi nam cu, purto volutpat in usu. Ludus accusata neglegentur per ea, pri ea commodo admodum invenire
                                    </p>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    </div>
                    <div class="col-lg-5">
                        <div class="view-more text-right mb-30">
                            <button class="btn btn-outline-primary border-radius-0 font-weight-thin d-none d-lg-inline-block">View more</button>
                        </div>
                    <?php foreach($select_lifestyle_post_three_query as $select_lifestyle_post_three){ ?>
                        <article class="row mb-30">
                            <figure class="col-md-4 mb-0">
                                <a href="single.php?id=<?= $select_lifestyle_post_three['id']; ?>"><img src="option_blog/uploaded/<?= $select_lifestyle_post_three['blog_image']; ?>" alt=""></a>
                            </figure>
                            <div class="col-md-8 pl-0">
                                <h4 class="post-title">
                                    <a href="single.php?id=<?= $select_lifestyle_post_three['id']; ?>"><?= $select_lifestyle_post_three['title']; ?></a>
                                </h4>
                                <div class="post-meta mb-10 font-primary text-uppercase">
                                    <span><a href="category.html"><?= $select_lifestyle_post_three['category']; ?></a></span>
                                </div>
                                <div class="post-excerpt text-muted">
                                    <p class="mb-0">
                                        Percipitur interpretaris ei duo. Ea vim probo probatus, summo dolor eleifend duo ea.
                                    </p>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
		<!-- Latest Stories -->
        <div class="container mb-50">
            <div class="sidebar-widget post-module-3">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="widget-header-1 font-primary mb-50">
                            <span class="widget-subtitle position-relative text-primary"><span class="divider-separator"></span>Recently</span>
                            <h2 class="widget-title mt-5 mb-30">Latest Stories</h2>
                        </div>

                    <?php foreach($blogs_query as $blogs){ ?>
                        <article class="row mb-30">
                            <div class="col-md-4">
                                <figure class="mb-0">
                                    <a href="single.php?id=<?= $blogs['id']; ?>"><img src="option_blog/uploaded/<?= $blogs['blog_image']; ?>" alt=""></a>
                                    <div class="post-meta font-primary text-uppercase rotate-90 top-left">
                                        <span><?= $blogs['posted_at']; ?></span>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-md-8 pl-0">
                                <h3 class="post-title">
                                    <a href="single.php?id=<?= $blogs['id']; ?>"><?= $blogs['title']; ?></a>
                                </h3>
                                <div class="post-meta mb-10 font-primary text-uppercase">
                                    <span class="category mr-15"><a href="category.html"><?= $blogs['category']; ?></a></span>
                                    <span class="date">By <a class="text-primary" href="author.html">Elizabeth</a></span>
                                </div>
                                <div class="post-excerpt text-muted">
                                    <p class="mb-0">
                                        Nec pertinax interesset no, timeam repudiandae at qui, mei dico simul no. Iisque eligendi ad duo, qui no porro dolore dissentias.
                                    </p>
                                </div>
                            </div>
                        </article>
                    <?php } ?>

                        <!--Pagination-->
                        <div class="pagination-area text-center mt-50 mb-30">
                            <ul class="pagination list-inline">
                                <li class="list-inline-item page-item prev"><a class="page-link" href="#"><i class="athena-left"></i></a></li>
                                <li class="list-inline-item page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="list-inline-item page-item"><a class="page-link" href="#">02</a></li>
                                <li class="list-inline-item page-item"><a class="page-link" href="#">03</a></li>
                                <li class="list-inline-item page-item"><a class="page-link" href="#">04</a></li>
                                <li class="list-inline-item page-item"><a class="page-link" href="#">05</a></li>
                                <li class="list-inline-item page-item next"><a class="page-link " href="#"><i class="athena-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget post-module-4 mb-50">
                            <div class="widget-header-2 font-primary mb-30">
                                <h2 class="widget-title mb-30">Editor's picked</h2>
                            </div>

                        <?php foreach($select_inspiration_blogs_query as $select_inspiration_blogs){ ?>
                            <article class="row align-items-center mb-30">
                                <figure class="col-md-4 mb-0">
                                    <a href="single.php?id=<?= $select_inspiration_blogs['id']; ?>"><img src="option_blog/uploaded/<?= $select_inspiration_blogs['blog_image']; ?>" alt=""></a>
                                </figure>
                                <div class="col-md-8 pl-0">
                                    <h5 class="post-title">
                                        <a href="single.php?id=<?= $select_inspiration_blogs['id']; ?>"><?= $select_inspiration_blogs['title']; ?></a>
                                    </h5>
                                    <div class="post-meta mb-10 font-primary text-uppercase">
                                        <span class="category mr-15"><a href="category.html"><?= $select_inspiration_blogs['category']; ?></a></span>
                                        <span class="date">By <a class="text-primary" href="author.html">Agnes</a></span>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>

                        </div>
                        <div class="sidebar-widget advertise-banner text-center">
                            <img src="assets/imgs/ads/ads.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require 'footer.php'; ?>