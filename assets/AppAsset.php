<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot/resources';
    public $baseUrl = '@web/resources';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $css = [
        'css/global/font-awesome.min.css',
       'css/bootstrap.min.css',
        'css/style.css',
        'css/animate.css',
        'css/glightbox.min.css',
        'css/lineIcons.css',
        'css/tiny-slider.css',
        //'css/iLightBox.min.css',
//        'css/lightcase.css'
    ];
    public $js = [
        'https://code.jquery.com/jquery-2.2.4.js',
        'js/global/bootstrap.min.js',
        'js/bootstrap.bundle.min.js',
        'js/wow.min.js',
        'js/glightbox.min.js',
        'js/count-up.min.js',
        'js/particles.min.js',
        'js/imagesloaded.min.js',
        'js/isotope.min.js',
        'js/main.js',
        'js/tiny-slider.js',
       //'js/custom.js',
        //'js/pdf.min.js',
//        'js/global/jquery.ilightbox.js',
//        'js/global/jquery.slimscroll.min.js',
//        'js/global/jquery.blockui.min.js',
//        'js/global/bootstrap-switch.min.js',
//        'js/global/icheck.min.js',
//        'js/global/form-icheck.min.js',
//        'js/global/app.min.js',
//        'js/profile.min.js',
//        'js/layout.min.js',
//        'js/demo.min.js',
//        'js/quick-sidebar.min.js',
        //  'js/leaflet/prunecluster.js',
        // 'js/leaflet/jquery.geocomplete.js',
//        'js/bootbox.min.js',
//        'js/ui-function.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];

}
