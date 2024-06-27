<?php

use yii\helpers\Url;

?>

<div class="sidebar-left">
    <div class="sidebar-close">
        <a class="close" href="#close"><i class="lni lni-close"></i></a>
    </div>
    <div class="sidebar-content">
        <div class="sidebar-logo">
            <a href="<?= Yii::$app->getHomeUrl()?>"><img src="resources/images/logo/logo-bot.png" alt="Logo" /></a>
        </div>
<!--        <p class="text">Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro.</p>-->
        <!-- logo -->
        <div class="sidebar-menu">
            <h5 class="menu-title">Menu</h5>
            <ul>
                <li><a href="<?= Yii::$app->getHomeUrl() ?>">Trang chủ</a></li>
                <li><a href="<?= Url::to(['/gioi-thieu']) ?>">Giới thiệu</a></li>
                <li><a href="<?= Url::to(['/san-pham']) ?>">Sản phẩm</a></li>
                <li><a href="<?= Url::to(['/tin-tuc']) ?>">Tin tức</a></li>
                <li><a href="<?= Url::to(['/tu-lieu']) ?>">Tư liệu</a></li>
            </ul>
        </div>
        <!-- menu -->
        <div class="sidebar-social align-items-center justify-content-center">
            <h5 class="social-title">Follow Us On</h5>
            <ul>
                <li>
                    <a href="https://www.facebook.com/hcmgis/">
                        <i class="lni lni-facebook-filled"> </i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/company/hcmgis/">
                        <i class="lni lni-linkedin-original"> </i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="lni lni-twitter-filled"> </i>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="lni lni-instagram-filled"> </i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar social -->
    </div>
    <!-- content -->
</div>
<div class="overlay-left"></div>