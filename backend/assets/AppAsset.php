<?php

namespace backend\assets;

use yii\bootstrap5\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        ['https://fonts.googleapis.com', 'rel' => 'preconnect'],
        ['https://fonts.gstatic.com', 'rel' => 'preconnect', 'crossorigin'],
        ['https://fonts.googleapis.com/css2?family=Spartan:wght@100&display=swap', 'rel' => 'stylesheet'],
//        ['vendors/fontawesome/css/all.css', 'rel' => 'stylesheet'],
//        ['https://unpkg.com/aos@2.3.1/dist/aos.css', 'rel' => 'stylesheet'],
        'vendors/theme/css/styles.css',
        'css/site.css',

    ];
    public $js = [
//        'https://unpkg.com/feather-icons',
        'https://use.fontawesome.com/releases/v6.1.0/js/all.js',
//        'https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js',
//        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        'vendors/theme/js/scripts.js',
        'vendors/scroll_entrance/scroll-entrance.js',
        'js/site.js',
        'https://cdn.startbootstrap.com/sb-forms-latest.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class
    ];
}
