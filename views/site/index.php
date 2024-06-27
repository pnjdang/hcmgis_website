<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 7/31/2017
 * Time: 2:16 PM
 */

use yii\helpers\Url;
?>
<!-- BEGIN HEADER -->

<?php include('../views/layouts/header-home.php'); ?>

<!-- END HEADER -->



<!-- header hero -->
<div id="home" class="header-hero bg_cover" style="background-image: url(resources/images/header/banner-bg.png)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="header-hero-content text-center">
                    <!--                        <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">-->
                    <!--                            Basic - SaaS Landing Page-->
                    <!--                        </h3>-->
                    <h2 class="header-title wow fadeInUp text-uppercase" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        Trung tâm Ứng dụng Hệ thống<br> Thông tin Địa lý Thành phố Hồ Chí Minh
                    </h2>
                    <!--                        <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">-->
                    <!--                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed-->
                    <!--                            diam nonumy eirmod tempor-->
                    <!--                        </p>-->
                    <a href="#about" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">
                        Khám phá
                    </a>
                </div>
                <!-- header hero content -->
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="header-hero-image text-center wow fadeIn" data-wow-duration="2.3s" data-wow-delay="1.4s">
                    <img src="images/hcmgis_flyer.png" alt="hero" />
                </div>
                <!-- header hero image -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
    <div id="particles-1" class="particles"></div>
</div>
<!-- header hero end -->

<!--====== ABOUT PART START ======-->
<section id="about">
    <div class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mt-50 wow fadeInLeftBig" data-wow-duration="1s"data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <a href="<?= Yii::$app->urlManager->createUrl(['gioi-thieu']) ?>" >
                            <h3 class="title mb-50">
                                <span>QUÁ TRÌNH</span> HÌNH THÀNH VÀ PHÁT TRIỂN
                            </h3>
                            </a>
                        </div>
                        <!-- section title -->
                        <p class="text mb-50">
                            Trung tâm Ứng dụng Hệ thống Thông tin Địa lý TP.HCM (HCMGIS) là đơn vị sự nghiệp trực thuộc Sở Khoa học và Công nghệ TP.HCM được thành lập theo Quyết định số 134/2004/QĐ-UB ngày 14 tháng 5 năm 2004 của Ủy ban nhân dân Thành phố và Quyết định số 216/QĐ-UBND ngày 17 tháng 01 năm 2008 về việc bổ sung nhiệm vụ cho Trung tâm. Năm 2010, HCMGIS chuyển qua hoạt động theo Nghị định 115 của Chính phủ về tự chủ, tự chịu trách nhiệm của tổ chức khoa học và công nghệ công lập.
                        </p>
                        <a href="<?= Url::to(['/gioi-thieu']) ?>" class="main-btn mb-50">Xem thêm</a>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-4">
                    <div
                            class="about-image text-center wow fadeInRightBig"
                            data-wow-duration="1s"
                            data-wow-delay="0.5s"
                    >
                        <img src="resources/images/about/about.png" alt="about"/>
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>

</section>
<!--====== ABOUT PART ENDS ======-->

<!--====== SANPHAM PART START ======-->
<section id="sanpham">

    <div class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-150 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                        <div class="section-title">
                            <div class="line"></div>
                            <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/hcmgis-portal']) ?>" >
                            <h3 class="title text-uppercase">
                                <span>HCMGIS</span> portal
                            </h3>
                            </a>
                        </div>

                        <p class="text">
                            Cổng thông tin địa lý HCMGIS Portal cung cấp nền tảng tích hợp và chia sẻ dữ liệu không gian địa lý, tài liệu và bản đồ trong hệ thống HCMGIS (Hệ thống thông tin Địa lý Tp.HCM).
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/hcmgis-portal']) ?>" class="main-btn">Xem thêm</a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                        <img src="resources/images/sanpham/tablet-hcmgis-portal.png" alt="about">
                    </div>

                </div>
            </div>

        </div>

        <div class="about-shape-1">
            <img src="resources/images/about/about-shape-1.svg" alt="shape">
        </div>
    </div>


    <div class="about-area pt-70">
        <div class="about-shape-2">
            <img src="resources/images/about/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content ms-lg-auto mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                        <div class="section-title">
                            <div class="line"></div>
                            <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/hcmgis-map']) ?>" >
                            <h3 class="title text-uppercase">
                                <span>hcmgis</span> maps
                            </h3>
                            </a>
                        </div>

                        <p class="text">
                            HCMGIS Maps cung cấp nền tảng tìm kiếm, thống kê theo không gian và thuộc tính, hiển thị các lớp dữ liệu từ hệ thống HCMGIS Portal.
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/hcmgis-map']) ?>" class="main-btn">Xem thêm</a>
                    </div>

                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                        <img src="resources/images/sanpham/pc-hcmgis-maps.png" alt="about">
                    </div>

                </div>
            </div>

        </div>

    </div>


    <div class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-100 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                        <div class="section-title">
                            <div class="line"></div>
                            <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/hcmgis-storymaps']) ?>" >
                            <h3 class="title text-uppercase">
                                <span>hcmgis</span> storymaps
                            </h3>
                            </a>
                        </div>

                        <p class="text">
                            HCMGIS StoryMaps cung cấp nền tảng biên tập và trình bày chuỗi thông tin liên quan đến vị trí kết hợp thông tin mô tả, thông tin đa phương tiện và bản đồ.
                        </p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/hcmgis-storymaps']) ?>" class="main-btn">Xem thêm</a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRightBig;">
                        <img src="resources/images/sanpham/laptop-hcmgis-storymaps.png" alt="about">
                    </div>

                </div>
            </div>

        </div>

        <div class="about-shape-1">
            <img src="resources/images/about/about-shape-1.svg" alt="shape">
        </div>
    </div>

    <div class="text-center">
        <a href="<?= Url::to(['/san-pham']) ?>" class="main-btn mb-50">Các sản phẩm nổi bật khác</a>
    </div>

</section>
<!--====== SANPHAM PART ENDS ======-->

<!--====== BLOG PART START ======-->
<section id="tintuc" class="blog-area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center pb-35">
                    <div class="line m-auto"></div>
                    <a href="<?= Yii::$app->urlManager->createUrl(['tin-tuc']) ?>" ><h3 class="title">TIN TỨC & THÔNG BÁO</h3></a>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <?php if($model['tintuc'] != null):?>
                <?php foreach ($model['tintuc'] as $item):?>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                                <div class="blog-image" style="background-image: url('<?= $item->post_img == null ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : Yii::$app->homeUrl . $item->post_img ?>');background-size: cover; background-position: center; min-height: 200px; border-radius: 10px">
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><?= date('d/m/Y', strtotime($item->post_date)) ?></li>
                                    </ul>
                                    <a href="<?= Yii::$app->urlManager->createUrl(['tin-tuc/'. $item->post_name]) ?>" class="text">
                                        <?= ($item->post_title != null) ? $item->post_title : '' ?>
                                    </a>
                                    <a class="more" href="<?= Yii::$app->urlManager->createUrl(['tin-tuc/'. $item->post_name]) ?>">Xem chi tiết <i class="lni lni-chevron-right"> </i>
                                    </a>
                                </div>
                        </div>

                    </div>
                <?php endforeach;?>
            <?php endif; ?>
        </div>

    </div>

</section>
<!--====== BLOG PART ENDS ======-->

<!--====== BRAND PART START ======-->
<div class="brand-area pt-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                    <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="resources/images/brands/logo-ldld.png" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.2s"
                    >
                        <img src="resources/images/brands/logo_doan.png" alt="brand" />
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.3s"
                    >
                        <img src="resources/images/brands/logo_so.png" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.4s"
                    >
                        <img src="resources/images/brands/logo_hcmgis.png" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.5s"
                    >
                        <img
                                src="resources/images/brands/science.png"
                                alt="brand"
                        />
                    </div>
                    <!-- single logo -->
                </div>
                <!-- brand logo -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!--====== BRAND PART ENDS ======-->