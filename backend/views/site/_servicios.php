<?php

use yii\bootstrap5\Html; ?>

<div class="container mt-5">
    <h2 class="text-center">Nuestros servicios</h2>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-aos="fade-down-right">
            Corte
            <br>
            <?= Html::img(Yii::getAlias("@web/images/haircut.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-aos="flip-left">
            Peinado
            <br>
            <?= Html::img(Yii::getAlias("@web/images/peinado.webp"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-aos="fade-down-left">
            Coloración
            <br>
            <?= Html::img(Yii::getAlias("@web/images/coloracion.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-aos="fade-up-right">
            Masajes
            <br>
            <?= Html::img(Yii::getAlias("@web/images/masajes.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-aos="flip-right">
            Peinado
            <br>
            <?= Html::img(Yii::getAlias("@web/images/peinado.webp"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-aos="fade-down-left">
            Uñas
            <br>
            <?= Html::img(Yii::getAlias("@web/images/nails.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
    </div>
</div>
