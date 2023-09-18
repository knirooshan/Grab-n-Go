<!-- Body Container -->
<div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title">
                        <h1>Single Blog Page</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="index.html" title="Back to the home page">Home</a><span
                            class="title"><i class="icon anm anm-angle-right-l"></i>Blog</span><span
                            class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Single Blog Page</span>
                    </div>
                    <!--End Breadcrumbs-->
                </div>
            </div>
        </div>
    </div>
    <!--End Page Header-->

    <!--Main Content-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 blog-sidebar sidebar sidebar-bg">
                <!--Sidebar-->
                <?php include('./sections/blog-sidebar.php'); ?>
                <!--End Sidebar-->
            </div>

            <!-- Blog Content-->
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <div class="blog-article">
                    <div class="blog-img mb-3">
                        <img class="rounded-0 blur-up lazyload" data-src="assests/images/blog/post-img1-big.jpg"
                            src="assests/images/blog/post-img1-big.jpg" alt="New shop collection our shop" width="1200"
                            height="700" />
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <h2 class="h1">Sales with best collection</h2>
                        <ul class="publish-detail d-flex-wrap">
                            <li><i class="icon anm anm-user-al"></i> <span class="opacity-75 me-1">Posted by:</span>
                                Grab n Go</li>
                            <li><i class="icon anm anm-clock-r"></i> <time datetime="2023-01-02">Sep 22, 2023</time>
                            </li>
                            <li><i class="icon anm anm-comments-l"></i> <a href="#">2 Comments</a></li>
                            <li><i class="icon anm anm-tag-r"></i><span class="opacity-75">Posted in</span><a
                                    class="ms-1" href="#">Accessories</a>,<a class="ms-1" href="#">Fashion</a>,<a
                                    class="ms-1" href="#">Bags</a></li>
                        </ul>
                        <hr />
                        <div class="content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                                ipsum' will uncover many web sites still in their infancy.</p>
                            <blockquote>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look even slightly believable.</p>
                                <footer class="blockquote-footer m-0">Hema Alex</footer>
                            </blockquote>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero
                                are also reproduced in their exact original form, accompanied by English versions from
                                the 1914 translation by H. Rackham.</p>
                            <h3>Text Listing</h3>
                            <ul class="list-styled">
                                <li>Piece of classical Latin literature from 45 BC</li>
                                <li>Classical literature, discovered the undoubtable source.</li>
                                <li>Internet tend to repeat predefined chunks as necessary</li>
                            </ul>
                        </div>
                        <hr />
                        <div class="row blog-action d-flex-center justify-content-between">
                            <ul class="col-lg-6 tags-list d-flex-center">
                                <li class="item fw-600">Related Tags :</li>
                                <li class="item"><a class="text-link" href="">Fashion,</a></li>
                                <li class="item"><a class="text-link" href="">Shoes,</a></li>
                                <li class="item"><a class="text-link" href="">Accessories</a></li>
                            </ul>

                            <div class="col-lg-6 mt-2 mt-lg-0 social-sharing d-flex-center justify-content-lg-end">
                                <span class="sharing-lbl fw-600">Share :</span>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i
                                        class="icon anm anm-facebook-f"></i><span
                                        class="share-title d-none">Facebook</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i
                                        class="icon anm anm-twitter"></i><span
                                        class="share-title d-none">Twitter</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i
                                        class="icon anm anm-linkedin-in"></i><span
                                        class="share-title d-none">Instagram</span></a>
                                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Share by Email"><i
                                        class="icon anm anm-envelope-l"></i><span
                                        class="share-title d-none">Email</span></a>
                            </div>
                        </div>
                        <!-- Blog Nav -->
                        <div class="blog-nav d-flex-center justify-content-between mt-3">
                            <div class="nav-prev fs-14"><a href="#"><i
                                        class="align-middle me-2 icon anm anm-angle-left-r"></i><span
                                        class="align-middle">Previous post</span></a></div>
                            <div class="nav-next fs-14"><a href="#"><span class="align-middle">Next post</span><i
                                        class="align-middle ms-2 icon anm anm-angle-right-r"></i></a></div>
                        </div>
                        <!-- End Blog Nav -->
                        <hr />
                    </div>
                    <!-- End Blog Content -->
                </div>
            </div>
            <!--End Blog Content-->
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->