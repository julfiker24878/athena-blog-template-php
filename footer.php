
		<!-- Follow Me On Instagram -->
        <div class="sidebar-widget widget-instagram bg-white pt-50">
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
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 text-center  d-none d-md-flex">
                    <img class="d-inline-block float-lg-left mb-30 mr-30" src="assets/imgs/ads/ads-2.jpg" alt="ads2">
                    <div class="d-inline-block">
                        <div class="header-logo mb-20">
                            <h1 class="font-secondary"><a class="text-white" href="index.html">Athena</a></h1>
                            <p class="tagline font-primary">Creative Magazine</p>
                        </div>
                        <p class="site-des">123 Main Street <br>New York, NY 10001</p>
                        <form action="option_subscribe/post_subscribe.php" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your email" name="email">
                            </div>
                            <div class="view-more text-center mt-30">
                                <button type="submit" class="btn btn-outline-white border-radius-0 font-weight-thin">Subcrible</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col">
                            <h5 class="widget-title-muted mb-15">Important Links</h5>
                            <ul class="mb-30 mr-30 text-white">
                                <?php foreach($important_links_query as $important_links){ ?>
                                <li class="cat-item cat-item-2"><a class="text-white" href="<?= $important_links['link']; ?>"><?= $important_links['title']; ?></a></li>
                                <?php } ?>
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
                <p class="font-medium mb-0"><span class="text-muted">© <?= $date; ?>, <?= $assoc_footer_credit['credit']; ?> </span> <a href="<?= $assoc_footer_credit['link']; ?>" target="_blank" class="text-primary"><?= $assoc_footer_credit['link_text']; ?></a></p>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		document.addEventListener("keyup", function (e) {
			var keyCode = e.keyCode ? e.keyCode : e.which;
					if (keyCode == 44) {
						stopPrntScr();
					}
				});
		function stopPrntScr() {

					var inpFld = document.createElement("input");
					inpFld.setAttribute("value", ".");
					inpFld.setAttribute("width", "0");
					inpFld.style.height = "0px";
					inpFld.style.width = "0px";
					inpFld.style.border = "0px";
					document.body.appendChild(inpFld);
					inpFld.select();
					document.execCommand("copy");
					inpFld.remove(inpFld);
				}
			   function AccessClipboardData() {
					try {
						window.clipboardData.setData('text', "Access   Restricted");
					} catch (err) {
					}
				}
				setInterval("AccessClipboardData()", 300);
	</script>
    <!-- Theme JS -->
    <script src="./assets/js/main.js"></script>
</body>

</html>


<!-- INVALID EMAIL -->
<?php if(isset($_SESSION['invalid'])){ ?>

<script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $_SESSION['invalid']; ?>'
        })
</script>

<?php } unset($_SESSION['invalid']); ?>

<!-- SUCCESS -->
<?php if(isset($_SESSION['success'])){ ?>

<script>
    Swal.fire(
        'Congratulations!',
        '<?= $_SESSION['success']; ?>',
        'success'
        )
</script>

<?php } unset($_SESSION['success']); ?>