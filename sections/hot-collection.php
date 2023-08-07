<link href="./assests/css/product-slider.css" rel="stylesheet">

<div class="hc-slider-main">
    <div class="container">
        <div class="row">
            <div class="product-slider">
                <div class="row product-slider-header">
                    <!-- product Slider Heading and Link (Left side) -->
                    <div class="col-6 slider-up-left">
                        <h3>Hot Collection</h3>
                        <a href="#" class="product-offers" style="color: #ffc107;">All Collection ></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- product Slider (Second Row) -->
        <div class="row">
            <div class="collection-content-main">

                <?php
                    for ($x = 1; $x <= 4; $x++) {
                        echo '<div class="hc-single-slide" style="box-shadow: 0px 4px 46px 0px #0000001A; border-radius: 10px;">';
                        include('./templates/product-loop-item.php');
                        echo '</div>';
                    }
                ?>

            </div>
        </div>
    </div>
</div>