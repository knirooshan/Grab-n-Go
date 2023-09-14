<!--Products Slider-->
<section class="section product-slider pb-0">
    <div class="container container-1330">
        <div class="section-header">
            <h2>Top Offers</h2>
        </div>

        <div class="product-slider-4items gp15 arwOut5 hov-arrow circle-arrow grid-products pro-hover3">
        
        <?php 
        for ($i=0; $i < 8; $i++) { 
            echo '<div class="item col-item">';
            include('./templates/product-loop-item.php');
            echo '</div>';
        }
        ?>

        </div>

        <div class="view-collection text-center mt-4 mt-md-5 d-none">
            <a href="#" class="btn btn-secondary btn-lg">View Collection</a>
        </div>
    </div>
</section>
<!--End Products Slider-->