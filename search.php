<?php include('header.php'); ?>
<div class="uk-container uk-margin uk-padding-remove@s">
    <div class="uk-grid-small" uk-grid>
        <div class="uk-width-expand@m">
            <h1 class="title_kq uk-margin-small">Kết quả tìm kiếm cho từ khóa <span>'bóng đá'</span></h1>
            <div class="uk-padding-small box3 uk-margin-remove">
                <div class="uk-grid-small uk-flex-middle uk-flex-between" uk-grid>
                    <div class="uk-width-auto@m">
                        <span class="txt4">Sắp xếp theo</span>
                    </div>
                    <div class="uk-width-expand@m">
                        <div uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Liên quan</option>
                                <option value="1">Mới nhất</option>
                                <option value="2">Bán chạy</option>
                                <option value="3">Giá từ thấp->cao</option>
                                <option value="4">Giá từ cao->thấp</option>
                            </select>
                            <button class="uk-button uk-button-default bg-white btn4" type="button" tabindex="-1">
                                <span></span>
                                <span uk-icon="icon: chevron-down"></span>
                            </button>
                        </div>
                    </div>
                    <div class="uk-width-auto@m">
                        <ul class="uk-pagination uk-flex-center" uk-margin>
                            <li><a href="#"><span uk-pagination-previous></span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="uk-active"><span>4</span></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><span uk-pagination-next></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block_home uk-margin-bottom">
                <div class="box2">

                </div>
                <div class="box_body">
                    <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid-collapse small uk-grid-divider" uk-grid>
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
                    </div>
                </div>
            </div>
            <div class="uk-card detail1 bg-white uk-margin">
                <div class="uk-card-header uk-padding-small">Tìm thấy 8 bài viết</div>
                <div class="uk-card-body uk-padding-small">
                    <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                        <?php
                        $cars = array
                        (
                            'https://znews-photo.zadn.vn/w480/Uploaded/ofh_btgazspf/2019_03_22/121.jpg',
                            'https://znews-photo.zadn.vn/w480/Uploaded/ofh_btgazstm/2019_03_22/Vuon_dau_My.JPG',
                            'https://znews-photo.zadn.vn/w480/Uploaded/mdf_kxrxdf/2019_01_26/6_2.jpg',
                            'https://znews-photo.zadn.vn/w480/Uploaded/mdf_xqkxvu/2019_03_21/zing_q1_1.jpg',

                            'https://znews-photo.zadn.vn/w480/Uploaded/jopluat/2019_03_26/Park_Hangseo.jpg',
                            'https://znews-photo.zadn.vn/w480/Uploaded/jopluat/2019_03_26/Alexandre_Gama.jpg',
                            'https://znews-photo.zadn.vn/w480/Uploaded/ofh_nuottuqz/2019_03_26/03z_thumb_3x2_quang_hai.jpg',
                            'https://znews-photo.zadn.vn/w660/Uploaded/neg_etpyole/2019_03_26/0686ba27c0df22817bce.jpg',
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
        <div class="uk-width-1-5@m uk-flex-first@m">
            <div uk-sticky="offset: 88; bottom: true; media: 640">
                <h3 class="title_filter uk-text-uppercase uk-margin-small"><i class="fa fa-filter" aria-hidden="true"></i> bộ lọc tìm kiếm</h3>
                <h4 class="title_txt uk-margin-small">Theo danh mục</h4>
                <ul class="list1_filter uk-nav-default uk-nav-parent-icon uk-margin-small" uk-nav>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox" checked> Bóng đá (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng rổ (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng chuyền (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng đá (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng rổ (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng chuyền (3)</label>
                        </a>
                    </li>
                </ul>
                <h4 class="title_txt uk-margin-small">Theo thương hiệu</h4>
                <ul class="list1_filter uk-nav-default uk-nav-parent-icon uk-margin-small" uk-nav>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox" checked> Enlio</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng rổ (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Bóng chuyền (3)</label>
                        </a>
                    </li>
                </ul>
                <h4 class="title_txt uk-margin-small">Theo giá</h4>
                <div class="uk-margin-small uk-padding-small uk-padding-remove-top uk-padding-remove-bottom">
                    <div class="uk-grid-small uk-flex-middle uk-margin-small" uk-grid>
                        <div class="uk-width-expand">
                            <div id="slider-range"></div>
                        </div>
                        <div class="uk-width-auto">
                            <button type="button" class="uk-button uk-button-danger btn-filter">Lọc</button>
                        </div>
                    </div>
                    <div class="uk-grid-small uk-child-width-auto uk-flex-middle" uk-grid>
                        <div><span class="txt_price">Giá</span></div>
                        <div><input class="uk-width-1-1" type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></div>
                    </div>
                </div>
                <script>
                    $( function() {
                        var spinner = $( "#spinner" ).spinner();
                        $( "#slider-range" ).slider({
                            range: true,
                            min: 0,
                            max: 1500000,
                            values: [ 0, 500000 ],
                            slide: function( event, ui ) {
                                $( "#amount" ).val(ui.values[ 0 ] + " đ" + " - " + ui.values[ 1 ] + " đ");
                            }
                        });
                        $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) + " đ" + " - " + $( "#slider-range" ).slider( "values", 1 ) + " đ");
                    } );
                </script>
                <h4 class="title_txt uk-margin-small">Theo màu sắc</h4>
                <ul class="list1_filter uk-nav-default uk-nav-parent-icon uk-margin-small" uk-nav>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox" checked> Xanh</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Đỏ (3)</label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label><input class="uk-checkbox" type="checkbox"> Vàng (3)</label>
                        </a>
                    </li>
                </ul>
                <h4 class="title_txt uk-margin-small">Đánh giá</h4>
                <ul class="list1_filter uk-nav-default uk-nav-parent-icon uk-margin-small" uk-nav>
                    <li>
                        <a href="#">
                            <label class="uk-flex uk-flex-middle">
                                <input class="uk-checkbox" type="checkbox" checked>
                                <div class="rate_h uk-margin-small-left uk-margin-remove-bottom">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <span class="txt_rate">(ít nhất 4 sao)</span>
                                </div>
                            </label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label class="uk-flex uk-flex-middle">
                                <input class="uk-checkbox" type="checkbox">
                                <div class="rate_h uk-margin-small-left uk-margin-remove-bottom">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <span class="txt_rate">(ít nhất 3 sao)</span>
                                </div>
                            </label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label class="uk-flex uk-flex-middle">
                                <input class="uk-checkbox" type="checkbox">
                                <div class="rate_h uk-margin-small-left uk-margin-remove-bottom">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <span class="txt_rate">(ít nhất 2 sao)</span>
                                </div>
                            </label>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <label class="uk-flex uk-flex-middle">
                                <input class="uk-checkbox" type="checkbox">
                                <div class="rate_h uk-margin-small-left uk-margin-remove-bottom">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <i class="fa fa-star not" aria-hidden="true"></i>
                                    <span class="txt_rate">(ít nhất 1 sao)</span>
                                </div>
                            </label>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>