<?php require("./src/Helper.php"); ?>
<?php include('../../showpage.php'); ?>
<?= web_start('Phú Cường | Homepage') ?>
<?php include('./layouts/header.php') ?>
<div class="home">
    <div class="banner_home">
        <div id="slide-home" class="banner_home-slide owl-carousel">
            <div class="item">
                <a href="">
                    <img src="img/banner-home.png" alt="">
                </a>
                <div class="container">
                    <div class="content-banner">
                        <h2 class="title_45">Sterile Compounding</h2>
                        <p class="content_15">With a service like Pillzefy, you no longer have to waste time waiting and finding the right medicine. All you need to do is enter the name of the drug and its prescription, and the service will find the nearest pharmacy and prepare your order. Enjoy.</p>
                        <a href="" class="content_15 btn btn-size-1 btn-animation">Xem thêm <i class="fal fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <a href="">
                    <img src="img/banner-home.png" alt="">
                </a>
                <div class="container">
                    <div class="content-banner">
                        <h2 class="title_45">Sterile Compounding</h2>
                        <p class="content_15">With a service like Pillzefy, you no longer have to waste time waiting and finding the right medicine. All you need to do is enter the name of the drug and its prescription, and the service will find the nearest pharmacy and prepare your order. Enjoy.</p>
                        <a href="" class="content_15 btn btn-size-1 btn-animation">Xem thêm <i class="fal fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <a href="">
                    <img src="img/banner-home.png" alt="">
                </a>
                <div class="container">
                    <div class="content-banner">
                        <h2 class="title_45">Sterile Compounding</h2>
                        <p class="content_15">With a service like Pillzefy, you no longer have to waste time waiting and finding the right medicine. All you need to do is enter the name of the drug and its prescription, and the service will find the nearest pharmacy and prepare your order. Enjoy.</p>
                        <a href="" class="btn btn-size-1 btn-animation">Xem thêm <i class="fal fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="introduce">
        <div class="container">
            <div class="row-main">
                <div class="item-left">
                    <a href="" class="img"><img src="img/img-gt.png" alt=""></a>
                </div>
                <div class="item-right">
                    <a href="">
                        <h2 class="title_15">GIỚI THIỆU</h2>
                    </a>
                    <a href="">
                        <h3 class="title_35">VỀ PHÚ CƯỜNG GROUP</h3>
                    </a>
                    <p class="content_15">With a service like Pillzefy, you no longer have
                        to waste time waiting and finding the right medicine. All you need
                        to do is enter the name of the drug and its prescription, and
                        the service will find the nearest pharmacy and prepare your order.
                        Enjoy.<br> With a service like Pillzefy, you no longer have to waste
                        time waiting and finding the right medicine. With a service like
                        Pillzefy, you no longer have to waste time waiting and finding
                        the right medicine. All you need to do is enter the name of
                        the drug and its prescription, and the service will find the
                        nearest pharmacy and prepare your order. Enjoy.<br> With a service
                        like Pillzefy, you no longer have to waste time waiting and
                        finding the right medicine. With a service like Pillzefy,
                        you no longer have to waste time waiting and finding the
                        right medicine. All you need to do is enter the name of
                        the drug and its prescription, and the service will find
                        the nearest pharmacy and prepare your order. Enjoy. With
                        a service like Pillzefy, you no longer have to waste time
                        waiting and finding the right medicine.</p>
                    <a href="" class="content_15 btn btn-size-1 btn-animation">Xem thêm <i class="fal fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="news-sukien" style="background-image: url('img/bg-sk.png');">
        <div class="container">
            <a href="">
                <h2 class="title_15">TIN TỨC</h2>
            </a>
            <a href="">
                <h3 class="title_35">SỰ KIỆN DOANH NGHIỆP</h3>
            </a>
            <div class="swiper Swiper-news">
                <div class="swiper-wrapper">
                    <?php
                    $menu = [
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                        [
                            "src" =>"img/img1.png",
                            "title" => "Nguyên liệu",
                            "content" => "With a service like Pillzefy,
                             you no longer have to waste time waiting 
                             and finding the right medicine. All you 
                             need to do is enter the name of the drug
                              and its prescription, and the service 
                              will find the nearest pharmacy and prepare
                               your order. Enjoy. With a service like
                                Pillzefy, you no longer have to waste
                                 time waiting and finding the right
                                  medicine.",
                        ],
                       
                    ];
                    foreach ($menu as $key => $value) {
                    ?>
                        <div class="swiper-slide">
                            <div class="item-slider">
                                <a href="" class="item-img"><img src="<?php echo $value["src"] ?>" alt=""></a>
                                <div class="item-content">
                                    <h4 class="title_i-20"><?php echo $value["title"] ?></h4>
                                    <p class="content_15"><?php echo $value["content"] ?></p>
                                    <a href="" class="content_15">Xem thêm <i class="fal fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </div>
</div>
<?php include('./layouts/footer.php') ?>
<?= web_end() ?>