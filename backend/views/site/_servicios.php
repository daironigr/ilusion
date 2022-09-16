<?php

use yii\bootstrap5\Html; ?>

<div class="container mt-5">
    <h2 class="text-center">Nuestros servicios</h2>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-left">
            Corte
            <br>
            <?= Html::img(Yii::getAlias("@web/images/haircut.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-top">
            Peinado
            <br>
            <?= Html::img(Yii::getAlias("@web/images/peinado.webp"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-right">
            Coloración
            <br>
            <?= Html::img(Yii::getAlias("@web/images/coloracion.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-left">
            Masajes
            <br>
            <?= Html::img(Yii::getAlias("@web/images/masajes.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-bottom">
            Peinado
            <br>
            <?= Html::img(Yii::getAlias("@web/images/peinado.webp"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-right">
            Uñas
            <br>
            <?= Html::img(Yii::getAlias("@web/images/nails.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
    </div>
</div>
