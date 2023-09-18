<!--Sidebar-->
<div class="sidebar-tags sidebar-sticky clearfix">
    <!--Category-->
    <div class="sidebar-widget clearfix categories">
        <div class="widget-title">
            <h2>Category</h2>
        </div>
        <div class="widget-content">
            <ul class="sidebar-categories scrollspy clearfix">
                <li class="lvl-1 active"><a href="" class="site-nav lvl-1">Fashion <span class="count">(4)</span></a>
                </li>
                <li class="lvl-1"><a href="" class="site-nav lvl-1">Beauty <span class="count">(6)</span></a></li>
                <li class="lvl-1"><a href="" class="site-nav lvl-1">Accessories
                        <span class="count">(8)</span></a></li>
                <li class="lvl-1"><a href="" class="site-nav lvl-1">Trending <span class="count">(12)</span></a></li>
                <li class="lvl-1"><a href="" class="site-nav lvl-1">Life Style
                        <span class="count">(14)</span></a></li>
            </ul>
        </div>
    </div>
    <!--End Category-->
    <!--Archive-->
    <div class="sidebar-widget clearfix categories">
        <div class="widget-title">
            <h2>Archive</h2>
        </div>
        <div class="widget-content">
            <ul class="sidebar-categories scrollspy clearfix">
                <li class="lvl-1"><a href="" class="site-nav lvl-1">24 February
                        2023</a></li>
                <li class="lvl-1"><a href="" class="site-nav lvl-1">31 March
                        2023</a></li>
                <li class="lvl-1"><a href="" class="site-nav lvl-1">10 April
                        2023</a></li>
            </ul>
        </div>
    </div>
    <!--End Archive-->
    <!--Recent Posts-->
    <div class="sidebar-widget clearfix">
        <div class="widget-title">
            <h2>Recent Posts</h2>
        </div>
        <div class="widget-content">
            <div class="list list-sidebar-products">
                <?php 
                    for ($i=0; $i < 3; $i++) { 
                        include('./templates/recent-post-loop.php');
                    }
                ?>
            </div>
        </div>
    </div>
    <!--End Recent Posts-->
    <!--Popular Tags-->
    <div class="sidebar-widget clearfix tags-clouds">
        <div class="widget-title">
            <h2>Popular Tags</h2>
        </div>
        <div class="widget-content">
            <ul class="tags-list d-flex-wrap">
                <li class="item"><a class="rounded-3" href="">Fashion</a></li>
                <li class="item"><a class="rounded-3" href="">Shoes</a></li>
                <li class="item"><a class="rounded-3" href="">Beauty</a></li>
                <li class="item"><a class="rounded-3" href="">Accessories</a></li>
                <li class="item"><a class="rounded-3" href="">Trending</a></li>
            </ul>
        </div>
    </div>
    <!--End Popular Tags-->
</div>
<!--End Sidebar-->