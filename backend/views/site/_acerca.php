<?php

use yii\bootstrap5\Html; ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col">
            <?= Html::img(
                Yii::getAlias('@web/images/personaje.png'),
                [
                    'class' => 'w-75',
                    'data-aos' => 'fade-right'
                ]
            ) ?>
        </div>
        <div class="col align-self-center" data-aos="fade-left">
            <h2>ILUSION</h2>
                <p style="text-align: justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                    Aldus PageMaker including versions of Lorem Ipsum.
                </p>
        </div>
    </div>

</div>

