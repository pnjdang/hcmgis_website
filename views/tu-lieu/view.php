<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 5/4/2021
 * Time: 10:51 AM
 */

?>

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

<section class="layout_padding">
    <div class="container">
        <div class="row margin_bottom_30">
            <!-- featured cont -->
            <div class="col-md-12 cont_theme_blog">
                <div class="full">
                    <h3><?= $model['post_title']?></h3>
                    <div class="date"><?= date('D d-m-Y', strtotime($model['post_date']))?></div>
                    <div class="post_content">
                        <?php if($model['ping_status'] == '1'):?>
                            <?= ($model['post_img'] != null) ? '<img class="head_img" src="'.$model['post_img'].'">' : '' ?>
                        <?php endif;?>
                        <?= $model['post_content'] ?>
                    </div>
                </div>
            </div>
            <!-- end featured cont -->
        </div>
    </div>
</section>
