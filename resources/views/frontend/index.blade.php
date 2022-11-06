<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GEN Z</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/frontend/css/style.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/slicknav.min.css" type="text/css">

</head>

<body>
    <!-- Start coding here -->
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">

                <div class="ht-right">
                    <a href="login.html" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value="yt" data-image="public/frontend/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">
                                English</option>
                            <option value="yt" data-image="public/frontend/img/flag-2.jpg" data-imagecss="flag yu" data-title="VietNam">
                                Việt Nam</option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href=""><i class="ti-facebook"></i></a>
                        <a href=""><i class="ti-twitter-alt"></i></a>
                        <a href=""><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html"><img style="width:1700px; height: 50px" src="public/frontend/img/logo-1.png"
                                    height="25" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="Nhập sản phẩm bạn muốn tìm">
                                <button type="button"> <i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"> <img src="public/frontend/img/products/polo.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>255.000₫ x 1</p>
                                                            <h6>Áo polo nam</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-trash"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"> <img src="public/frontend/img/products/man-3.jpg" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>190.000₫ x 1</p>
                                                            <h6>Áo khoác kaki</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-trash"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>455.000₫</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="shopping-cart.blade.php" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="check-out.blade.php" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>SHOPS</span>
                        <ul class="depart-hover">
                            <li><a href="#">TOPS</a></li>
                            <li><a href="#">BOTTOMS</a></li>
                            <li><a href="#">ACCESSORIES</a></li>
                            <li><a href="#">BAGS</a></li>
                            <li><a href="#">RESTOCKS</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="index.html">HOME</a></li>
                        <li><a href="shop.html">SALE</a></li>
                        <li><a href="product.html">NEWS</a></li>
                        <li><a href="blog.html">BLOG</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                        <li><a href="">ABOUT</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap">

                </div>
            </div>
        </div>

    </header>
    <!-- Header Section End -->

    <!-- Hero section begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="public/frontend/img/out_banner.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Clothings</span>
                            <h1>Black friday</h1>
                            <p>Loren ipsum dolor sit amet, consectertur adipisicing elit, sed do eiusmod</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg" data-setbg="public/frontend/img/genz1.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <span>Clothings</span>
                                <h1>Tháng 11 rực rỡ</h1>

                                <a href="#" class="primary-btn">Shop Now</a>
                            </div>
                        </div>
                        <div class="off-card">
                            <h2>Sale <span>20%</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-items owl-carousel">
                <div class="single-hero-items set-bg" data-setbg="public/frontend/img/genz2.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <a href="#" class="primary-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Banner section begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/frontend/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/frontend/img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women's</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="public/frontend/img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid's</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Women banner section begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="public/frontend/img/products/women-large.jpg">
                        <h2>Best Seller</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li class="">HandBag</li>
                            <li class="">Shoes</li>
                            <li class="">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/vay.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="">
                                    <h5>Chân váy chữ A</h5>
                                </a>
                                <div class="product-price">
                                    250.000₫
                                    <span>350.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/tay.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="">
                                    <h5>Quần tây tối giản</h5>
                                </a>
                                <div class="product-price">
                                    350.000₫
                                    <span>420.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/polo.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua Ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">

                                <a href="">
                                    <h5>Polo nam</h5>
                                </a>
                                <div class="product-price">
                                    255.000₫
                                    <span>300.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/hat-2.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">

                                <a href="">
                                    <h5>Mũ lưỡi trai GENZ</h5>
                                </a>
                                <div class="product-price">
                                    50.000₫
                                    <span>90.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/bag-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">

                                <a href="">
                                    <h5>Túi đeo chéo GENZ</h5>
                                </a>
                                <div class="product-price">
                                    120.000₫
                                    <span>200.000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--deal of the week section begin -->
    <section class="deal-of-week set-bg spad" data-setbg="public/frontend/img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Month</h2>
                    <p></p>
                    <div class="product-price">
                        299.000₫
                        <span>/ HandBag</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>30</span>
                        <span>Days</span>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <span>Hours</span>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <span>Mins</span>
                    </div>
                    <div class="cd-item">
                        <span>30</span>
                        <span>Secs</span>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop</a>
            </div>
        </div>

    </section>
    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li class="">HandBag</li>
                            <li class="">Shoes</li>
                            <li class="">Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/urban.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="">
                                    <h5>Urban black jacket</h5>
                                </a>
                                <div class="product-price">
                                    400.000₫
                                    <span>450.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/outdoor.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <a href="">
                                    <h5>Outdoor Sherpa Half-Zip Sweater</h5>
                                </a>
                                <div class="product-price">
                                    425.000₫
                                    <span>450.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/hat-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua Ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">

                                <a href="">
                                    <h5>Mũ bucket GENZ</h5>
                                </a>
                                <div class="product-price">
                                    99.000₫
                                    <span>120.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/freitag.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">

                                <a href="">
                                    <h5>Selected brown viola trousers</h5>
                                </a>
                                <div class="product-price">
                                    270.000₫
                                    <span>350.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="public/frontend/img/products/bag-1.jpg" alt="">
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href=""> <i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"> <a href="product.html">Mua ngay</a></li>
                                    <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">

                                <a href="">
                                    <h5>Túi đeo chéo GENZ</h5>
                                </a>
                                <div class="product-price">
                                    120.000₫
                                    <span>200.000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="public/frontend/img/products/men.jpg">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="public/frontend/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="public/frontend/img/logo.jpg" height="50" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>Quận 7 - TP.HCM</li>
                            <li>Phone: +84 66.77.88.999</li>
                            <li>Email: quanaogenz@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href=""></a>About us</li>
                            <li><a href=""></a>Checkout</li>
                            <li><a href=""></a>Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href=""></a>My Account</li>
                            <li><a href=""></a>Contact</li>
                            <li><a href=""></a>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright ©
                            <script>document.write(new Date().getFullYear());</script> Genz | All Rights Reserved. <i class="fa fa-heart-0" aria-hidden="true"></i>
                        </div>
                        <div class="payment-pic">
                            <img src="public/frontend/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Js Plugins -->
    <script src="public/frontend/js/jquery-3.3.1.min.js"></script>
                            <script src="public/frontend/js/bootstrap.min.js"></script>
                            <script src="public/frontend/js/jquery-ui.min.js"></script>
                            <script src="public/frontend/js/jquery.countdown.min.js"></script>
                            <script src="public/frontend/js/jquery.nice-select.min.js"></script>
                            <script src="public/frontend/js/jquery.zoom.min.js"></script>
                            <script src="public/frontend/js/jquery.dd.min.js"></script>
                            <script src="public/frontend/js/jquery.slicknav.js"></script>
                            <script src="public/frontend/js/owl.carousel.min.js"></script>
                            <script src="public/frontend/js/main.js"></script>
</body>

</html>
