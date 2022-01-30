<?php

use yii\bootstrap5\Html; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="float-start">
                <h2 class="text-center">Síguenos</h2>
                <div style="font-size: 2.5rem">
                    <i class="fab fa-facebook text-primary"></i>
                    <i class="fab fa-instagram" style="color: palevioletred"></i>
                    <i class="fab fa-youtube" style="color: red"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="float-end">
                <h2 class="text-center">Descarga nuestra App</h2>
                <?= Html::img(Yii::getAlias("@web/images/appstore.png"), [
                    'style' => 'width: 175px !important; height: 60px !important'
                ]) ?>
                <?= Html::img(Yii::getAlias("@web/images/google-play.png"), [
                    'style' => 'width: 175px !important; height: 60px !important'
                ]) ?>
            </div>
        </div>
    </div>



</div>
