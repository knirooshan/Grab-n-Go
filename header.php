<html>

    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link href="./assests/header-style.css" rel="stylesheet">
        <link href="./assests/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    </head>

    <body>

    <header>
    <div class="container">
        <div class="row">
            <div class="col-2" style="width: 20%;">
                <!-- Site Logo -->
                <img src="./assests/images/site-logo.png" alt="Logo" class="site-logo">
            </div>
            <div class="col-4" style="width: 45%;">
                <!-- Search Box -->
                <div class="input-group">
                    <select class="form-select input-style span-font" style="width: 25%; border-right: none;">
                        <option value="">All Categories</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                        <!-- Add more categories as needed -->
                    </select>
                    <input type="text" class="form-control input-style" placeholder="Search Something..." style="width: 60%; border-left: none; border-right: none;">
                    <span class="input-group-text input-style span-font" style="border-left: none;">
                        <i class="fas fa-search input-style span-font"></i>
                    </span>
                </div>
            </div>
            <div class="col-2" style="width: 15%; display: flex; flex-direction: column; align-items: left; justify-content: center; gap: 0px;">
                <!-- Contact Number -->
                <span class="span-font">Inquiries and Support</span>
                <span class="span-font">+1234567890</span>
            </div>
            <div class="col-2" style="width: 20%; display: flex; gap: 40px;">
                <!-- Icon Group (User, Wishlist, Cart) -->
                <i class="fas fa-user" style="display: flex; align-items: center;"></i>
                <i class="fas fa-heart" style="display: flex; align-items: center;"></i>
                <span style="text-align: right; display: flex; align-items: center; font-size: 12px;"><i class="fas fa-shopping-cart" style="font-size: 16px;"></i>&nbsp &nbsp &nbsp &nbsp My Cart </br>LKR 2500</span>
            </div>
        </div>
    </div>