<?php include('header.php'); ?>
<div class="uk-container uk-margin-bottom uk-padding-remove@s">
    <div class="uk-grid-small uk-margin" uk-grid>
        <div class="uk-width-2-3@m">
            <div id="sync1" class="owl-carousel uk-visible@m owl-theme">
                <?php
                $cars = array
                (
                    'imgs/slider1.png',
                    'imgs/slider1.png',
                    'imgs/slider1.png',
                    'imgs/slider1.png',
                    'imgs/slider1.png',
                );
                foreach ($cars as $key => $value) { ?>
                    <div class="item">
                        <a href="#"><div class="uk-background-cover" style="background-image: url(<?php echo $value; ?>); height: 380px"></div></a>
                    </div>
                <?php } ?>
            </div>
            <div id="sync2" class="owl-carousel uk-visible@m owl-theme">
                <div class="item">
                    <a href="javascript:void(0)">Happy Weekend<br><b>giá sốc cuối tuần</b></a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">Đặt trước<br>Galaxy A50</a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">Mua Tivi QLED<br><b>Tặng PMH giảm 20%</b></a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">Đặt sớm tivi<br><b>Rinh quà đến 5 triệu</b></a>
                </div>
                <div class="item">
                    <a href="javascript:void(0)">Đặt trước Vivo V15<br>Đỉnh cao nhiếp ảnh</a>
                </div>
            </div>
            <script>
                var sync1 = $("#sync1");
                var sync2 = $("#sync2");
                var slidesPerPage = 5; //globaly define number of elements per page
                var syncedSecondary = true;

                sync1.owlCarousel({
                    items: 1,
                    slideSpeed: 2000,
                    nav: false,
                    autoplay: true,
                    dots: false,
                    loop: true,
                    responsiveRefreshRate: 200,
                    navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                }).on('changed.owl.carousel', syncPosition);

                sync2
                    .on('initialized.owl.carousel', function() {
                        sync2.find(".owl-item").eq(0).addClass("current");
                    })
                    .owlCarousel({
                        items: slidesPerPage,
                        dots: false,
                        nav: false,
                        smartSpeed: 200,
                        margin: 2,
                        slideSpeed: 500,
                        slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                        responsiveRefreshRate: 100,
                        navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                        responsive : {
                            // breakpoint from 0 up
                            0 : {
                                items: slidesPerPage -1,
                                slideBy: slidesPerPage - 1,
                            },
                            // breakpoint from 480 up
                            480 : {

                            },
                            // breakpoint from 768 up
                            768 : {

                            }
                        },
                    }).on('changed.owl.carousel', syncPosition2);

                function syncPosition(el) {
                    //if you set loop to false, you have to restore this next line
                    //var current = el.item.index;

                    //if you disable loop you have to comment this block
                    var count = el.item.count - 1;
                    var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                    if (current < 0) {
                        current = count;
                    }
                    if (current > count)  {
                        current = 0;
                    }

                    //end block

                    sync2
                        .find(".owl-item")
                        .removeClass("current")
                        .eq(current)
                        .addClass("current");
                    var onscreen = sync2.find('.owl-item.active').length - 1;
                    var start = sync2.find('.owl-item.active').first().index();
                    var end = sync2.find('.owl-item.active').last().index();

                    if (current > end) {
                        sync2.data('owl.carousel').to(current, 100, true);
                    }
                    if (current < start) {
                        sync2.data('owl.carousel').to(current - onscreen, 100, true);
                    }
                }

                function syncPosition2(el) {
                    if (syncedSecondary) {
                        var number = el.item.index;
                        sync1.data('owl.carousel').to(number, 100, true);
                    }
                }

                sync2.on("click", ".owl-item", function(e) {
                    e.preventDefault();
                    var number = $(this).index();
                    sync1.data('owl.carousel').to(number, 300, true);
                });
            </script>
            <div class="uk-position-relative uk-visible-toggle uk-light uk-hidden@m" tabindex="-1" uk-slideshow="ratio: 800:380">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="imgs/slider1.png" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="imgs/slider1.png" alt="" uk-cover>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
            <div class="uk-hidden@m uk-padding-small uk-padding-remove-left uk-padding-remove-right">
                <ul class="uk-child-width-auto menu_s uk-grid-small uk-overflow-auto uk-margin-remove" uk-grid>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico1.png" alt=""></div>
                            <div class="sub_txt">Bóng đá</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico2.png" alt=""></div>
                            <div class="sub_txt">Bóng rổ</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico3.png" alt=""></div>
                            <div class="sub_txt">Bóng chuyền</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico4.png" alt=""></div>
                            <div class="sub_txt">Tennis</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico5.png" alt=""></div>
                                <div class="sub_txt">Cầu lông</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico6.png" alt=""></div>
                            <div class="sub_txt">Võ thuật</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico1.png" alt=""></div>
                            <div class="sub_txt">Bóng đá</div>
                        </a>
                    </li>
                    <li class="uk-text-center">
                        <a href="#">
                            <div class="ico_m1"><img src="imgs/mobile1/ico2.png" alt=""></div>
                            <div class="sub_txt">Bóng rổ</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="uk-width-1-3@m uk-visible@m">
            <div class="uk-card card3 uk-card-default">
                <div class="uk-card-header uk-padding-remove">
                    <div class="uk-grid-collapse uk-child-width-1-2 uk-flex-middle" uk-grid>
                        <div>
                            <span class="uk-text-uppercase txt1">tin tức nổi bật</span>
                        </div>
                        <div>
                            <a href="#" class="link1">Góc tư vấn</a>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-small">
                    <div class="uk-grid-small uk-flex-middle uk-transition-toggle" uk-grid>
                        <div class="uk-width-1-3">
                            <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(https://znews-photo.zadn.vn/w210/Uploaded/ofh_nuottuqz/2019_03_23/thumb1.jpg); padding-top: 62%;"></div>
                            </div>
                        </div>
                        <div class="uk-width-2-3">
                            <h6><a href="#">Công Phượng tiết lộ khó khăn khi thi đấu 30 phút đầu tiên ở K.League</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img src="imgs/news_img2.png" alt=""></a>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img src="imgs/news_img3.png" alt=""></a>
            </div>
        </div>
    </div>
    <div class="uk-margin-medium-bottom uk-visible@m">
        <a href="#"><div class="uk-background-cover" style="background-image: url(imgs/banner.png); height: 75px;"></div></a>
    </div>
    <div class="block_spbc uk-margin uk-box-shadow-small uk-padding bg-white uk-position-relative">
        <div class="uk-position-top box2">
            <span class="uk-text-uppercase uk-position-center">sản phẩm bán chạy</span>
        </div>
        <div uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light">
                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l">
                        <?php
                        $cars = array
                        (
                            array(
                                'img' => 'imgs/spbc1.png',
                                'title' => 'Thiết bị tập vai quay tay đôi JA-3900',
                                'price_new' => '9,900,000 đ',
                            ),
                            array(
                                'img' => 'imgs/bong1.png',
                                'title' => 'Mẫu áo bóng đá không logo đẹp ,Mẫu áo bóng đá không logo đẹp',
                                'sale' => 'giảm 30%',
                                'price_new' => '1,250,000 đ',
                                'price_old' => '10,900,000 đ',
                            ),
                            array(
                                'img' => 'imgs/spbc2.png',
                                'title' => 'Desportivas 2016/17 dos homens camisas de futebol tailândia camisas',
                                'price_new' => '900,000 đ',
                                'news' => 'new',
                            ),
                            array(
                                'img' => 'imgs/spbc3.png',
                                'title' => 'Áo thể thao REVILO nam 9504',
                                'price_new' => '4,500,000 đ',
                            ),
                            array(
                                'img' => 'imgs/spbc4.png',
                                'title' => 'Thiết bị đi bộ trên không đơn JA-900',
                                'price_new' => '1,900,000 đ',
                                'ship' => 'free ship',
                            ),
                            array(
                                'img' => 'imgs/bong2.png',
                                'title' => 'Desportivas 2016/17 dos homens camisas de futebol tailândia camisas',
                                'price_new' => '900,000 đ',
                                'news' => 'new',
                            ),
                            array(
                                'img' => 'imgs/bong3.png',
                                'title' => 'Áo thể thao REVILO nam 9504',
                                'price_new' => '4,500,000 đ',
                            ),
                        );
                        foreach ($cars as $key => $value) { ?>
                            <li>
                                <div class="card2 uk-height-1-1 uk-transition-toggle uk-box-shadow-hover-large uk-text-center" style="margin-right: 0;">
                                    <div class="uk-padding-small">
                                        <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                            <div class="uk-background-contain uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value['img']; ?>); padding-top: 100%;"></div>
                                            <?php echo (isset($value['sale'])) ? '<span class="discount uk-position-bottom-right"><i>'. $value['sale'] .'</i></span>' : ''; ?>
                                            <?php echo (isset($value['news'])) ? '<span class="news uk-position-bottom-right"><i>'. $value['news'] .'</i></span>' : ''; ?>
                                            <?php echo (isset($value['ship'])) ? '<span class="ship uk-position-bottom-right"><i>'. $value['ship'] .'</i></span>' : ''; ?>
                                        </div>
                                        <h3 class="title"><a href="#"><?php echo $value['title']; ?></a></h3>
                                        <div class="price">
                                            <?php echo (isset($value['price_old'])) ? '<div class="old">'. $value['price_old'] .'</div>' : ''; ?>
                                            <div class="new"><?php echo $value['price_new']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small nav1" href="#" uk-slidenav-previous uk-slider-item="previous"><img class="uk-border-circle" src="imgs/arrow_back.png" alt=""></a>
                    <a class="uk-position-center-right uk-position-small nav1" href="#" uk-slidenav-next uk-slider-item="next"><img class="uk-border-circle" src="imgs/arrow_next.png" alt=""></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small nav1" href="#" uk-slidenav-previous uk-slider-item="previous"><img class="uk-border-circle" src="imgs/arrow_back.png" alt=""></a>
                    <a class="uk-position-center-right-out uk-position-small nav1" href="#" uk-slidenav-next uk-slider-item="next"><img class="uk-border-circle" src="imgs/arrow_next.png" alt=""></a>
                </div>

            </div>`

        </div>
    </div>
    <div class="block_home uk-margin uk-box-shadow-small">
        <div class="box_header uk-flex uk-flex-middle uk-flex-between">
            <div class="left_home">
                <div class="icon_h"><img src="imgs/icon1.png" alt=""></div>
                <span class="txt_h uk-text-uppercase">bóng nổi bật</span>
            </div>
            <nav class="uk-navbar-container uk-navbar-transparent uk-width-1-1" uk-navbar>
                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav">
                        <li class="uk-visible@m"><a href="#">Quả bóng đá</a></li>
                        <li class="uk-visible@m"><a href="#">Quả bóng rổ</a></li>
                        <li class="uk-visible@m"><a href="#">Quả bóng chuyền</a></li>
                        <li class="uk-visible@m"><a href="#">Quả bóng ban</a></li>
                        <li class="uk-visible@m"><a href="#">Bóng tennis</a></li>
                        <li class="uk-hidden@m">
                            <a href="#"><span uk-icon="menu"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="uk-navbar-right uk-margin-medium-left price_nav uk-visible@m">

                    <ul class="uk-navbar-nav">
                        <li><a href="#">Giá từ</a></li>
                        <li><a href="#">100k</a></li>
                        <li><a href="#">200k</a></li>
                        <li><a href="#">300k</a></li>
                        <li><a href="#">400k</a></li>
                        <li><a href="#">500k</a></li>
                    </ul>

                </div>
            </nav>
        </div>
        <div class="box_body">
            <div class="uk-child-width-1-2 uk-child-width-1-5@m uk-grid-collapse small uk-grid-divider" uk-grid>
                <div class="uk-width-1-1 uk-width-2-5@m">
                    <div class="card2 uk-height-1-1">
                        <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                            <div>
                                <img class="uk-height-1-1" src="imgs/hot_ball_1.png" alt="">
                            </div>
                            <div>
                                <div class="uk-padding-small uk-padding-remove-left">
                                    <h3 class="title title_nb uk-visible@s"><a href="#">Bóng đá FIFA Qualyti pro UHV 2.07 Bóng thi đấu chính thức V-Legue 2017</a></h3>
                                    <p class="price1 uk-visible@s">
                                        <span class="new">1,250,000đ</span>
                                    </p>
                                    <div class="rate_h">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star not" aria-hidden="true"></i>
                                        <span class="txt_rate">44 đánh giá</span>
                                    </div>
                                    <div class="hot-product-rating-info">
                                        <ul class="uk-grid-small" uk-grid>
                                            <li class="uk-active">
                                                <div class="ship1"><span>free ship</span></div>
                                            </li>
                                            <li>Cấu tạo nhiều lớp, ruột làm bằng cao su cao cấp, giữ hơi tốt</li>
                                            <li>Phù hợp với nhiều loại sân như sân cỏ thường, sân cỏ nhân tạo…</li>
                                            <li>Không bị thấm nước khi trời mưa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-hidden@s">
                                <div class="uk-padding-small">
                                    <h3 class="title title_nb"><a href="#">Bóng đá FIFA Qualyti pro UHV 2.07 Bóng thi đấu chính thức V-Legue 2017</a></h3>
                                    <p class="price1">
                                        <span class="new">1,250,000đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $cars = array
                (
                    array(
                        'img' => 'imgs/bong1.png',
                        'sale' => 'giảm 30%',
                        'gift' => 'imgs/gift1.png',
                    ),
                    array(
                        'img' => 'imgs/bong2.png',
                    ),
                    array(
                        'img' => 'imgs/bong3.png',
                    ),
                );
                foreach ($cars as $key => $value) { ?>
                    <div>
                        <div class="card2 uk-height-1-1 uk-transition-toggle uk-box-shadow-hover-large">
                            <div class="uk-padding-small">
                                <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                    <div class="uk-background-contain uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value['img']; ?>); padding-top: 100%;"></div>
                                    <?php echo (isset($value['sale'])) ? '<span class="discount uk-position-bottom-right"><i>'. $value['sale'] .'</i></span>' : ''; ?>
                                </div>
                                <h3 class="title"><a href="#">Sàn Nhựa Hèm Khóa DP356</a></h3>
                                <p class="price">
                                    <span class="new">300,000đ</span>
                                    <del class="old">330,000đ</del>
                                </p>
                                <div class="rate_h">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <span class="txt_rate">44 đánh giá</span>
                                </div>
                                <div class="gift">
                                    <?php echo (isset($value['gift'])) ? '<span class="icon_img"><img src="'. $value['gift'] .'" alt=""></span>' : ''; ?>
                                    <div>
                                        <p>Dạt tiêu chuẩn thi đấu cao nhất của FIFA (FIFA Quality Pro), được sử dụng thi đấu cho Giải Vô Địch Quốc Gia V-League 2017-2018, Cúp Quốc Gia 2017-2018, Siêu Cúp Quốc Gia 2017-2018.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="uk-width-1-1 uk-width-2-5@m uk-visible@m">
                    <div class="card2 uk-height-1-1">
                        <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                            <div>
                                <img class="uk-height-1-1" src="imgs/hot_ball_2.png" alt="">
                            </div>
                            <div>
                                <div class="uk-padding-small uk-padding-remove-left">
                                    <h3 class="title title_nb uk-visible@s"><a href="#">Giày bóng đá Prowin FK0 nhà phân phối chính hãng</a></h3>
                                    <p class="price1 uk-visible@s">
                                        <span class="new">1,250,000đ</span>
                                    </p>
                                    <div class="rate_h">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star not" aria-hidden="true"></i>
                                        <span class="txt_rate">44 đánh giá</span>
                                    </div>
                                    <div class="hot-product-rating-info">
                                        <ul class="uk-grid-small" uk-grid>
                                            <li class="uk-active">
                                                <div class="sale1"><span>giảm 30%</span></div>
                                            </li>
                                            <li>Cấu tạo nhiều lớp, ruột làm bằng cao su cao cấp, giữ hơi tốt</li>
                                            <li>Phù hợp với nhiều loại sân như sân cỏ thường, sân cỏ nhân tạo…</li>
                                            <li>Không bị thấm nước khi trời mưa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-hidden@s">
                                <div class="uk-padding-small">
                                    <h3 class="title title_nb"><a href="#">Bóng đá FIFA Qualyti pro UHV 2.07 Bóng thi đấu chính thức V-Legue 2017</a></h3>
                                    <p class="price1">
                                        <span class="new">1,250,000đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $cars = array
                (
                    array(
                        'img' => 'imgs/bong1.png',
                        'sale' => 'giảm 30%'
                    ),
                    array(
                        'img' => 'imgs/bong2.png',
                    ),
                    array(
                        'img' => 'imgs/bong3.png',
                    ),
                );
                foreach ($cars as $key => $value) { ?>
                    <div>
                        <div class="card2 uk-height-1-1 uk-transition-toggle uk-box-shadow-hover-large">
                            <div class="uk-padding-small">
                                <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                    <div class="uk-background-contain uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value['img']; ?>); padding-top: 100%;"></div>
                                    <?php echo (isset($value['sale'])) ? '<span class="discount uk-position-bottom-right"><i>'. $value['sale'] .'</i></span>' : ''; ?>
                                </div>
                                <h3 class="title"><a href="#">Sàn Nhựa Hèm Khóa DP356</a></h3>
                                <p class="price">
                                    <span class="new">300,000đ</span>
                                    <del class="old">330,000đ</del>
                                </p>
                                <div class="rate_h">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <span class="txt_rate">44 đánh giá</span>
                                </div>
                                <div class="gift">
                                    <?php echo (isset($value['gift'])) ? '<span class="icon_img"><img src="'. $value['gift'] .'" alt=""></span>' : ''; ?>
                                    <div>
                                        <p>Dạt tiêu chuẩn thi đấu cao nhất của FIFA (FIFA Quality Pro), được sử dụng thi đấu cho Giải Vô Địch Quốc Gia V-League 2017-2018, Cúp Quốc Gia 2017-2018, Siêu Cúp Quốc Gia 2017-2018.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="block_home uk-margin uk-box-shadow-small">
        <div class="box_header uk-flex uk-flex-middle uk-flex-between">
            <div class="left_home">
                <div class="icon_h"><img src="imgs/icon2.png" alt=""></div>
                <span class="txt_h uk-text-uppercase">sàn nhựa</span>
            </div>
            <nav class="uk-navbar-container uk-navbar-transparent uk-width-1-1" uk-navbar>
                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav">
                        <li class="uk-visible@m"><a href="#">Sàn Nhựa Hèm Khóa</a></li>
                        <li class="uk-visible@m"><a href="#">Sàn chuyên dụng</a></li>
                        <li class="uk-visible@m"><a href="#">Sàn nhựa dán keo</a></li>
                        <li class="uk-hidden@m">
                            <a href="#"><span uk-icon="menu"></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="uk-navbar-right uk-margin-medium-left price_nav uk-visible@m">

                    <ul class="uk-navbar-nav">
                        <li><a href="#">Giá từ</a></li>
                        <li><a href="#">100k</a></li>
                        <li><a href="#">200k</a></li>
                        <li><a href="#">300k</a></li>
                        <li><a href="#">400k</a></li>
                        <li><a href="#">500k</a></li>
                    </ul>

                </div>
            </nav>
        </div>
        <div class="box_body">
            <div class="uk-child-width-1-2 uk-child-width-1-5@m uk-grid-collapse small uk-grid-divider" uk-grid>
                <div class="uk-width-1-1 uk-width-2-5@m">
                    <div class="card2 uk-height-1-1">
                        <div class="uk-child-width-1-2 uk-grid-small" uk-grid>
                            <div>
                                <img class="uk-height-1-1" src="imgs/hot_ball_3.png" alt="">
                            </div>
                            <div>
                                <div class="uk-padding-small uk-padding-remove-left">
                                    <h3 class="title title_nb uk-visible@s"><a href="#">Giày bóng đá Prowin FK0 nhà phân phối chính hãng</a></h3>
                                    <p class="price1 uk-visible@s">
                                        <span class="new">1,250,000đ</span>
                                    </p>
                                    <div class="rate_h">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star not" aria-hidden="true"></i>
                                        <span class="txt_rate">44 đánh giá</span>
                                    </div>
                                    <div class="hot-product-rating-info">
                                        <ul class="uk-grid-small" uk-grid>
                                            <li class="uk-active">
                                                <div class="sale1"><span>giảm 30%</span></div>
                                            </li>
                                            <li>Cấu tạo nhiều lớp, ruột làm bằng cao su cao cấp, giữ hơi tốt</li>
                                            <li>Phù hợp với nhiều loại sân như sân cỏ thường, sân cỏ nhân tạo…</li>
                                            <li>Không bị thấm nước khi trời mưa.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-hidden@s">
                                <div class="uk-padding-small">
                                    <h3 class="title title_nb"><a href="#">Bóng đá FIFA Qualyti pro UHV 2.07 Bóng thi đấu chính thức V-Legue 2017</a></h3>
                                    <p class="price1">
                                        <span class="new">1,250,000đ</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $cars = array
                (
                    array(
                        'img' => 'imgs/san1.png',
                        'sale' => 'giảm 30%'
                    ),
                    array(
                        'img' => 'imgs/san1.png',
                    ),
                    array(
                        'img' => 'imgs/san1.png',
                    ),
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="card2 uk-height-1-1 uk-transition-toggle uk-box-shadow-hover-large">
                        <div class="uk-padding-small">
                            <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value['img']; ?>); padding-top: 100%;"></div>
                                <?php echo (isset($value['sale'])) ? '<span class="discount uk-position-bottom-right"><i>'. $value['sale'] .'</i></span>' : ''; ?>
                            </div>
                            <h3 class="title"><a href="#">Sàn Nhựa Hèm Khóa DP356</a></h3>
                            <p class="price">
                                <span class="new">300,000đ</span>
                                <del class="old">330,000đ</del>
                            </p>
                            <div class="rate_h">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star not" aria-hidden="true"></i>
                                <span class="txt_rate">44 đánh giá</span>
                            </div>
                            <div class="gift">
                                <div>
                                    <p>Dạt tiêu chuẩn thi đấu cao nhất của FIFA (FIFA Quality Pro), được sử dụng thi đấu cho Giải Vô Địch Quốc Gia V-League 2017-2018, Cúp Quốc Gia 2017-2018, Siêu Cúp Quốc Gia 2017-2018.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <div class="uk-hidden@m">
                    <div class="card2 uk-height-1-1 uk-transition-toggle uk-box-shadow-hover-large">
                        <div class="uk-padding-small">
                            <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value['img']; ?>); padding-top: 100%;"></div>
                                <?php echo (isset($value['sale'])) ? '<span class="discount uk-position-bottom-right"><i>'. $value['sale'] .'</i></span>' : ''; ?>
                            </div>
                            <h3 class="title"><a href="#">Sàn Nhựa Hèm Khóa DP356</a></h3>
                            <p class="price">
                                <span class="new">300,000đ</span>
                                <del class="old">330,000đ</del>
                            </p>
                            <div class="rate_h">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star not" aria-hidden="true"></i>
                                <span class="txt_rate">44 đánh giá</span>
                            </div>
                            <div class="gift">
                                <div>
                                    <p>Dạt tiêu chuẩn thi đấu cao nhất của FIFA (FIFA Quality Pro), được sử dụng thi đấu cho Giải Vô Địch Quốc Gia V-League 2017-2018, Cúp Quốc Gia 2017-2018, Siêu Cúp Quốc Gia 2017-2018.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block_home uk-margin uk-box-shadow-small" id="tuvan">
        <div class="box_header uk-flex uk-flex-middle uk-flex-between">
            <div class="left_home">
                <div class="icon_h"><img src="imgs/icon3.png" alt=""></div>
                <span class="txt_h uk-text-uppercase">góc tư vấn</span>
            </div>
        </div>
        <div class="box_body uk-padding-small">
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small uk-grid-divider" uk-grid>
                <?php
                $cars = array
                (
                    'https://znews-photo.zadn.vn/w480/Uploaded/ofh_btgazspf/2019_03_22/121.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/ofh_btgazstm/2019_03_22/Vuon_dau_My.JPG',
                    'https://znews-photo.zadn.vn/w480/Uploaded/mdf_kxrxdf/2019_01_26/6_2.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/mdf_xqkxvu/2019_03_21/zing_q1_1.jpg',
                );
                foreach ($cars as $key => $value) { ?>
                <div>
                    <div class="box1 uk-transition-toggle">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-2-5 uk-width-1-1@s">
                                <div class="uk-inline-clip uk-width-1-1" tabindex="2">
                                    <div class="uk-background-cover uk-transition-scale-up uk-transition-opaque box_img" style="background-image: url(<?php echo $value; ?>); padding-top: 68%;"></div>
                                </div>
                            </div>
                            <div class="uk-width-3-5 uk-width-1-1@s">
                                <h3 class="title uk-margin-small"><a href="#">Cỏ chết của sân sau được thay thế bằng cỏ nhân tạo xanh mát của SYNLawn.</a></h3>
                                <p class="desc uk-visible@s">Cỏ chết của sân sau được thay thế bằng cỏ nhân tạo xanh mát của SYNLawn.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>