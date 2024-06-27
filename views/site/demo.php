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

<?php include('../views/layouts/header.php'); ?>

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
                    <img src="resources/images/header/dichte.png" alt="hero" />
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

<!--====== SERVICES PART START ======-->
<section id="features" class="services-area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center pb-40">
                    <div class="line m-auto"></div>
                    <h3 class="title">
                        NỀN TẢNG DỊCH VỤ HCMGIS
                    </h3>
                </div>
                <!-- section title -->
            </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div
                        class="single-services text-center mt-30 wow fadeIn"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                >
                    <div class="services-icon">
                        <img
                                class="shape"
                                src="resources/images/services/services-shape.svg"
                                alt="shape"
                        />
                        <img
                                class="shape-1"
                                src="resources/images/services/services-shape-1.svg"
                                alt="shape"
                        />
                        <i class="lni lni-baloon"> </i>
                    </div>
                    <div class="services-content mt-30">
                        <h4 class="services-title">
                            <a href="javascript:void(0)">HCMGIS PORTAL</a>
                        </h4>
                        <p class="text">
                            Nền tảng tích hợp và chia sẻ dữ liệu HCMGIS.
                        </p>
                        <a class="more" href="javascript:void(0)"
                        >Xem thêm… <i class="lni lni-chevron-right"> </i>
                        </a>
                    </div>
                </div>
                <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div
                        class="single-services text-center mt-30 wow fadeIn"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                >
                    <div class="services-icon">
                        <img
                                class="shape"
                                src="resources/images/services/services-shape.svg"
                                alt="shape"
                        />
                        <img
                                class="shape-1"
                                src="resources/images/services/services-shape-2.svg"
                                alt="shape"
                        />
                        <i class="lni lni-cog"> </i>
                    </div>
                    <div class="services-content mt-30">
                        <h4 class="services-title">
                            <a href="javascript:void(0)">HCMGIS MAPS</a>
                        </h4>
                        <p class="text">
                            Nền tảng bản đồ HCMGIS.
                        </p>
                        <a class="more" href="javascript:void(0)"
                        >Xem thêm… <i class="lni lni-chevron-right"> </i>
                        </a>
                    </div>
                </div>
                <!-- single services -->
            </div>
            <div class="col-lg-4 col-md-7 col-sm-8">
                <div
                        class="single-services text-center mt-30 wow fadeIn"
                        data-wow-duration="1s"
                        data-wow-delay="0.8s"
                >
                    <div class="services-icon">
                        <img
                                class="shape"
                                src="resources/images/services/services-shape.svg"
                                alt="shape"
                        />
                        <img
                                class="shape-1"
                                src="resources/images/services/services-shape-3.svg"
                                alt="shape"
                        />
                        <i class="lni lni-bolt-alt"> </i>
                    </div>
                    <div class="services-content mt-30">
                        <h4 class="services-title">
                            <a href="javascript:void(0)">HCMGIS GEOSURVEY</a>
                        </h4>
                        <p class="text">
                            Nền tảng thu thập dữ liệu thực địa.
                        </p>
                        <a class="more" href="javascript:void(0)"
                        >Xem thêm… <i class="lni lni-chevron-right"> </i>
                        </a>
                    </div>
                </div>
                <!-- single services -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>
<!--====== SERVICES PART ENDS ======-->


<!--====== ABOUT PART START ======-->
<section id="about">
    <div class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-50 wow fadeInLeftBig" data-wow-duration="1s"data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title mb-50">
                                <span>QUÁ TRÌNH</span> HÌNH THÀNH VÀ PHÁT TRIỂN
                            </h3>
                        </div>
                        <!-- section title -->
                        <p class="text mb-50">
                            Trung tâm Ứng dụng Hệ thống Thông tin Địa lý TP.HCM (HCMGIS) là đơn vị sự nghiệp trực thuộc Sở Khoa học và Công nghệ TP.HCM được thành lập theo Quyết định số 134/2004/QĐ-UB ngày 14 tháng 5 năm 2004 của Ủy ban nhân dân Thành phố và Quyết định số 216/QĐ-UBND ngày 17 tháng 01 năm 2008 về việc bổ sung nhiệm vụ cho Trung tâm. Năm 2010, HCMGIS chuyển qua hoạt động theo Nghị định 115 của Chính phủ về tự chủ, tự chịu trách nhiệm của tổ chức khoa học và công nghệ công lập.
                        </p>
                        <a href="<?= Url::to(['/gioi-thieu']) ?>" class="main-btn mb-50">Xem thêm</a>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                            class="about-image text-center wow fadeInRightBig"
                            data-wow-duration="1s"
                            data-wow-delay="0.5s"
                    >
                        <img src="images/hcmgis_flyer.png" alt="about"/>
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="resources/images/about/about-shape-1.svg" alt="shape"/>
        </div>
    </div>

</section>
<!--====== ABOUT PART ENDS ======-->

<!--====== sanpham START ======-->
<section id="sanpham" class="portfolio-section pt-130">
    <div id="container" class="container">
        <div class="row align-items-end">
            <div class="col-xl-6 col-lg-6">
                <div class="section-title mb-60">
                    <span class="wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Sản phẩm</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Dự án của chúng tôi</h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="section-title mb-60">
                    <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Chúng tôi đã tạo ra các dự án về GIS tuyệt vời mạnh mẽ, trực quan để sử dụng. Bất kể bạn đang xây dựng một ứng dụng web quản lý hay một ứng dụng web phức tạp.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="portfolio-btn-wrapper">
                    <button class="portfolio-btn active" data-filter="*">Tất cả</button>
                    <button class="portfolio-btn" data-filter=".branding">Dịch vụ</button>
                    <button class="portfolio-btn" data-filter=".marketing">Ứng dụng quản lý</button>
                    <button class="portfolio-btn" data-filter=".web">Công cụ tiện ích</button>
                    <button class="portfolio-btn" data-filter=".graphic">Graphic Design</button>
                </div>
            </div>
        </div>
        <div class="row grid" style="position: relative; height: 893.349px;">
            <div class="col-lg-4 col-md-6 grid-item branding marketing" style="position: absolute; left: 0px; top: 0px;">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <img src="resources/images/sanpham/app1.jpg" alt="">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h4>Product Design</h4>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.</p>
<!--                            <a href="resources/images/sanpham/pf1.jpg" class="theme-btn border-btn glightbox">Full View</a>-->
                            <a href="resources/images/sanpham/app1.jpg" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                            <a class="theme-btn border-btn" href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item marketing web" style="position: absolute; left: 437.335px; top: 0px;">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <img src="resources/images/sanpham/app3.jpg" alt="">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h4>Product Design</h4>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.</p>
                            <a href="resources/images/sanpham/app3.jpg" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                            <a class="theme-btn border-btn" href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item web graphic" style="position: absolute; left: 874.67px; top: 0px;">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <img src="resources/images/sanpham/app4.png" alt="">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h4>Product Design</h4>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.</p>
                            <a href="resources/images/sanpham/app4.png" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                            <a class="theme-btn border-btn" href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item branding web" style="position: absolute; left: 0px; top: 339.991px;">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <img src="resources/images/sanpham/pf4.jpg" alt="">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h4>Product Design</h4>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.</p>
                            <a href="resources/images/sanpham/pf4.jpg" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                            <a class="theme-btn border-btn" href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item web marketing" style="position: absolute; left: 874.67px; top: 390.807px;">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <img src="resources/images/sanpham/app5.png" alt="">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h4>Product Design</h4>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.</p>
                            <a href="resources/images/sanpham/app5.png" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                            <a class="theme-btn border-btn" href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grid-item marketing graphic" style="position: absolute; left: 437.335px; top: 507px;">
                <div class="portfolio-item-wrapper">
                    <div class="portfolio-img">
                        <img src="resources/images/sanpham/app6.jpg" alt="">
                    </div>
                    <div class="portfolio-overlay">
                        <div class="overlay-content">
                            <h4>Product Design</h4>
                            <p>We Crafted an awesome design library that is robust and intuitive to business presentation.</p>
                            <a href="resources/images/sanpham/app6.jpg" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                            <a class="theme-btn border-btn" href="javascript:void(0)"> <i class="lni lni-link"> </i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== sanpham END ======-->

<!--====== BLOG PART START ======-->
<section id="blog" class="blog-area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-35">
                    <div class="line"></div>
                    <h3 class="title"><span>Our Recent</span> Blog Posts</h3>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7">
                <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s"
                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="blog-image">
                        <img src="resources/images/blog/blog-1.jpg" alt="blog">
                    </div>
                    <div class="blog-content">
                        <ul class="meta">
                            <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                            <li>03 June, 2023</li>
                        </ul>
                        <a href="javascript:void(0)" class="text">
                            Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod
                            tempor invidunt labore.
                        </a>
                        <a class="more" href="javascript:void(0)">Learn More <i class="lni lni-chevron-right"> </i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s"
                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="blog-image">
                        <img src="resources/images/blog/blog-2.jpg" alt="blog">
                    </div>
                    <div class="blog-content">
                        <ul class="meta">
                            <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                            <li>03 June, 2023</li>
                        </ul>
                        <a href="javascript:void(0)" class="text">
                            Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod
                            tempor invidunt labore.
                        </a>
                        <a class="more" href="javascript:void(0)">Learn More <i class="lni lni-chevron-right"> </i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s"
                     style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s; animation-name: fadeIn;">
                    <div class="blog-image">
                        <img src="resources/images/blog/blog-3.jpg" alt="blog">
                    </div>
                    <div class="blog-content">
                        <ul class="meta">
                            <li>Posted By: <a href="javascript:void(0)">Admin</a></li>
                            <li>03 June, 2023</li>
                        </ul>
                        <a href="javascript:void(0)" class="text">
                            Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod
                            tempor invidunt labore.
                        </a>
                        <a class="more" href="javascript:void(0)">Learn More <i class="lni lni-chevron-right"> </i>
                        </a>
                    </div>
                </div>

            </div>
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
                        <img src="resources/images/brands/uideck.svg" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.2s"
                    >
                        <img src="resources/images/brands/ayroui.svg" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.3s"
                    >
                        <img src="resources/images/brands/graygrids.svg" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.4s"
                    >
                        <img src="resources/images/brands/lineicons.svg" alt="brand"/>
                    </div>
                    <!-- single logo -->
                    <div
                            class="single-logo mt-30 wow fadeIn"
                            data-wow-duration="1.5s"
                            data-wow-delay="0.5s"
                    >
                        <img
                                src="resources/images/brands/ecommerce-html.svg"
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