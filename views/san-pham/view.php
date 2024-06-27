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
                            <div class="col-xl-9 col-lg-9">
                                <div class="section-title mb-60">
                                    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><?= $model['post_title']?></h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="section-title mb-60">
                                    <p class="wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"><?= date('D d-m-Y', strtotime($model['post_date']))?></p>
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
            <div class="col-md-8 cont_theme_blog">
                <div class="full">
                    <div class="post_content pt-10">
                        <?php if($model['ping_status'] == '1'):?>
                            <?= ($model['post_img'] != null) ? '<img class="head_img" src="'.$model['post_img'].'">' : '' ?>
                        <?php endif;?>
                        <?= $model['post_content'] ?>
                    </div>
                </div>
            </div>
            <?php include('detail-sidebar.php') ?>
            <!-- end featured cont -->
        </div>
    </div>
</section>
