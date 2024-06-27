<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 4/22/2017
 * Time: 10:27 AM
 */
use yii\helpers\Url;
?>
<!--====== HEADER PART START ======-->
<header class="header-area">
    <div class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?= Yii::$app->getHomeUrl()?>">
                            <img src="<?= Yii::$app->getHomeUrl()?>resources/images/logo/logo.png" alt="Logo" />
                        </a>
                        <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                        >
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div
                                class="collapse navbar-collapse sub-menu-bar"
                                id="navbarSupportedContent"
                        >
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="<?= Yii::$app->getHomeUrl() ?>">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="<?= Url::to(['/gioi-thieu']) ?>">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="<?= Url::to(['/san-pham']) ?>">Sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="<?= Url::to(['/tin-tuc']) ?>">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="<?= Url::to(['/tu-lieu']) ?>">Tư liệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#footer">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar collapse -->

                        <div class="navbar-item d-none d-lg-inline-block">
                            <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu text-white"></i></a>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->

</header>
<!--====== HEADER PART ENDS ======-->