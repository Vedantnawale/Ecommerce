<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Media CSS -->
    <link rel="stylesheet" href="media.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4a399ad705.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="header">
        <a href=""><img src="img/logo.png" alt="logo"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <li title="LogOut_Button"> <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a></li> 
                <a href="#" id="cmark"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="feature">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="feature">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="feature">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="feature">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="feature">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="feature">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Feautered Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/f1.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f2.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f3.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f4.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f5.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f6.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f7.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/f8.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n2.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n3.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n4.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n5.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n6.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n7.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/n8.jpg" alt="products">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronout T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#" class="cart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <div class="items">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span><br>
            <button class="white">Learn More</button>
        </div>
        </div>
        <div class="banner-box banner-box2">
            <div class="items">
            <h4>Spring/Summer</h4>
            <h2>Upcoming Season</h2>
            <span>The best classic dress is on sale at cara</span><br>
            <button class="white">Collection</button>
        </div>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <div class="items">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
            </div>
        </div>
        <div class="banner-box banner-box2">
            <div class="items">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring/Summer 2023</h3>
            </div>
        </div>
        <div class="banner-box banner-box3">
            <div class="items">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email Address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="img/logo.png" alt="logo">
        <h4>Contact</h4>
        <p><strong>Address:</strong> 108 Rukhmini Nagar, Amravati</p>
        <p><strong>Phone:</strong> +21324920</p>
        <p><strong>Address:</strong> 10.00-17.00 Mon-Sat</p>
        <div class="follow">
            <h4>Follow Us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col">
        <h4>Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col col-1">
        <h4>Secured Pay</h4>
        <p>Secured Payement Gateways</p>
        <img src="img/pay/pay.png" alt="">
      </div>
      <div class="copyright">
        <p>@2023, Ecommerce Website by Vedant A. Nawale</p>
      </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>