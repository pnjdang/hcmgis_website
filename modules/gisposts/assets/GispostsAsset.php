<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\gisposts\assets;

use yii\web\AssetBundle;

class GispostsAsset extends AssetBundle
{
//    public $basePath = '@webroot/resources/';
//    public $baseUrl = '@web/resources/';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];

    public $sourcePath = '@app/modules/gisposts/assets';

    public $css = [
        'css/font-awesome.min.css',
        'bootstrap/v5.3/css/bootstrap.min.css',
        'css/app.css',
    ];
    public $js = [
        'https://code.jquery.com/jquery-3.7.1.min.js',
        'bootstrap/v5.3/js/bootstrap.min.js',
        'bootstrap/v5.3/js/bootstrap.bundle.min.js',
        'js/app1.js',
        //'js/jquery.vmap.js',
        //'js/jquery.vmap.world.js',
        //'js/jquery.vmap.asia.js',
        //'js/jquery.vmap.sampledata.js',
        //'js/app.js.map',

    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}
