<?php

use yii\bootstrap5\Html; ?>

<div class="container mt-5">
    <h2 class="text-center">Nuestros servicios</h2>
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-left">
            15 Años
            <br>
            <?= Html::img(Yii::getAlias("@web/images/girls.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-top">
            Boda
            <br>
            <?= Html::img(Yii::getAlias("@web/images/wedding.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-right">
            Niños
            <br>
            <?= Html::img(Yii::getAlias("@web/images/children.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-left">
            Bautizos
            <br>
            <?= Html::img(Yii::getAlias("@web/images/christening.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-bottom">
            Impresión
            <br>
            <?= Html::img(Yii::getAlias("@web/images/printing.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-3 align-self-center text-center" data-entrance="from-right">
            Montaje
            <br>
            <?= Html::img(Yii::getAlias("@web/images/editing.jpg"), [
                'class' => 'img-service',
                'style' => "width: 200px !important; height: 200px !important; object-fit: cover;"
            ]) ?>
        </div>
    </div>
</div>
