<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="header__left">
                <a href="" class="header__left-logo">
                    <img src="img/Logo.png" alt="">
                </a>
            </div>
            <div class="header__right">
                <div class="right-item">
                    <div class="item-icon">
                        <img src="img/diadiem.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="title_20">Địa chỉ</h5>
                        <p class="content_12">10 phố Dịch Vọng Hậu Cầu Giấy, TP. Hà Nội</p>
                    </div>
                </div>
                <div class="right-item">
                    <div class="item-icon">
                        <img src="img/email.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="title_20">Email</h5>
                        <p class="content_12">info@phucuonggroup.com</p>
                    </div>
                </div>
                <div class="right-item">
                    <div class="item-icon">
                        <img src="img/phone.png" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="title_20">Địa chỉ</h5>
                        <p class="content_12">10 phố Dịch Vọng Hậu Cầu Giấy, TP. Hà Nội</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="main-center">
            <div class="menu-left">
                <ul class="menu-c1">
                    <?php
                    $menu = array("index" => "trang chủ", "goithieu" => "GIỚI THIỆU", "tintuc" => "TIN TỨC", "dichvu" => "DỊCH VỤ", "tuyendung" => "TUYỂN DỤNG", "lienhe" => "LIÊN HỆ");
                    foreach ($menu as $key => $value) {
                    ?>
                        <?php if ($value === "trang chủ") { ?>
                            <li class="item-list active">
                                <a href="<?php echo $key ?>" class="menu1 text-menu_15" title=""><?php echo $value ?></a>
                                <!-- <div class="sub-menu-1">
                                <div class="a-lv-1">
                                    <a class="text-menu_15" href="" title="">Sơn nội thất</a>
                                </div>
                                <div class="a-lv-1">
                                    <a class="text-menu_15" href="" title="">Chống thấm</a>
                                </div>
                                <div class="a-lv-1 fa-angle">
                                    <a class="text-menu_15" href="" title="">Sơn ngoại thất</a>
                                    <div class="menu2">
                                        <div><a class="text-menu_15" href="" title="">Matit</a></div>
                                        <div>
                                            <a class="text-menu_15" href="" title="">Sơn lót</a>
                                        </div>
                                        <div>
                                            <a class="text-menu_15" href="" title="">Sơn phủ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="fa fa-angle-down rotate-lv-1"></span> -->
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo $key ?>" class="menu1 text-menu_15" title=""><?php echo $value ?></a>
                            </li>
                        <?php } ?>

                    <?php } ?>
                </ul>

            </div>
            <div class="menu-right">
                <div class="searchbar">
                    <span class="click-search"><i class="fal fa-search"></i></span>
                    <div class="togglesearch">
                        <form action="">
                        <input class="input_search" type="text" placeholder="Tìm kiếm ..." />
                        <button type="submit" class="search-icon"><i class="fal fa-search"></i></button>
                        </form>
                       
                    </div>
                </div>
                <div class="list-icon">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>