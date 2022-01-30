<?php

/* @var $this yii\web\View */

use yii\bootstrap5\Html;

$this->title = 'Ilusion';
?>
<div class="hero d-flex align-items-center justify-content-center">

    <div class="hero-content">
        <h1 class="hero-title text-center"><?= "ILUSION" ?></h1>
        <hr>
        <h3 class="hero-subtitle text-center"><?= "Peluquería y estética unisex" ?></h3>

    </div>
    <div class="hero-button">
        <?= Html::button('Pide cita') ?>
    </div>


</div>
<?php
    echo $this->render('_acerca');
    echo $this->render('_servicios');
    echo $this->render('_ubicacion');
    echo $this->render('_cita');
    echo $this->render('_social_networks');

?>
<?php

$js = <<< JS
$(function(){
    let navbar = $('#navbar');
    navbar.removeClass('bg-light');
    navbar.addClass('bg-transparent');
    var last_scroll_top = 35;
    var showing = false;
    $(".nav-link").addClass('text-white');
    window.addEventListener('scroll', function (){
        let scroll_top = window.scrollY;
        if(scroll_top > last_scroll_top ) {
            if(!showing){
                $(".nav-link").removeClass('text-white');
                navbar.removeClass('bg-transparent', 1000);
                navbar.addClass('bg-light', 1500);
                showing = true;
            }
        }else{
            $(".nav-link").addClass('text-white');
            navbar.removeClass('bg-light');
            navbar.addClass('bg-transparent');
            showing = false;
        }
    })
})
JS;
$this->registerJs($js);
?>
