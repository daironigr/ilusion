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
        ['vendors/fontawesome/css/all.css', 'rel' => 'stylesheet'],
        ['https://unpkg.com/aos@2.3.1/dist/aos.css', 'rel' => 'stylesheet'],
        'css/site.css',

    ];
    public $js = [
        'https://unpkg.com/feather-icons',
        'https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        'js/site.js'
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class
    ];
}
