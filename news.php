<?php include('header.php'); ?>
<div class="uk-container uk-margin-bottom uk-padding-remove@s">
    <nav class="uk-navbar-container bg-white box_h uk-margin" uk-navbar>
        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#"><img class="uk-margin-small-right" src="imgs/icon_goctuvan.png" alt=""><span>góc tư vấn</span></a></li>
            </ul>

        </div>
    </nav>
    <div class="block_home uk-margin uk-box-shadow-small" id="tuvan">
        <div class="box_body uk-padding-small">
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small" uk-grid>
                <?php
                $cars = array
                (
                    'https://znews-photo.zadn.vn/w480/Uploaded/ohunuai/2019_03_24/541A4253.JPG',
                    'https://znews-photo.zadn.vn/w480/Uploaded/oqivovbt/2019_03_24/truong_quynh_anh_0.jpg',
                );
                foreach ($cars as $key => $value) { ?>
                    <div class="uk-width-1-3@m">
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
                    </div>
                <?php } ?>
                <div class="uk-width-1-3@m">
                    <?php
                    $cars = array
                    (
                        'https://znews-photo.zadn.vn/w480/Uploaded/bpivpjbp/2019_03_24/Po2yhuqrnap2337516ava.jpg',
                        'https://znews-photo.zadn.vn/w480/Uploaded/bpivpjbp/2019_03_24/53706036_2583234705038498_2071278312650304286_n.jpg',
                        'https://znews-photo.zadn.vn/w480/Uploaded/ofh_nuottuqz/2019_03_24/thumbhai.jpg',
                    );
                    foreach ($cars as $key => $value) { ?>
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-2">
                                <div class="uk-background-cover" style="background-image: url(<?php echo $value; ?>); padding-top: 67%;"></div>
                            </div>
                            <div class="uk-width-1-2">
                                <h3 class="title_goctuvan"><a href="#">Cỏ nhân tạo để lại dấu ấn của họ trong triển lãm Global Pet Expo</a></h3>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php
                $cars = array
                (
                    'https://znews-photo.zadn.vn/w480/Uploaded/ofh_btgazspf/2019_03_22/121.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/ofh_btgazstm/2019_03_22/Vuon_dau_My.JPG',
                    'https://znews-photo.zadn.vn/w480/Uploaded/mdf_kxrxdf/2019_01_26/6_2.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/mdf_xqkxvu/2019_03_21/zing_q1_1.jpg',

                    'https://znews-photo.zadn.vn/w480/Uploaded/natmzz/2019_03_24/thu_1.JPG',
                    'https://znews-photo.zadn.vn/w480/Uploaded/lerl/2019_03_24/qaa.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/neg_etpyole/2019_03_24/8e43bb1019e1fbbfa2f0.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/lerl/2019_03_24/55576579_2132269223475963_5749107965315514368_n.jpg',

                    'https://znews-photo.zadn.vn/w480/Uploaded/neg_yrznslt/2019_03_24/fanviet_thumb.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/mdf_xqkxvu/2019_03_18/c5.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/qhj_jwrscslhfo/2019_03_24/Hinh_ngang.jpg',
                    'https://znews-photo.zadn.vn/w480/Uploaded/ohunuai/2019_03_24/55742660_574550139722674_2572194817664614400_n.jpg',
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
<?php include('footer.php'); ?>