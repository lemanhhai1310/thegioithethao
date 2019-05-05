<?php include('header.php'); ?>
<div class="uk-container uk-margin-bottom uk-padding-remove@s">
    <div class="uk-grid-small uk-margin" uk-grid>
        <div class="uk-width-2-3@m">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 800:292">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="imgs/slider_c1.jpg" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="imgs/slider_c1.jpg" alt="" uk-cover>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>
        </div>
        <div class="uk-width-1-3@m uk-visible@m">
            <div class="uk-margin-small">
                <a href="#"><img src="imgs/news_img2.png" alt=""></a>
            </div>
            <div class="uk-margin-small">
                <a href="#"><img src="imgs/news_img3.png" alt=""></a>
            </div>
        </div>
    </div>
    <nav class="uk-navbar-container bg-white box_h uk-margin" uk-navbar>
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#"><img class="uk-margin-small-right" src="imgs/bongda1.png" alt=""><span>bóng đá</span></a></li>
                <li><a href="#"><img class="uk-margin-small-right" src="imgs/hi1.png" alt=""><span>Dụng cụ bóng đá</span></a></li>
                <li><a href="#"><img class="uk-margin-small-right" src="imgs/hi2.png" alt=""><span>Giày bóng đá</span></a></li>
                <li><a href="#"><img class="uk-margin-small-right" src="imgs/hi3.png" alt=""><span>Phụ kiện bóng đá</span></a></li>
                <li><a href="#"><img class="uk-margin-small-right" src="imgs/hi4.png" alt=""><span>Quả bóng đá</span></a></li>
            </ul>

        </div>
    </nav>
    <nav class="uk-navbar-container uk-navbar-transparent box_filter" uk-navbar>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a class="uk-padding-remove-left" href="#">Chọn mức giá</a></li>
                <li><a href="#">Dưới 200 vnđ</a></li>
                <li><a href="#">Từ 200 - 400 vnđ</a></li>
                <li><a href="#">Từ 400 - 700 vnđ</a></li>
                <li><a href="#">Từ 700 - 1200 vnđ</a></li>
                <li><a href="#">trên 1200 vnđ</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <div class="uk-navbar-item">
                <div uk-form-custom="target: > * > span:last-child">
                    <select>
                        <option value="1">Thương hiệu</option>
                        <option value="2">Option 02</option>
                        <option value="3">Option 03</option>
                        <option value="4">Option 04</option>
                    </select>
                    <span class="uk-link uk-flex uk-flex-row-reverse">
                        <span uk-icon="icon: chevron-down"></span>
                        <span></span>
                    </span>
                </div>
            </div>
            <div class="uk-navbar-item">
                <div uk-form-custom="target: > * > span:last-child">
                    <select>
                        <option value="1">Sắp xếp</option>
                        <option value="2">Mới nhất</option>
                        <option value="3">Giá: thấp -> cao</option>
                        <option value="4">Giá: cao -> thấp</option>
                    </select>
                    <span class="uk-link uk-flex uk-flex-row-reverse">
                        <span uk-icon="icon: chevron-down"></span>
                        <span></span>
                    </span>
                </div>
            </div>
        </div>
    </nav>
    <div class="block_home uk-margin uk-box-shadow-small">
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
                        'sale' => 'giảm 30%',
                    ),
                    array(
                        'img' => 'imgs/bong2.png',
                    ),
                    array(
                        'img' => 'imgs/bong4.jpg',
                    ),
                    array(
                        'img' => 'imgs/bong1.png',
                        'sale' => 'giảm 30%',
                    ),
                    array(
                        'img' => 'imgs/bong2.png',
                    ),
                    array(
                        'img' => 'imgs/bong3.png',
                    ),
                    array(
                        'img' => 'imgs/bong1.png',
                        'sale' => 'giảm 30%',
                    ),
                    array(
                        'img' => 'imgs/bong2.png',
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
        <a href="#" class="load_more">Xem thêm 68 bóng <span uk-icon="chevron-down"></span></a>
    </div>
</div>
<?php include('footer.php'); ?>