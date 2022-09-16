<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        /* Ensure elements are hidden while ScrollEntrance is loading */
        [data-entrance] { visibility: hidden; }
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!--<header>-->
    <?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-light bg-light fixed-top',
//        ],
//        'id' => 'navbar',
//    ]);
//
//    $menuItems = [
//        ['label' => 'Servicios', 'url' => ['/site/index']],
//        ['label' => 'Conócenos', 'url' => ['/site/index']],
//        ['label' => 'Encuéntranos', 'url' => ['/site/index']],
//        ['label' => 'Blog', 'url' => ['/site/index']],
//        ['label' => 'Reserva', 'url' => ['/site/index']],
//    ];
//    echo "<div class='d-flex mr-auto'>";
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-lg-0'],
//        'items' => $menuItems,
//    ]);
//    echo "</div>";
//    NavBar::end();
    ?>
<!--</header>-->

<body id="page-top">
<!--<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">-->
<!--    <div class="container px-4 px-lg-5">-->
<!--        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            Menu-->
<!--            <i class="fas fa-bars"></i>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarResponsive">-->
<!--            <ul class="navbar-nav ms-auto">-->
<!--                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->


        <?= $content ?>

</body>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
