<!-- Body Container -->
<div id="page-content">
    <!--Page Header-->
    <div class="page-header text-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-between align-items-center">
                    <div class="page-title">
                        <h1>Blog</h1>
                    </div>
                    <!--Breadcrumbs-->
                    <div class="breadcrumbs"><a href="" title="Back to the home page">Home</a><span
                            class="main-title fw-bold"><i class="icon anm anm-angle-right-l"></i>Blog</span></div>
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

            <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                <!--Toolbar-->
                <div class="toolbar toolbar-wrapper blog-toolbar">
                    <div class="row align-items-center">
                        <div
                            class="col-12 col-sm-6 col-md-6 col-lg-6 text-left filters-toolbar-item d-flex justify-content-center justify-content-sm-start">
                            <div class="search-form mb-3 mb-sm-0">
                                <form class="d-flex" action="#">
                                    <input class="search-input" type="text" placeholder="Search Posts...">
                                    <button type="submit" class="search-btn"><i
                                            class="icon anm anm-search-l"></i></button>
                                </form>
                            </div>
                        </div>
                        <div
                            class="col-12 col-sm-6 col-md-6 col-lg-6 text-right filters-toolbar-item d-flex justify-content-between justify-content-sm-end">
                            <div class="filters-item d-flex align-items-center">
                                <label for="ShowBy" class="mb-0 me-2">Show:</label>
                                <select name="ShowBy" id="ShowBy" class="filters-toolbar-sort">
                                    <option value="title-ascending" selected="selected">10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="filters-item d-flex align-items-center ms-3">
                                <label for="SortBy" class="mb-0 me-2">Sort:</label>
                                <select name="SortBy" id="SortBy" class="filters-toolbar-sort">
                                    <option value="title-ascending" selected="selected">Featured</option>
                                    <option>Newest</option>
                                    <option>Most comments</option>
                                    <option>Release Date</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Toolbar-->

                <!--Blog Grid-->
                <div class="blog-grid-view">
                    <div class="row col-row row-cols-lg-2 row-cols-sm-2 row-cols-1">
                        <?php 
                            for ($i=0; $i < 10; $i++) { 
                                include('./templates/blog-loop-item.php');
                            }
                        ?>
                    </div>

                    <!-- Pagination -->
                    <nav class="clearfix pagination-bottom">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#"><i
                                        class="icon anm anm-angle-left-l"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="icon anm anm-angle-right-l"></i></a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                </div>
                <!--End Blog Grid-->
            </div>
        </div>
    </div>
    <!--End Main Content-->
</div>
<!-- End Body Container -->