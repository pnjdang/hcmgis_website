<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 5/4/2021
 * Time: 10:51 AM
 */

use yii\bootstrap4\LinkPager;
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
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Tin tức & Thông báo</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="section-title mb-60">
                                    <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Cung cấp tin tức mới nhất về các ứng dụng GIS, giải pháp thông minh, dự án quy hoạch, và sự kiện liên quan đến lĩnh vực GIS.</p>
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

<section id="linhvuc" class="video-counter pt-20">
    <div class="container">
        <?php foreach ($posts as $i => $baiviet): ?>
        <?php
        if(is_link($baiviet->post_img)){
            $image = $baiviet->post_img;
        } elseif(!file_exists($baiviet->post_img)){
            $image = Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg';
        } else {
            $image = Yii::$app->homeUrl . $baiviet->post_img;
        }
        ?>
        <div class="row pb-10">
            <div class="col-lg-6 order-lg-last">
                <div
                        class="counter-wrapper mt-50 wow fadeIn"
                        data-wow-duration="1s"
                        data-wow-delay="0.8s"
                >
                    <div class="counter-content">
                        <div class="section-title mb-20">
                            <div class="line"></div>
                            <h3 class="title"><a
                                        href="<?= Yii::$app->urlManager->createUrl(['tin-tuc/'. $baiviet->post_name]) ?>"
                                        style="cursor: pointer; outline: 0px;"><?= ($baiviet->post_title != null) ? $baiviet->post_title : '' ?></a></span></h3>
                            <p class="date"><i class="fa fa-calendar"></i> <?= date('D d-m-Y', strtotime($baiviet->post_date)) ?></p>
                        </div>
                        <!-- section title -->
                        <div class="row white_fonts">
                            <?= ($baiviet->post_content_filtered != null) ? $baiviet->post_content_filtered : '' ?>
                        </div>
                    </div>
                    <!-- counter content -->
                    <!-- row -->
                </div>
                <!-- counter wrapper -->
            </div>
            <div class="col-lg-6">
                <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img class="dots" src="<?= Yii::$app->homeUrl .'resources/images/video/dots_baiviet.png'?>" alt="dots"/>
                    <div class="video-wrapper">
                        <div class="video-image">
                            <img src="<?= $image ?>" alt="video"/>
                        </div>
                    </div>
                    <!-- video wrapper -->
                </div>
                <!-- video content -->
            </div>
        </div>
        <?php endforeach; ?>
        <?= LinkPager::widget([
            'pagination' => $pagination,
//                    'linkOptions' => ['href' => 'tin-tuc111111','class' => 'page-link']
        ]); ?>
        <!-- row -->
    </div>
    <!-- container -->
</section>
