<!--Popular Categories-->
<section class="section collection-slider pop_cate">
    <div class="container container-1330">
        <div class="section-header">
            <h2>Browse Our Categories</h2>
        </div>

        <div class="collection-slider-5items gp15 arwOut5 hov-arrow circle-arrow">
            <?php 
                for ($i=0; $i < 10; $i++) { 
                    $bgcolor = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
                    include('./templates/category-loop-item.php');
                }
            ?>
        </div>
    </div>
</section>
<!--End Popular Categories-->