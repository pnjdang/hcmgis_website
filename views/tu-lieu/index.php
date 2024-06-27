<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 5/4/2021
 * Time: 10:51 AM
 */

use yii\widgets\LinkPager;
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
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Tư liệu</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="section-title mb-60">
                                    <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Trang tư liệu HCMGIS với kho tàng kiến thức GIS phong phú và cập nhật nhất!</p>
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

<section id="team" class="team-area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title text-center pb-30">
                    <div class="line m-auto"></div>
                    <h3 class="title">Tư liệu</h3>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <?php if ($posts['doc'] != null): ?>
                <?php foreach ($posts['doc'] as $i => $sanpham): ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="blog-image" style="background-image: url('<?= ($sanpham->post_img == null || !file_exists($sanpham->post_img)) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $sanpham->post_img?>');background-size: cover; background-position: center; min-height: 200px; border-radius: 10px">
                            </div>
                            <div class="blog-content">
                                <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/'.$sanpham->post_name])?>" class="text text-center"><?= ($sanpham['post_title'] != null) ? $sanpham['post_title'] : '' ?></a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>


        </div>

    </div>

</section>

<section id="hinhanh" class="blog-area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="section-title text-center pb-30">
                    <div class="line m-auto"></div>
                    <h3 class="title">Hình ảnh</h3>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            <?php if ($posts['pic'] != null): ?>
                <?php foreach ($posts['pic'] as $i => $sanpham): ?>
                    <div class="col-lg-4 col-md-7">
                        <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <div class="blog-image" style="background-image: url('<?= ($sanpham->post_img == null || !file_exists($sanpham->post_img)) ? Yii::$app->homeUrl . 'uploads/app/images/HCMGIS_demo.jpg' : $sanpham->post_img?>');background-size: cover; background-position: center; min-height: 200px; border-radius: 10px">
                            </div>
                            <div class="blog-content">
                                <a href="<?= Yii::$app->urlManager->createUrl(['san-pham/'.$sanpham->post_name])?>" class="text text-center"><?= ($sanpham['post_title'] != null) ? $sanpham['post_title'] : '' ?></a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>

    </div>

</section>
