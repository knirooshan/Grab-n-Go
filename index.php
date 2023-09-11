<?php include('header.php'); ?>

<main>
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="flex3">
                <div id="slideshow" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active slide-item" style="background-image: url('./assests/images/gng-slide-1.png');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 slide-content">
                        <div class="inner-content">
                            <h2>Discover New Amazing </br>Grocery Deals</h2>
                            <p>The most Healty organic </br>Food is save for health</p>
                            <button class="btn btn-primary">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 (Add more slides as needed) -->
        <div class="carousel-item slide-item" style="background-image: url('./assests/images/gng-slide-2.png');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 slide-content">
                        <div class="inner-content">
                            <h2>Discover New </br>Electronic Deals</h2>
                            <p>The latest electronic items </br>for afordable prices</p>
                            <button class="btn btn-primary">Shop Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more slides as needed -->

    </div>
    <ol class="carousel-indicators">
        <li data-bs-target="#slideshow" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#slideshow" data-bs-slide-to="1"></li>
        <!-- Add more navigation dots as needed -->
    </ol>
</div>
                </div>
                <div class="flex2">
                    <div class="hero-promo" style="background-image: url('./assests/images/hero-image.png');">
                        <div class="inner-content-hero">
                            <span class="banner-span">Big Sale</span>
                            <h2 class="banner-h2">Asus ROG Laptop</h2>
                            <button class="btn btn-primary banner-button">15% OFF</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('./sections/category-slider.php'); ?>
    <?php include('./sections/product-slider.php'); ?>
    <?php include('./sections/hot-offers.php'); ?>
    <?php include('./sections/hot-collection.php'); ?>
    <?php include('./sections/bottom-banners.php'); ?>
    <?php include('./sections/our-choice.php'); ?>

</main>

<?php include('footer.php'); ?>