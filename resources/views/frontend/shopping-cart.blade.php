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
    <link rel="stylesheet" href="public/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="public/frontend/css/style.css" type="text/css">

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
                            <div class="input-group">s
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

    <div class="shopping cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Toal</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="cart-pic first-row"><img src="public/frontend/img/products/polo.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Áo Polo nam</h5>
                                    </td>
                                    <td class="p-price first-row">255.000₫</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">255.000₫</td>
                                    <td class="close-td first-row"> <i class="ti-trash"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic first-row"><img src="public/frontend/img/products/polo.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Áo Polo nam</h5>
                                    </td>
                                    <td class="p-price first-row">255.000₫</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">255.000₫</td>
                                    <td class="close-td first-row"> <i class="ti-trash"></i></td>
                                </tr>
                                <tr>
                                    <td class="cart-pic first-row"><img src="public/frontend/img/products/polo.jpg" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>Áo Polo nam</h5>
                                    </td>
                                    <td class="p-price first-row">255.000₫</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">255.000₫</td>
                                    <td class="close-td first-row"> <i class="ti-trash"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 offset-lg-6">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="quantity">quatity total<span>3</span></li>
                                <li class="subtotal">Subtotal<span>500.000₫</span></li>
                            </ul>

                            <a href="check-out.blade.php" class="proceed-btn">Oder</a>
                        </div>
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
                            <script>document.write(new Date().getFullYear());</script> Genz | All Rights Reserved. <i
                                class="fa fa-heart-0" aria-hidden="true"></i>
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
