<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thế giới thể thao</title>
    <link rel="shortcut icon" href="http://cathtmlcss.net/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/uikit-3.0.3/css/uikit.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/jquery-ui-1.12.1/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <!--JS-->
    <script src="assets/jquery/jquery-3.3.1.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit.min.js"></script>
    <script src="assets/uikit-3.0.3/js/uikit-icons.min.js"></script>
    <script src="assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="assets/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/auxiliary-rater-0831401/rater.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="2428809380682169"
     theme_color="#24892d">
</div>
<section id="root" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
<header id="header" class="uk-visible@m">
    <div class="top_h uk-margin-small" uk-sticky="animation: uk-animation-slide-top; top: 200;">
        <div class="uk-container">
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar="">
                <div class="uk-navbar-left uk-width-1-1">
                    <a class="uk-navbar-item uk-logo bg-gray" href="."><img src="imgs/logo.png" alt=""></a>
                    <ul class="uk-navbar-nav uk-flex-1">
                        <li class="uk-parent">
                            <a href="catalog.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/ball.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">Bóng đá</div>
                                </div>
                            </a>
                            <div class="sub_menu_h1 uk-navbar-dropdown uk-margin-remove uk-navbar-dropdown-width-3 uk-background-center-right uk-background-norepeat" style="background-image: url(imgs/bg-drop-menu.png); min-height: 302px;">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="#">Dụng cụ sân bóng</a></li>
                                            <li><a href="#">Giày bóng đá</a></li>
                                            <li><a href="#">Phụ kiện bóng đá</a></li>
                                            <li><a href="#">Quả bóng đá</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="catalog.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/bongro.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">Bóng rổ</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="catalog.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/bongchuyen.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">Bóng chuyền</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="catalog.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/tennis.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">tennis</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="catalog.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/caulong.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">cầu lông</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="catalog.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/vothuat.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">võ thuật</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="news.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/khuyenmai.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">khuyến mại</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="news.php">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/goctuvan.png" alt="">
                                    <div class="uk-navbar-subtitle uk-text-truncate">góc tư vấn</div>
                                </div>
                            </a>
                        </li>
                        <li class="not_m">
                            <a href="cart1.php">
                                <div class="uk-text-center cart_m uk-position-relative" data-status="1">
                                    <img src="imgs/icon_menu/cart.png" alt="">
                                </div>
                            </a>
                        </li>
                        <li class="not_m">
                            <a href="#">
                                <div class="uk-text-center">
                                    <img src="imgs/icon_menu/user.png" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="bottom_h uk-margin-small">
        <div class="uk-container">
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                    <ul class="uk-child-width-auto uk-grid-medium uk-flex-middle" uk-grid>
                        <li><a href="#"><img src="imgs/facebook_icon.png" alt=""></a></li>
                        <li><a href="#"><img src="imgs/youtube_icon.png" alt=""></a></li>
                        <li><a href="#"><img src="imgs/intagram.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="uk-width-expand">
                    <form action="search.php" class="uk-grid-small uk-grid-collapse box_search uk-grid" uk-grid="">
                        <div class="uk-width-expand uk-first-column">
                            <input class="uk-input" type="email" placeholder="Gõ tên sản phẩm bạn muốn tìm">
                        </div>
                        <div class="uk-width-auto">
                            <button type="submit" class="uk-button uk-button-danger"><img src="imgs/icon_search.png" alt=""></button>
                        </div>
                    </form>
                </div>
                <div class="uk-width-1-3">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-auto"><img src="imgs/icon1_phone.png" alt=""></div>
                        <div class="uk-width-expand">
                            <div class="hotline1"><span>Hotline:</span> 0979 068 742</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<header id="header_m" class="uk-hidden@m uk-padding-small bg-white" uk-sticky>
    <div class="uk-grid-small uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <a href="#" class="uk-logo"><img src="imgs/logo_f.png" alt=""></a>
        </div>
        <div class="uk-width-expand">
            <form action="search.php" class="uk-grid-small uk-grid-collapse box_search uk-grid" uk-grid="">
                <div class="uk-width-expand uk-first-column">
                    <input class="uk-input" type="email" placeholder="Tìm kiếm">
                </div>
                <div class="uk-width-auto">
                    <button type="submit" class="uk-button uk-button-danger"><img src="imgs/icon_search.png" alt=""></button>
                </div>
            </form>
        </div>
        <div class="uk-width-auto">
            <div id="mobile_menu_toggler">
                <div id="m_nav_menu" class="m_nav">
                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include('mobile_menu.php'); ?>
</header>
<div class="uk-overlay-primary mask_menu" style="display: none;"></div>