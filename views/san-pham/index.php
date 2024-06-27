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

<!--====== tổng quan ======-->
<section id="tongquan" class="call-action">
    <div class="container mt-50 mb-50">
        <div class="row justify-content-center">
            <div class="">
                <div class="inner-content">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-xl-6 col-lg-6">
                                <div class="section-title mb-60">
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Dự án của chúng tôi</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="section-title mb-60">
                                    <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Bất kể bạn cần xây dựng một ứng dụng web quản lý hay một ứng dụng web phức tạp, chúng tôi sẽ tạo ra các dự án về GIS tuyệt vời, mạnh mẽ, trực quan và dễ sử dụng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
            </div>
        </div>
    </div>
    <div id="particles-gthieu" class="particles"></div>
</section>
<!--====== tổng quan end ======-->

<!--====== sanpham START ======-->
<section id="sanpham" class="portfolio-section pt-100">
    <div id="container" class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-btn-wrapper">
                    <button class="portfolio-btn active" data-filter="*">Tất cả</button>
                    <button class="portfolio-btn" data-filter=".hcmgis">Dịch vụ</button>
                    <button class="portfolio-btn" data-filter=".sanpham">Ứng dụng quản lý</button>
                    <button class="portfolio-btn" data-filter=".tool">Công cụ tiện ích</button>
                </div>
            </div>
        </div>
        <div class="row grid" style="position: relative; height: 893.349px;">


            <?php if ($model['hcmgis'] != null): ?>
                <?php foreach ($model['hcmgis'] as $i => $hcmgis): ?>
                    <div class="col-lg-4 col-md-6 grid-item hcmgis" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-img" style="border: orange 1px solid; border-radius: 10px">
                                <img src="<?= ($hcmgis->post_img == null) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $hcmgis->post_img?>" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4><?= ($hcmgis->post_title != null) ? $hcmgis->post_title : '' ?></h4>
                                    <p><?= ($hcmgis->post_content_filtered != null) ? $hcmgis->post_content_filtered : '' ?></p>
                                    <a href="<?= ($hcmgis->post_img == null) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $hcmgis->post_img?>" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                                    <a class="theme-btn border-btn" href="<?= Yii::$app->urlManager->createUrl(['san-pham/'.$hcmgis->post_name])?>"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if ($model['sanpham'] != null): ?>
                <?php foreach ($model['sanpham'] as $i => $hcmgis): ?>
                    <div class="col-lg-4 col-md-6 grid-item sanpham" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-img">
                                <img src="<?= ($hcmgis->post_img == null) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $hcmgis->post_img?>" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4><?= ($hcmgis->post_title != null) ? $hcmgis->post_title : '' ?></h4>
                                    <p><?= ($hcmgis->post_content_filtered != null) ? $hcmgis->post_content_filtered : '' ?></p>
                                    <a href="<?= ($hcmgis->post_img == null) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $hcmgis->post_img?>" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                                    <a class="theme-btn border-btn" href="<?= Yii::$app->urlManager->createUrl(['san-pham/'.$hcmgis->post_name])?>"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if ($model['tool'] != null): ?>
                <?php foreach ($model['tool'] as $i => $hcmgis): ?>
                    <div class="col-lg-4 col-md-6 grid-item tool" style="position: absolute; left: 0px; top: 0px;">
                        <div class="portfolio-item-wrapper">
                            <div class="portfolio-img">
                                <img src="<?= ($hcmgis->post_img == null) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $hcmgis->post_img?>" alt="">
                            </div>
                            <div class="portfolio-overlay">
                                <div class="overlay-content">
                                    <h4><?= ($hcmgis->post_title != null) ? $hcmgis->post_title : '' ?></h4>
                                    <p><?= ($hcmgis->post_content_filtered != null) ? $hcmgis->post_content_filtered : '' ?></p>
                                    <a href="<?= ($hcmgis->post_img == null) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $hcmgis->post_img?>" class="theme-btn border-btn glightbox"><i class="lni lni-zoom-in"> </i></a>
                                    <a class="theme-btn border-btn" href="<?= Yii::$app->urlManager->createUrl(['san-pham/'.$hcmgis->post_name])?>"> <i class="lni lni-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--====== sanpham END ======-->