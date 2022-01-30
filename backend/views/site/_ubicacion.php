<?php

use yii\bootstrap5\Html; ?>

<div class="container-fluid mt-5">
    <h2 class="text-center">Estamos en...</h2>
    <div class="text-center">
        <?= Html::img(Yii::getAlias("@web/images/mapa.png"), [
            'class' => 'img-responsive w-75',
        ]) ?>
    </div>
</div>

