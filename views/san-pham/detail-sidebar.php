<?php
use yii\helpers\Url;

?>


<div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible"
     data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" style="animation-delay: 1800ms;">
    <aside class="sidebar">

        <div class="px-3 mt-4">
            <h4 class="text-dark text-uppercase font-weight-bold m-0 mb-3">Bài viết liên quan</h4>
            <div class="pb-2 mb-1">
                <?php foreach ($dalienquan as $item): ?>

                    <a href="#?"
                       class="text-black text-primary-hover font-weight-bold d-block" title="<?= htmlspecialchars($item->post_title) ?>"><?= \yii\helpers\StringHelper::truncate($item->post_title, 40, '...'); ?></a>
                    <a href="#?" class="text-dark d-block pb-3"><?= date('d/m/Y',strtotime($item->post_date)) ?>
                    </a>

                <?php endforeach; ?>
            </div>
        </div>


        <div class="py-1 clearfix">
            <hr class="my-2">
        </div>
        <div class="px-3 mt-4">
            <h3 class="text-color-quaternary text-uppercase font-weight-bold text-5 m-0">Menu</h3>
            <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="<?= Yii::$app->getHomeUrl() ?>">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="<?= Url::to(['/gioi-thieu']) ?>">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="<?= Url::to(['/san-pham']) ?>">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="<?= Url::to(['/tin-tuc']) ?>">Tin tức</a></li>
                <li class="nav-item"><a class="nav-link bg-transparent border-0" href="<?= Url::to(['/tu-lieu']) ?>">Tư liệu</a></li>
            </ul>
        </div>

        <div class="py-1 clearfix">
            <hr class="my-2">
            <div class="sidebar-social align-items-center justify-content-center">
                <h3 class="text-color-quaternary text-uppercase font-weight-bold text-5 m-0 pb-10">Chia sẻ</h3>
                <ul>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/hcmgis/">
                            <i class="lni lni-facebook-filled"> </i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/hcmgis/">
                            <i class="lni lni-linkedin-original"> </i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="javascript:void(0)">
                            <i class="lni lni-twitter-filled"> </i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="javascript:void(0)">
                            <i class="lni lni-instagram-filled"> </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
</div>