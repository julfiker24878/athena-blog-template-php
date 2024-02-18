<?php 

require 'header.php'; 
require 'db.php'; 

$id = $_GET['id'];

$select_blogs = "SELECT * FROM blogs WHERE id=$id ";
$select_blogs_query = mysqli_query($db_connect, $select_blogs);
$assoc_blog = mysqli_fetch_assoc($select_blogs_query);

?>
    <!-- Start Main content -->
    <main class="main-content bg-white">
        <div class="container single-content">
            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    <?= $assoc_blog['title']; ?>
                </h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <a class="author-avatar" href="#"><img class="img-circle" src="option_blog/uploaded/<?= $assoc_blog['blog_image']; ?>" alt=""></a>
                                By <a href="author.html"><span class="author-name font-weight-bold">Barbara Cartland</span></a>
                            </p>
                            <span class="mr-10">Updated 15 April 2020</span>
                            <span class="has-dot"> 8 mins read</span>
                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="athena-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="athena-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="athena-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end single header-->
            <figure class="image mb-30 m-auto text-center">
                <img src="option_blog/uploaded/<?= $assoc_blog['blog_image']; ?>" alt="post-title" />
                <div class="post-meta font-primary text-uppercase rotate-90 top-left">
                    <span>Image credit: Pexel.com</span>
                </div>
            </figure>
            <!--figure-->
            <article class="entry-wraper mb-50">
                <div class="excerpt mb-30">
                    <p>Graeci docendi pro id. Quo aperiri menandri iracundia at, id ius paulo luptatum mediocrem. Impetus salutatus assentior eu pri. Cum ne nobis elaboraret voluptatibus, id mea brute debet.</p>
                </div>
                <div class="entry-main-content dropcap wow fadeIn animated">
                    <p>Pericula partiendo definitiones te qui, eos no velit delenit scriptorem. Ut sed tale scripta temporibus, debet evertitur ei eam, no eum porro salutandi. Perfecto appellantur nam ut. Mei ex ubique vocibus. Ex dicat timeam numquam duo.</p>
                    <hr class="wp-block-separator is-style-dots">
                    <p><?= $assoc_blog['des']; ?></p>
                    <figure class="wp-block-gallery columns-3 wp-block-image">
                        <ul class="blocks-gallery-grid">
                            <li class="blocks-gallery-item"><a href="#"><img src="assets/imgs/posts/img-17.jpg" alt=""></a></li>
                            <li class="blocks-gallery-item"><a href="#"><img src="assets/imgs/posts/img-19.jpg" alt=""></a></li>
                            <li class="blocks-gallery-item"><a href="#"><img src="assets/imgs/posts/img-14.jpg" alt=""></a></li>
                        </ul>
                        <figcaption> <i class="ti-credit-card mr-5"></i>Image credit: Pexel.com </figcaption>
                    </figure>
                    <hr class="section-divider">
                    <p>Yet more some certainly yet alas abandonedly whispered <a href="#">intriguingly</a><sup><a href="#">[2]</a></sup> well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a href="#">however</a> hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                    <!--Begin Subcrible-->
                    <div class="border bg-lighter mb-30 p-30 wow fadeIn animated">
                        <div class="row justify-content-between">
                            <div class="col-md-5 mb-2 mb-md-0">
                                <h5 class="font-weight-bold secondfont mb-30 mt-0">Become a member</h5>
                                <p class="font-small">Get the latest news right in your inbox. We never spam!</p>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Enter your e-mail address">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <button type="submit" class="btn btn-info border">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Subcrible-->
                    <h2>What I'm Reading</h2>
                    <p>Oratio facete posidonium id vis, rationibus reformidans eam ad, et minim cetero eam. Constituto ullamcorper concludaturque at cum, qui in offendit oporteat. Eam ut melius diceret, sumo noluisse splendide vim ei. No iusto interpretaris eum, illud aeterno sea et. Cum mediocrem consequuntur an, sed ne odio quaeque facilis, ad mei convenire suavitate voluptatibus. Euismod disputando interpretaris at eum, vix viderer electram an, sed ut persius assueverit.</p>
                    <blockquote>
                        <p>Numquam facilisi volutpat ius ne, te error periculis aliquando mel. Ut usu quaeque lucilius, utamur virtute nostrum ea his, pro te maiorum luptatum consequuntur. Usu integre laoreet te, eos epicuri petentium philosophia et.</p>
                    </blockquote>
                    <p>Id partem complectitur vim. Est id iisque fabulas epicuri, eam lorem libris delicatissimi cu. Nam ne quot velit luptatum. Te sit virtute conceptam, et pro utamur probatus nominati. Vix inimicus reprehendunt et, dicat euripidis has at. Graeco nostrum pertinax id quo, ad per decore labitur. Quem eripuit iudicabit ea vis, dico nullam eruditi te vis.</p>
                    <h2>The Walkers Guide to Outdoor</h2>
                    <p>Oratio ubique id ius, usu ne justo philosophia, mel no deleniti senserit ullamcorper. Mei ei commune explicari concludaturque. Eu debet tempor sea. At consulatu quaerendum sit, viris lobortis eum id.</p>
                    <figure class="wp-block-image alignwide">
                        <img src="assets/imgs/posts/img-24.jpg">
                        <figcaption>Eu brute facer nihil nec, laoreet placerat definitiones eos no</figcaption>
                    </figure>
                    <p>Eum eleifend philosophia ex. Te duis luptatum ocurreret est, invidunt mnesarchum moderatius ut pri. Cu probo lucilius imperdiet nec, brute aliquid instructior et est, eu aliquid referrentur philosophia est. Dicam adversarium est et. Suas iusto voluptatibus ius no, placerat mandamus his te.</p>
                    <h5>Food For Free</h5>
                    <p>Summo ceteros percipitur no eum, labore eirmod fuisset nec an. Modus qualisque in pri, zril labore persecuti sed et. Eam ei vidisse corpora, cum ubique everti ad. Per eu partem causae, no vix solet timeam, regione quaeque dignissim eum et. Ut dolorum copiosae adipiscing duo, quo everti verear pertinacia cu, ne modus epicurei vix. An tibique prodesset efficiendi nec, saperet hendrerit repudiandae no nec.</p>
                    <hr class="section-divider">
                    <p>Nam at affert assueverit, impetus verterem pri ex, soluta semper cu est. Sea ex facer mucius vocent, tota putent id vim, ei harum salutatus sit. Cu vel justo summo lobortis, eu ceteros corrumpit instructior pri, sit te illud debet.</p>
                    <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                </div>
                <div class="single-social-share text-center border bg-lighter p-50 mt-50 mb-50 clearfix wow fadeIn animated">
                    <p>If you enjoyed reading this story, then we'd love it if you would <strong>share it!</strong></p>
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="athena-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="athena-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="athena-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="entry-bottom mb-30 wow fadeIn animated overflow-hidden">
                    <div class="tags float-left">
                        <span>Tags: </span>
                        <a href="category.html" rel="tag">Home Decor</a>
                        <a href="category.html" rel="tag">Travel tips</a>
                        <a href="category.html" rel="tag">Health</a>
                    </div>
                    <div class="float-right entry-meta meta-1 font-small color-grey mt-10">
                        <span class="hit-count mr-15">182 comments</span>
                        <span class="hit-count mr-15">268 likes</span>
                        <span class="hit-count">Rate: 9/10</span>
                    </div>
                </div>
                <!--author box-->
                <div class="author-bio p-30 mt-50 bg-white wow fadeIn animated">
                    <div class="author-image mb-30">
                        <a href="author.html"><img src="dashboard_assets/images/profile/profile.png" alt="" class="avatar"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="author.html" title="Posted by Barbara Cartland" rel="author">Azumi Brilanca</a></span></span>
                        </h4>
                        <div class="author-description text-muted">You should write because you love the shape of stories and sentences and the creation of different words on a page. </div>
                        <a href="author.html" class="author-bio-link mb-md-0 mb-3">View all posts (125)</a>
                        <div class="author-social">
                            <ul class="author-social-icons">
                                <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="ti-facebook"></i></a></li>
                                <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="ti-twitter-alt"></i></a></li>
                                <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="ti-pinterest"></i></a></li>
                                <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--More posts-->
                <div class="single-more-articles border">
                    <div class="widget-header-4 position-relative mb-30">
                        <h6 class="mt-5 mb-30 text-uppercase">Related posts</h6>
                        <button class="single-more-articles-close"><i class="athena-cancel"></i></button>
                    </div>
                    <article class="row align-items-center mb-30">
                        <figure class="col-sm-4 mb-0">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-4.jpg" alt=""></a>
                        </figure>
                        <div class="col-sm-8 pl-0">
                            <h6 class="post-title">
                                <a href="single.html">The World Caters to Average</a>
                            </h6>
                            <div class="post-meta mb-10 font-primary text-uppercase">
                                <span class="date">By <a class="text-primary" href="author.html">Elizabeth</a></span>
                            </div>
                        </div>
                    </article>
                    <article class="row align-items-center mb-10">
                        <figure class="col-sm-4 mb-0">
                            <a href="single.html"><img src="assets/imgs/posts/thumb-3.jpg" alt=""></a>
                        </figure>
                        <div class="col-sm-8 pl-0">
                            <h6 class="post-title">
                                <a href="single.html">The most haunted spot in every state</a>
                            </h6>
                            <div class="post-meta mb-10 font-primary text-uppercase">
                                <span class="date">By <a class="text-primary" href="author.html">Brona</a></span>
                            </div>
                        </div>
                    </article>
                </div>
                <!--Comments-->
                <div class="comments-area">
                    <div class="widget-header-2 position-relative mb-30">
                        <h2 class="mt-5 mb-30">Comments</h2>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-4.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Rosie</a>
                                            </h5>
                                            <p class="date">6 minutes ago </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-2.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Agatha Christie</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Steven</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list wow fadeIn animated">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/imgs/authors/author-3.jpg" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Danielle Steel</a>
                                            </h5>
                                            <p class="date">December 4, 2020 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--comment form-->
                <div class="comment-form wow fadeIn animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Leave a Reply</h5>
                    </div>
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn button button-contactForm">Post Comment</button>
                        </div>
                    </form>
                </div>
            </article>
        </div>
        <!--container-->
<?php require 'footer.php'; ?>