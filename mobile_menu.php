<div id="mobile_menu" style="display: none;">
    <ul>
        <?php
        $cars = array
        (
            array(
                'src' => 'imgs/mobile/bongda.png',
                'title' => 'Bóng đá',
                'sub' => array(
                    'Dụng cụ sân bóng',
                    'Giày bóng đá',
                    'Phụ kiện bóng đá',
                    'Quả bóng đá',
                ),
            ),
            array(
                'src' => 'imgs/mobile/bongro.png',
                'title' => 'Bóng rổ',
                'sub' => array(
                    'Dụng cụ sân bóng',
                    'Giày bóng đá',
                    'Phụ kiện bóng đá',
                    'Quả bóng đá',
                ),
            ),
            array(
                'src' => 'imgs/mobile/bongchuyen.png',
                'title' => 'Bóng chuyền',
                'sub' => array(
                    'Dụng cụ sân bóng',
                    'Giày bóng đá',
                    'Phụ kiện bóng đá',
                    'Quả bóng đá',
                ),
            ),
            array(
                'src' => 'imgs/mobile/tenis.png',
                'title' => 'Tennis',
                'sub' => array(
                    'Dụng cụ sân bóng',
                    'Giày bóng đá',
                    'Phụ kiện bóng đá',
                    'Quả bóng đá',
                ),
            ),
            array(
                'src' => 'imgs/mobile/caulong.png',
                'title' => 'Cầu lông',
                'sub' => array(
                    'Dụng cụ sân bóng',
                    'Giày bóng đá',
                    'Phụ kiện bóng đá',
                    'Quả bóng đá',
                ),
            ),
            array(
                'src' => 'imgs/mobile/vothuat.png',
                'title' => 'Võ thuật',
                'sub' => array(
                    'Dụng cụ sân bóng',
                    'Giày bóng đá',
                    'Phụ kiện bóng đá',
                    'Quả bóng đá',
                ),
            ),
            array(
                'src' => 'imgs/mobile/goctuvan.png',
                'title' => 'Góc tư vấn',
            ),
            array(
                'src' => 'imgs/mobile/thanhtoan.png',
                'title' => 'Thanh toán',
            ),
            array(
                'src' => 'imgs/mobile/chinhsachbanhang.png',
                'title' => 'Chính sách bán hàng',
            ),
            array(
                'src' => 'imgs/mobile/chinhsachdoitra.png',
                'title' => 'Chính sách đổi trả',
            ),
            array(
                'src' => 'imgs/mobile/chinhsachgiaonhan.png',
                'title' => 'Chính sách giao nhận',
            ),
            array(
                'src' => 'imgs/mobile/chinhsachbaomat.png',
                'title' => 'Chính sách bảo mật TT',
            ),
            array(
                'src' => 'imgs/mobile/lienhe.png',
                'title' => 'Liên hệ',
            ),
        );
        foreach ($cars as $key => $value) { ?>
            <li class="<?= (isset($value['sub'])) ? 'menu-item-has-children' : ''; ?>">
                <a class="uk-link-reset" href="#">
                    <span class="box_img1 uk-margin-small-right"><img src="<?= $value['src']; ?>" alt=""></span>
                    <span class="uk-text-middle"><?= $value['title']; ?></span>
                </a>
                <?php if (isset($value['sub'])) { ?>
                    <ul class="sub_menu" style="display: none;">
                        <?php foreach ($value['sub'] as $k => $v) { ?>
                            <li><a href="#"><?= $v; ?></a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</div>