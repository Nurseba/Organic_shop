<?php
session_start();

if (isset($_GET['status'])) {

    switch ($_GET['status']) {

        case "success":
            echo "<script>alert('🎉 Account created successfully! Please login.');</script>";
            break;

        case "exists":
            echo "<script>alert('⚠️ This Email or Phone is already registered!');</script>";
            break;

        case "empty":
            echo "<script>alert('⚠️ Please fill in all fields.');</script>";
            break;

        case "invalid":
            echo "<script>alert('❌ Please enter a valid Email or Phone Number.');</script>";
            break;

        case "invalidname":
            echo "<script>alert('❌ Name must be at least 3 characters long.');</script>";
            break;

        case "weakpassword":
            echo "<script>alert('❌ Password must be at least 6 characters long.');</script>";
            break;

        case "error":
            echo "<script>alert('❌ Something went wrong! Please try again.');</script>";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organic Store</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Custom CSS (Relative Path with Versioning) -->
  <link rel="stylesheet" href="http://localhost/Organic_shop/style.css">

  <!-- aefd -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    <div class="container d-flex justify-content-between">
        <small>Free Delivery Over ৳1000</small>
        <small>Call: +880 1843133634</small>
    </div>
</div>


<!-- HEADER -->
<header class="header">
    <div class="container">
        <div class="row align-items-center">

            <!-- LOGO -->
            <div class="col-lg-3 col-md-3 col-12 mb-3 mb-lg-0">

             <a href="index.php" class="logo">
    <i class="fa-solid fa-leaf"></i>
    <span>Organic</span>  <span>Bazar</span>
</a>

            </div>

            <!-- SEARCH -->
            <div class="col-lg-6 col-md-6 col-12 mb-3 mb-lg-0">

                <form action="search.php" method="GET" class="search">

                    <select name="category">
                        <option>All</option>
                        <option>Fruits</option>
                        <option>Vegetables</option>
                    </select>

                    <input
                        type="text"
                        name="search"
                        placeholder="Search Organic Products">

                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>

                </form>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-3 col-md-3 col-12">

                <div class="header-icons">

                    <?php if(isset($_SESSION['user_id'])){ ?>

                        <a href="user_dashboard.php" class="header-link">
                            <?php echo $_SESSION['fullname']; ?>
                        </a>

                        <a href="logout.php" class="header-link">
                            Logout
                        </a>

                    <?php } else { ?>

                        <span onclick="openModal()" class="header-link">
                            Sign Up
                        </span>

                        <a href="login.php" class="header-link">
                            Login
                        </a>

                    <?php } ?>

                    <a href="wishlist.php" class="wishlist-icon" title="Wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>

                  <a href="cart.php" class="cart-icon">
    <i class="fa-solid fa-cart-shopping"></i>
</a>

                </div>

            </div>

        </div>
    </div>
</header>

<!-- NAV -->
<nav class="nav">
    <div class="container">
        <ul>
            <li>Home</li>
            <li>Shop</li>
            <li>Fruits</li>
            <li>Vegetables</li>
            <li>Offers</li>
            <li>Contact</li>
        </ul>
    </div>
</nav>


<!-- HERO -->
<section class="hero">
    <div class="hero-overlay">
        <div class="hero-content">

            <h1>
                Fresh Organic Food,<br>
                & Vegetables
            </h1>

            <p>
                Direct from farm to your home, fresh every day.
            </p>
<button class="shop-btn">Shop Now</button>

        </div>
    </div>
</section>

<!-- TOP CATEGORIES SECTION -->
<section class="top-categories-section py-5">
    <div class="container">
        
    
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <span class="badge-sub-title mb-2">MOST POPULAR</span>
                <h2 class="section-title">Top Categories</h2>
            </div>
            
         
            <div class="nav-arrows d-flex gap-2">
                <button class="arrow-btn" aria-label="Previous">&lt;</button>
                <button class="arrow-btn" aria-label="Next">&gt;</button>
            </div>
        </div>

        <div class="row g-4 justify-content-center text-center">

        
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="category-item">
                    <div class="img-circle">
                        <img src="https://images.unsplash.com/photo-1592924357228-91a4daadcfea?w=400&auto=format&fit=crop" alt="Vegetable Seeds">
                    </div>
                    <h5>Vegetable Seeds</h5>
                </a>
            </div>

           
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="category-item">
                    <div class="img-circle">
                        <img src="https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=400&auto=format&fit=crop" alt="Flower Seeds">
                    </div>
                    <h5>Flower Seeds</h5>
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="category-item">
                    <div class="img-circle">
                        <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=400&auto=format&fit=crop" alt="Grow Bags">
                    </div>
                    <h5>Grow Bags</h5>
                </a>
            </div>

        
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="category-item">
                    <div class="img-circle">
                        <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=400&auto=format&fit=crop" alt="Live Plants">
                    </div>
                    <h5>Live Plants</h5>
                </a>
            </div>

     
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="category-item">
                    <div class="img-circle">
                        <img src="https://images.unsplash.com/photo-1628352081506-83c43123ed6d?w=400&auto=format&fit=crop" alt="Soil & Fertilizer">
                    </div>
                    <h5>Soil & Fertilizer</h5>
                </a>
            </div>

     
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="category-item">
                    <div class="img-circle">
                        <img src="https://images.unsplash.com/photo-1617576683096-00fc8eecb3af?w=400&auto=format&fit=crop" alt="Tools">
                    </div>
                    <h5>Tools</h5>
                </a>
            </div>

        </div>

    </div>
</section>





<section class="products py-5">
    <div class="container">

        <h3 class="title mb-4">Featured Fruits</h3>

        <div class="row g-4">

            <!-- FRUIT 1 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1567306226416-28f0efdc88ce" alt="Apple">
                        <span class="badge">-20%</span>
                    </div>
                    <div class="content">
                        <h5>Fresh Apple</h5>
                        <div class="rating">⭐⭐⭐⭐☆ (4.5)</div>
                        <div class="price">৳120 <del>৳150</del></div>
                        <button onclick="addToCart('Fresh Apple', 120)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1571771894821-ce9b6c11b08e" alt="Banana">
                        <span class="badge">-10%</span>
                    </div>
                    <div class="content">
                        <h5>Banana</h5>
                        <div class="rating">⭐⭐⭐⭐⭐ (5.0)</div>
                        <div class="price">৳60 <del>৳70</del></div>
                        <button onclick="addToCart('Banana', 60)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- FRUIT 3 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1611080626919-7cf5a9dbab5b" alt="Orange">
                        <span class="badge">-15%</span>
                    </div>
                    <div class="content">
                        <h5>Orange</h5>
                        <div class="rating">⭐⭐⭐⭐☆ (4.2)</div>
                        <div class="price">৳150 <del>৳180</del></div>
                        <button onclick="addToCart('Orange', 150)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- FRUIT 4 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1553279768-865429fa0078" alt="Mango">
                        <span class="badge">-25%</span>
                    </div>
                    <div class="content">
                        <h5>Mango</h5>
                        <div class="rating">⭐⭐⭐⭐⭐ (5.0)</div>
                        <div class="price">৳180 <del>৳240</del></div>
                        <button onclick="addToCart('Mango', 180)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- FRUIT 5 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1550258987-190a2d41a8ba" alt="Pineapple">
                        <span class="badge">-12%</span>
                    </div>
                    <div class="content">
                        <h5>Pineapple</h5>
                        <div class="rating">⭐⭐⭐⭐☆ (4.6)</div>
                        <div class="price">৳88 <del>৳100</del></div>
                        <button onclick="addToCart('Pineapple', 88)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- FRUIT 6 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1559181567-c3190ca9959b" alt="Strawberry">
                        <span class="badge">-18%</span>
                    </div>
                    <div class="content">
                        <h5>Strawberry</h5>
                        <div class="rating">⭐⭐⭐⭐⭐ (4.9)</div>
                        <div class="price">৳220 <del>৳270</del></div>
                        <button onclick="addToCart('Strawberry', 220)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- FRUIT 7 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1537640538966-79f369143f8f" alt="Watermelon">
                        <span class="badge">-30%</span>
                    </div>
                    <div class="content">
                        <h5>Watermelon</h5>
                        <div class="rating">⭐⭐⭐⭐☆ (4.3)</div>
                        <div class="price">৳140 <del>৳200</del></div>
                        <button onclick="addToCart('Watermelon', 140)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- FRUIT 8 -->
    
<div class="col-lg-3 col-md-4 col-6">
    <div class="card product-card">
        <div class="img">
            <img src="https://images.unsplash.com/photo-1617112848923-cc2234396a8d?w=500&auto=format&fit=crop" alt="Fresh Papaya">
            <span class="badge">-10%</span>
        </div>
        <div class="content">
            <h5>Fresh Papaya</h5>
            <div class="rating">⭐⭐⭐⭐⭐ (4.7)</div>
            <div class="price">৳90 <del>৳110</del></div>
            <button onclick="addToCart('Fresh Papaya', 90)">Add to Cart</button>
        </div>
    </div>
</div>

        </div>

    </div>
</section>



<!-- VEGETABLES SECTION (8 Products with Working Images) -->
<section class="products py-5 bg-light">
    <div class="container">

        <h3 class="title mb-4">Fresh Vegetables</h3>

        <div class="row g-4">

            <!-- VEG 1: POTATO -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1518977676601-b53f82aba655?w=500&auto=format&fit=crop" alt="Potato">
                        <span class="badge">-15%</span>
                    </div>
                    <div class="content">
                        <h5>Fresh Potato</h5>
                        <div class="rating">⭐⭐⭐⭐☆ (4.3)</div>
                        <div class="price">৳42 <del>৳50</del></div>
                        <button onclick="addToCart('Fresh Potato', 42)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- VEG 2: TOMATO -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1592924357228-91a4daadcfea?w=500&auto=format&fit=crop" alt="Tomato">
                        <span class="badge">-20%</span>
                    </div>
                    <div class="content">
                        <h5>Red Tomato</h5>
                        <div class="rating">⭐⭐⭐⭐⭐ (4.8)</div>
                        <div class="price">৳64 <del>৳80</del></div>
                        <button onclick="addToCart('Red Tomato', 64)">Add to Cart</button>
                    </div>
                </div>
            </div>

         <!-- VEG 3: GARLIC -->
<div class="col-lg-3 col-md-4 col-6">
    <div class="card product-card">
        <div class="img">
            <img src="https://images.unsplash.com/photo-1540148426945-6cf22a6b2383?w=500&auto=format&fit=crop" alt="Fresh Garlic">
            <span class="badge">-10%</span>
        </div>
        <div class="content">
            <h5>Fresh Garlic</h5>
            <div class="rating">⭐⭐⭐⭐☆ (4.5)</div>
            <div class="price">৳120 <del>৳140</del></div>
            <button onclick="addToCart('Fresh Garlic', 120)">Add to Cart</button>
        </div>
    </div>
</div>
           

            <!-- VEG 4: BROCCOLI -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?w=500&auto=format&fit=crop" alt="Broccoli">
                        <span class="badge">-25%</span>
                    </div>
                    <div class="content">
                        <h5>Green Broccoli</h5>
                        <div class="rating">⭐⭐⭐⭐⭐ (5.0)</div>
                        <div class="price">৳90 <del>৳120</del></div>
                        <button onclick="addToCart('Green Broccoli', 90)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- VEG 5: ONION -->
            <div class="col-lg-3 col-md-4 col-6">
    <div class="card product-card">
        <div class="img">
            <img src="https://images.unsplash.com/photo-1508747703725-719777637510?w=500&auto=format&fit=crop" alt="Red Onion">
            <span class="badge">-10%</span>
        </div>
        <div class="content">
            <h5>Red Onion</h5>
            <div class="rating">⭐⭐⭐⭐☆ (4.2)</div>
            <div class="price">৳54 <del>৳60</del></div>
            <button onclick="addToCart('Red Onion', 54)">Add to Cart</button>
        </div>
    </div>
</div>

            <!-- VEG 6: CAPSICUM -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1563565375-f3fdfdbefa83?w=500&auto=format&fit=crop" alt="Capsicum">
                        <span class="badge">-15%</span>
                    </div>
                    <div class="content">
                        <h5>Capsicum</h5>
                        <div class="rating">⭐⭐⭐⭐⭐ (4.7)</div>
                        <div class="price">৳85 <del>৳100</del></div>
                        <button onclick="addToCart('Capsicum', 85)">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- VEG 7: CUCUMBER -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="card product-card">
                    <div class="img">
                        <img src="https://images.unsplash.com/photo-1604977042946-1eecc30f269e?w=500&auto=format&fit=crop" alt="Cucumber">
                        <span class="badge">-20%</span>
                    </div>
                    <div class="content">
                        <h5>Fresh Cucumber</h5>
                        <div class="rating">⭐⭐⭐⭐☆ (4.3)</div>
                        <div class="price">৳40 <del>৳50</del></div>
                        <button onclick="addToCart('Fresh Cucumber', 40)">Add to Cart</button>
                    </div>
                </div>
            </div>

           <!-- VEG 8: CAULIFLOWER -->
<div class="col-lg-3 col-md-4 col-6">
    <div class="card product-card">
        <div class="img">
            <img src="https://images.unsplash.com/photo-1568584711075-3d021a7c3ca3?w=500&auto=format&fit=crop" alt="Fresh Cauliflower">
            <span class="badge">-18%</span>
        </div>
        <div class="content">
            <h5>Fresh Cauliflower</h5>
            <div class="rating">⭐⭐⭐⭐☆ (4.5)</div>
            <div class="price">৳50 <del>৳65</del></div>
            <button onclick="addToCart('Fresh Cauliflower', 50)">Add to Cart</button>
        </div>
    </div>
</div>

        </div>

    </div>
</section>


<!-- BEST SELLING PRODUCTS SECTION -->
<section class="best-sellers-section py-5">
    <div class="container">
        
        <!-- Header Row -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">Best Selling Products</h2>
            
            <!-- Navigation Arrows -->
            <div class="nav-arrows d-flex gap-2">
                <button class="arrow-btn" aria-label="Previous">&lt;</button>
                <button class="arrow-btn" aria-label="Next">&gt;</button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="row g-4">

            <!-- Product 1: Tomato Seeds -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-card-dark">
                    <div class="card-img-box">
                        <span class="ribbon-best-seller">Best Seller</span>
                        <img src="https://images.unsplash.com/photo-1592924357228-91a4daadcfea?w=500&auto=format&fit=crop" alt="Tomato F1 Hybrid Seeds">
                    </div>
                    <div class="card-body-content">
                        <h5 class="product-title">Tomato F1 Hybrid Seeds - 50...</h5>
                        <div class="rating-box">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">4.16 | 101</span>
                        </div>
                        <div class="price-box">
                            <span class="curr-price">৳ 69.00</span>
                            <del class="old-price">৳ 99.00</del>
                            <span class="discount-badge">-30% Off</span>
                            <button class="wishlist-btn" aria-label="Wishlist">❤️</button>
                        </div>
                        <button class="btn-add-cart">
                            🛒 ADD TO CART
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2: Okra Seeds -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-card-dark">
                    <div class="card-img-box">
                        <img src="https://images.unsplash.com/photo-1628352081506-83c43123ed6d?w=500&auto=format&fit=crop" alt="Okra or Lady Finger Hybrid Seeds">
                    </div>
                    <div class="card-body-content">
                        <h5 class="product-title">Okra or Lady Finger Hybrid...</h5>
                        <div class="rating-box">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">4.39 | 71</span>
                        </div>
                        <div class="price-box">
                            <span class="curr-price">৳ 65.00</span>
                            <del class="old-price">৳ 99.00</del>
                            <span class="discount-badge">-34% Off</span>
                            <button class="wishlist-btn" aria-label="Wishlist">❤️</button>
                        </div>
                        <button class="btn-add-cart">
                            🛒 ADD TO CART
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3: HDPE Grow Bag -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-card-dark">
                    <div class="card-img-box">
                        <span class="ribbon-best-seller">Best Seller</span>
                        <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=500&auto=format&fit=crop" alt="OrganicBazar 12x12 HDPE">
                    </div>
                    <div class="card-body-content">
                        <h5 class="product-title">OrganicBazar 12×12 HDPE...</h5>
                        <div class="rating-box">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">4.71 | 309</span>
                        </div>
                        <div class="price-box">
                            <span class="curr-price">৳ 799.00</span>
                            <del class="old-price">৳ 1,990.00</del>
                            <span class="discount-badge">-60% Off</span>
                            <button class="wishlist-btn" aria-label="Wishlist">❤️</button>
                        </div>
                        <button class="btn-add-cart">
                            🛒 ADD TO CART
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4: Cucumber Seeds -->
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-card-dark">
                    <div class="card-img-box">
                        <img src="https://images.unsplash.com/photo-1604977042946-1eecc30f269e?w=500&auto=format&fit=crop" alt="Cucumber Seeds">
                    </div>
                    <div class="card-body-content">
                        <h5 class="product-title">Cucumber (Kheera) Hybrid...</h5>
                        <div class="rating-box">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">4.35 | 43</span>
                        </div>
                        <div class="price-box">
                            <span class="curr-price">৳ 69.00</span>
                            <del class="old-price">৳ 99.00</del>
                            <span class="discount-badge">-30% Off</span>
                            <button class="wishlist-btn" aria-label="Wishlist">❤️</button>
                        </div>
                        <button class="btn-add-cart">
                            🛒 ADD TO CART
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- NEW THIS SEASON SECTION -->
<section class="new-season-section py-5">
    <div class="container-fluid px-lg-5">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="section-title">New This Season</h2>
            <div class="slider-nav">
                <button class="nav-btn">&lt;</button>
                <button class="nav-btn">&gt;</button>
            </div>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjv3wH66wuZAreBqsZasIwbaibPHh8IsuL992gB_YR1g&s=10" alt="Lemon">
                 
                    </div>

                    <div class="product-info">
                        <h3 class="product-title">Kagzi Lime (Lemon) Fruit Plant</h3>

                        <div class="price-discount-row">
                            <span class="current-price">৳ 599.00</span>
                            <span class="original-price">৳ 658.00</span>
                            <span class="discount-badge">-33% Off</span>
                            <button class="wishlist-btn">❤️</button>
                        </div>

                        <button class="add-to-cart-btn">🛒 ADD TO CART</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzHKnQKz8VSpMCf8SMQ4spNSCUECKICmxDZ5btjJrh9g&s" alt="Fig">
                       
                    </div>

                    <div class="product-info">
                        <h3 class="product-title">Brazilian Pink Fig Fruit Plant</h3>

                        <div class="price-discount-row">
                            <span class="current-price">৳ 499.00</span>
                            <span class="original-price">৳ 799.00</span>
                            <span class="discount-badge">-38% Off</span>
                            <button class="wishlist-btn">❤️</button>
                        </div>

                        <button class="add-to-cart-btn">🛒 ADD TO CART</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoqEFhyFnoF5DYHXtHhUZ1MIUeLnZIYSOl9kp7ICbd_Q&s=10" alt="Guava">
                     
                    </div>

                    <div class="product-info">
                        <h3 class="product-title">Allahabad Safeda Guava Fruit Plant</h3>

                        <div class="price-discount-row">
                            <span class="current-price">৳ 599.00</span>
                            <span class="original-price">৳ 799.00</span>
                            <span class="discount-badge">-25% Off</span>
                            <button class="wishlist-btn">❤️</button>
                        </div>

                        <button class="add-to-cart-btn">🛒 ADD TO CART</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="product-card">
                    <div class="product-img-box">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXEQxhEd_k3VX-0Q43XiDoNnAPQ4K3iQedhcDYevJarg&s" alt="Mango">
                   
                    </div>

                    <div class="product-info">
                        <h3 class="product-title">Amrapali Mango Fruit </h3>

                        <div class="price-discount-row">
                            <span class="current-price">৳ 999.00</span>
                            <span class="original-price">৳ 1,499.00</span>
                            <span class="discount-badge">-33% Off</span>
                            <button class="wishlist-btn">❤️</button>
                        </div>

                        <button class="add-to-cart-btn">🛒 ADD TO CART</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- TESTIMONIALS SECTION -->
<section class="testimonials-section py-5">
    <div class="container text-center">
        
      <!-- SHOW MORE PRODUCTS SECTION -->
<div class="text-center my-4">
    <!-- Action Button -->
    <button class="btn-show-more" id="loadMoreBtn">SHOW MORE PRODUCTS</button>
</div>


<div class="container hidden-products-section" id="extraProducts" style="display: none;">
    <div class="row g-4">
        
        <!-- Extra Product 1: Neem Oil Spray -->
        <div class="col-lg-3 col-md-4 col-6">
            <div class="card product-card">
                <div class="img">
                    <img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?w=500&auto=format&fit=crop" alt="Pure Neem Oil Spray">
                    <span class="badge">-15%</span>
                </div>
                <div class="content">
                    <h5>Pure Neem Oil Spray</h5>
                    <div class="rating">⭐⭐⭐⭐⭐ (4.9)</div>
                    <div class="price">৳320 <del>৳380</del></div>
                    <button onclick="addToCart('Pure Neem Oil Spray', 320)">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Extra Product 2: Ceramic Planter Pot -->
        <div class="col-lg-3 col-md-4 col-6">
            <div class="card product-card">
                <div class="img">
                    <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=500&auto=format&fit=crop" alt="Ceramic Flower Pot">
                    <span class="badge">-20%</span>
                </div>
                <div class="content">
                    <h5>Ceramic Flower Pot</h5>
                    <div class="rating">⭐⭐⭐⭐☆ (4.7)</div>
                    <div class="price">৳550 <del>৳690</del></div>
                    <button onclick="addToCart('Ceramic Flower Pot', 550)">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Extra Product 3: Coco Peat Block -->
        <div class="col-lg-3 col-md-4 col-6">
            <div class="card product-card">
                <div class="img">
                    <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=500&auto=format&fit=crop" alt="Organic Coco Peat Block">
                    <span class="badge">-10%</span>
                </div>
                <div class="content">
                    <h5>Coco Peat Block 5KG</h5>
                    <div class="rating">⭐⭐⭐⭐⭐ (5.0)</div>
                    <div class="price">৳290 <del>৳320</del></div>
                    <button onclick="addToCart('Coco Peat Block 5KG', 290)">Add to Cart</button>
                </div>
            </div>
        </div>

        <!-- Extra Product 4: Water Spray Pump -->
 <!-- Product 4: Pruning Cutter -->
<div class="col-lg-3 col-md-4 col-6">
    <div class="card product-card">
        <div class="img">
            <img src="https://images.unsplash.com/photo-1617576683096-00fc8eecb3af?w=500&auto=format&fit=crop" alt="Pruning Cutter">
            <span class="badge">-10%</span>
        </div>
        <div class="content">
            <h5>Pruning Cutter</h5>
            <div class="rating">⭐⭐⭐⭐☆ (4.6)</div>
            <div class="price">৳270 <del>৳300</del></div>
            <button onclick="addToCart('Pruning Cutter', 270)">Add to Cart</button>
        </div>
    </div>
</div>

    </div>
</div>
        <!-- Section Badge & Heading -->
        <div class="mb-4">
            <span class="testimonial-badge">TESTIMONIALS</span>
            <h2 class="section-heading mt-3">Rated 4.9★ by 10,000+ Happy Customers</h2>
        </div>

        <!-- Review Cards Container -->
        <div class="testimonial-slider">
            
            <!-- Slide 1 -->
            <div class="testimonial-slide active">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="user-avatar">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&auto=format&fit=crop" alt="User">
                            </div>
                            <div class="stars mb-2">★★★★★</div>
                            <div class="user-name">Mr. Kamlesh Kulhar <span class="verified-badge">Verified</span></div>
                            <p class="review-text">"OrganicBazar has transformed my terrace into a green paradise!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="user-avatar">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=200&auto=format&fit=crop" alt="User">
                            </div>
                            <div class="stars mb-2">★★★★★</div>
                            <div class="user-name">Pankaj Pandit <span class="verified-badge">Verified</span></div>
                            <p class="review-text">"A year into gardening, and OrganicBazar's seeds never fail."</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="user-avatar">
                                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=200&auto=format&fit=crop" alt="User">
                            </div>
                            <div class="stars mb-2">★★★★★</div>
                            <div class="user-name">Dr. Priyanka Singhal <span class="verified-badge">Verified</span></div>
                            <p class="review-text">"OrganicBazar provides the best quality soil additives and pots."</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="testimonial-slide">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="user-avatar">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=200&auto=format&fit=crop" alt="User">
                            </div>
                            <div class="stars mb-2">★★★★★</div>
                            <div class="user-name">Ananya Roy <span class="verified-badge">Verified</span></div>
                            <p class="review-text">"Very fast delivery and original organic fertilizers!"</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="user-avatar">
                                <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=200&auto=format&fit=crop" alt="User">
                            </div>
                            <div class="stars mb-2">★★★★★</div>
                            <div class="user-name">Rahul Sharma <span class="verified-badge">Verified</span></div>
                            <p class="review-text">"The grow bags are durable and perfect for roof gardening."</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-card">
                            <div class="user-avatar">
                                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=200&auto=format&fit=crop" alt="User">
                            </div>
                            <div class="stars mb-2">★★★★★</div>
                            <div class="user-name">Srabanti Das <span class="verified-badge">Verified</span></div>
                            <p class="review-text">"Great customer support and high germination rate of seeds."</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Carousel Controls -->
        <div class="carousel-pagination mt-4">
            <button class="nav-arrow" id="prevBtn">&lt;</button>
            <span class="dot active" onclick="goToSlide(0)"></span>
            <span class="dot" onclick="goToSlide(1)"></span>
            <button class="nav-arrow" id="nextBtn">&gt;</button>
        </div>

    </div>
</section>


<section class="organic-contact-section">
  <div class="contact-container">
    
    <!-- Left Side: Direct Info & Quick Support -->
    <div class="contact-info">
      <span class="sub-heading">Get In Touch</span>
      <h2>We’d Love to Hear From You</h2>
      <p>Have questions about our organic products or your order? Reach out to us anytime!</p>
      
      <div class="info-items">
        <div class="info-item">
          <div class="icon">📍</div>
          <div>
            <h4>Visit Our Farm Store</h4>
            <p>House 12, Road 5, Dhanmondi, Dhaka</p>
          </div>
        </div>

        <div class="info-item">
          <div class="icon">📞</div>
          <div>
            <h4>Call Us Directly</h4>
            <p>+880 1843133634 (10 AM - 8 PM)</p>
          </div>
        </div>

        <div class="info-item">
          <div class="icon">💬</div>
          <div>
            <h4>Instant Chat</h4>
            <a href="https://wa.me/8801700000000?text=Hello!%20I%20have%20a%20question%20about%20your%20products." target="_blank" class="chat-btn" >Start WhatsApp Chat</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side: Contact Form -->
    <div class="contact-form-card">
      <h3>Send Us a Message</h3>
      <form action="#" method="POST">
        <div class="form-group">
          <label>Your Name</label>
          <input type="text" placeholder="Enter your full name" required>
        </div>
        
        <div class="form-group">
          <label>Email Address / Phone</label>
          <input type="text" placeholder="Enter your email or phone" required>
        </div>

        <div class="form-group">
          <label>Message</label>
          <textarea rows="4" placeholder="How can we help you?" required></textarea>
        </div>

        <button type="submit" class="submit-btn">Send Message</button>
      </form>
    </div>

  </div>
</section>


<!-- ==========================================
     ORGANIC BAZAR PROMO BANNER
     ========================================== -->

<section class="organic-promo">

    <div class="promo-container">

        <!-- LEFT SIDE -->
        <div class="promo-left">

            <div class="promo-circle">

                <i class="fa-solid fa-leaf"></i>
                <i class="fa-solid fa-carrot"></i>

            </div>


            <div class="promo-text">

                <h2>Fresh Organic Food</h2>

                <h3>
                    Organic Bazar
                    <span>|</span>
                    Fresh & Healthy
                </h3>

                <p>
                    Fresh organic products delivered to your home
                    <strong>৳1000+</strong> orders
                </p>

            </div>

        </div>


        <!-- RIGHT SIDE -->
        <div class="promo-right">

            <!-- BKASH -->
            <div class="payment-box bkash-box">

                <img
                    src="data:image/png;base64,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"
                    alt="bKash"
                    class="payment-logo"
                >

                <div class="payment-text">

                    <small>Pay with</small>

                    <strong>bKash</strong>

                </div>

            </div>


            <!-- NAGAD -->
            <div class="payment-box nagad-box">

                <img
                    src="data:image/jpeg;base64,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"
                    alt="Nagad"
                    class="payment-logo"
                >

                <div class="payment-text">

                    <small>Pay with</small>

                    <strong>Nagad</strong>

                </div>

            </div>


            <!-- OFFER -->
            <div class="promo-offer">

                <span>GET 10% OFF</span>

                <b>ON YOUR FIRST ORDER</b>

                <i class="fa-solid fa-arrow-right"></i>

            </div>

        </div>

    </div>

</section>


    <!-- ==========================================
         FEATURES
         ========================================== -->

    <div class="features-section">

        <div class="features-container">


            <!-- EASY TO USE -->

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>

                <div>
                    <h4>Easy to Use</h4>

                    <p>
                        Simple and easy shopping
                        experience.
                    </p>
                </div>

            </div>


            <!-- EASY TO RETURN -->

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-rotate-left"></i>
                </div>

                <div>
                    <h4>Easy to Return</h4>

                    <p>
                        Easy return process for
                        eligible products.
                    </p>
                </div>

            </div>


            <!-- FAST DELIVERY -->

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>

                <div>
                    <h4>Fast Delivery</h4>

                    <p>
                        Fast delivery right to
                        your doorstep.
                    </p>
                </div>

            </div>


            <!-- SECURE PAYMENT -->

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>
                    <h4>Secure Payment</h4>

                    <p>
                        Safe payment with
                        bKash and Nagad.
                    </p>
                </div>

            </div>


        </div>

    </div>

</section>





<!-- ==========================================
     GARDENING CLUB / NEWSLETTER
     ========================================== -->
<!-- ==========================================
     NEWSLETTER SECTION
     ========================================== -->

<section class="newsletter-section">

    <div class="newsletter-container">

        <!-- LEFT TEXT -->
        <div class="newsletter-text">

            <h2>Join Our Gardening Club</h2>

            <p>
                Get the latest deals and offers right to your inbox.
            </p>

        </div>


        <!-- RIGHT EMAIL FORM -->
        <form class="newsletter-form">

            <input
                type="email"
                placeholder="Enter Your Email"
                required
            >

            <button type="submit">
                <i class="fa-solid fa-paper-plane"></i>
            </button>

        </form>

    </div>

</section>  


<!-- ==========================================
     FOOTER
     ========================================== -->

<footer class="main-footer">

    <div class="footer-container">


        <!-- COMPANY -->

        <div class="footer-company fs-3"> 

            <a href="index.php" class="footer-logo">

                <i class="fa-solid fa-leaf fs-2"></i>
                Organic<span>Bazar</span>

                <sup class="fs-6">®</sup>

            </a>
            <br><br>


            <p class="footer-description fs-6">

                OrganicBazar offers high-quality organic seeds,
                grow bags, and gardening tools—trusted by home
                gardeners across India. Grow naturally, grow better.

            </p>


            <!-- SOCIAL ICONS -->

            <div class="social-icons">

                <a href="#" class="facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
               
                 
                <a href="#" class="youtube">
                    <i class="fa-brands fa-youtube"></i>
                </a>

                <a href="#" class="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#" class="linkedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

            </div>


            <!-- TRUST -->

            <div class="trust-section mt-4 ">

                <ul><h4>Trust & Social Proof</h4></ul>

                <ul><h6><span>Happy Customers</span></h6></ul>

                <ul><h6><span>Verified Reviews</span></h6></ul>

            </div>

        </div>


        <!-- INFORMATION -->

        <div class="footer-column">

                <ul><h4>Information</h4></ul>
                
                <ul><h6><span>Careers</span></h6></ul>
                <ul><h6><span>Privacy Policy</span></h6></ul>
                <ul><h6><span>Terms & Conditions</span></h6></ul>
                <ul><h6><span>Shipping & Delivery</span></h6></ul>
                <ul><h6><span>Return & Refund Policy</span></h6></ul>
            

           

        </div>


        <!-- QUICK LINKS -->

        <div class="footer-column">

            <ul><h4>Quick Links</h4></ul>

            <ul><h6><span>Best Sellers</span></h6></ul>

            <ul><h6><span>New Arrivals</span></h6></ul>

            <ul><h6><span>Seasonal Picks</span></h6></ul>

        </div>


        <!-- CUSTOMER SUPPORT -->

        <div class="footer-column">

           <ul><h4><span>Customer Support</span> </h4></ul> 

           <ul><h6><span>Contact Us</span></h6></ul>

            <ul><h6><span>WhatsApp Us</span></h6></ul>

            <ul><h6><span>FAQs</span></h6></ul>

        </div>

    </div>


    <!-- BOTTOM LINE -->

    <div class="footer-bottom"></div>

</footer>


<!-- ==========================================
     APP DOWNLOAD + PAYMENT FOOTER
     ========================================== -->

<section class="app-footer-section">

    <!-- APP DOWNLOAD AREA -->
    <div class="app-download">

        <!-- GOOGLE PLAY -->
        <a href="#" class="app-store-btn play-store-btn">

            <i class="fa-brands fa-google-play"></i>

            <div>
                <small>GET IT ON</small>
                <strong>Google Play</strong>
            </div>

        </a>


        <!-- APP STORE -->
        <a href="#" class="app-store-btn apple-store-btn">

            <i class="fa-brands fa-apple"></i>

            <div>
                <small>Download on the</small>
                <strong>App Store</strong>
            </div>

        </a>


        <!-- DOWNLOAD OFFER -->
        <a href="#" class="download-offer">

            DOWNLOAD APP &amp; GET ৳50 OFF

            <span>↗</span>

        </a>

    </div>


    <!-- ==========================================
         PAYMENT / COPYRIGHT BAR
         ========================================== -->

    <div class="footer-payment-bar">


        <!-- PAYMENT LOGOS -->
        <div class="payment-methods">

            <span class="gpay-logo">G Pay</span>

            <span class="paytm-logo">Paytm</span>

            <span class="phonepe-logo">
                ● PhonePe
            </span>

            <span class="visa-logo">
                VISA
            </span>

            <span class="mastercard-logo">
                ●●
            </span>

            <span class="upi-logo">
                UPI
            </span>

            <span class="cash-logo">
                CASH
                <small>ON DELIVERY</small>
            </span>

        </div>


        <!-- COPYRIGHT -->
        <div class="copyright">

            © Organicbazar 2026

        </div>


        <!-- RIGHT LINKS -->
        <div class="footer-links">

            <a href="#">
                Privacy Policy
            </a>

            <span>•</span>

            <a href="#">
                Terms and Conditions
            </a>

        </div>

    </div>

</section>











<!-- Sign Up Modal Overlay -->
<div id="signupModal" class="modal-overlay">
  <div class="modal-card">
    <!-- Close Button -->
    <button class="close-btn" onclick="closeModal()">&times;</button>

    <!-- Header Section -->
    <div class="modal-header">
      <h2>Create Your Account</h2>
      <p>Join Organic Bazaar for fresh & healthy products!</p>
    </div>

   
    <!-- Sign Up Form Updated for Backend -->
<form class="signup-form" action="register.php" method="POST">
  
  <div class="form-group">
    <label>Full Name</label>
    <!-- name="fullname" যুক্ত করা হয়েছে -->
    <input type="text" name="fullname" placeholder="Enter your name" required>
  </div>

  <div class="form-group">
    <label>Email or Phone Number</label>
    <!-- name="contact_info" যুক্ত করা হয়েছে -->
    <input type="text" name="contact_info" placeholder="e.g. example@mail.com or 01700000000" required>
  </div>

  <div class="form-group">
    <label>Password</label>
    <!-- name="password" যুক্ত করা হয়েছে -->
    <input type="password" name="password" placeholder="Create a strong password" required>
  </div>

  <button type="submit" class="submit-btn">Create Account</button>
</form>

    <!-- Modal Footer -->
    <div class="modal-footer">
      <p>Already have an account? <a href="login.php">Login Here</a></p>
    </div>
  </div>
</div>








<script src="main.js"></script>




<script>
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const extraProducts = document.getElementById('extraProducts');

    loadMoreBtn.addEventListener('click', function() {
        if (extraProducts.style.display === 'none' || extraProducts.style.display === '') {
            extraProducts.style.display = 'block';
            loadMoreBtn.innerText = 'SHOW LESS PRODUCTS';
        } else {
            extraProducts.style.display = 'none';
            loadMoreBtn.innerText = 'SHOW MORE PRODUCTS';
        }
    });
</script>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.carousel-pagination .dot');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            dots[i].classList.remove('active');
        });

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentSlide = index;
    }

    function goToSlide(index) {
        showSlide(index);
    }

    nextBtn.addEventListener('click', () => {
        let nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    });

    prevBtn.addEventListener('click', () => {
        let prevIndex = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prevIndex);
    });
</script>




<!-- bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>