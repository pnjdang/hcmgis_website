<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 4/22/2017
 * Time: 10:24 AM
 */

$params = Yii::$app->params;

$controller = Yii::$app->requestedAction->controller->id;

?>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">HCMGIS</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Trang
            </li>

            <li class="sidebar-item <?= $controller == 'site' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/site/index']) ?>">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>

            <li class="sidebar-item <?= $controller == 'posts' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/posts/index']) ?>">
                    <i class="fa fa-list-alt"></i> Bài viết
                </a>
            </li>

            <li class="sidebar-item <?= $controller == 'products' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/products/index']) ?>">
                    <i class="fa fa-file-text"></i> Sản phẩm
                </a>
            </li>

            <li class="sidebar-header">
                Media
            </li>

            <li class="sidebar-item <?= $controller == 'media' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/media/index','file_type' => 'Image']) ?>">
                    <i class="fa fa-image"></i> Images
                </a>
            </li>

            <li class="sidebar-item <?= $controller == 'main-banner' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/main-banner/index']) ?>">
                    <i class="fa fa-newspaper-o"></i> Banners
                </a>
            </li>

            <li class="sidebar-header">
                Danh mục
            </li>

            <li class="sidebar-item <?= $controller == 'post-type' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/post-type/index']) ?>">
                    <i class="fa fa-list"></i> Loại bài viết
                </a>
            </li>

            <li class="sidebar-item <?= $controller == 'file-type' ? 'active' : ''?>">
                <a class="sidebar-link" href="<?= Yii::$app->urlManager->createUrl(['cms/file-type/index']) ?>">
                    <i class="fa fa-list"></i> Loại file
                </a>
            </li>

        </ul>
    </div>
</nav>