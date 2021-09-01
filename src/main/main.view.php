<div class="home">
    <img src="<?= IMG ?>/main-bg.png" alt="" class="home__bg">
    <div class="home__container">
        <div class="home__btn">
            <img src="<?= IMG ?>/menu.png" alt="">
        </div>
        <div class="home__menu d-none">
            <img src="<?= IMG ?>/menu-float.png" alt="">
            <ul class="menu__list">
                <li>INICIO</li>
                <li>MI PERFÍL</li>
                <li>MEDALLAS</li>
                <li>MUNDOS</li>
                <li>BATALLA EN LINEA</li>
                <li>AYUDA</li>
            </ul>
        </div>
        <div class="home__logo">
            <img src="<?= IMG ?>/boton-game-of-logo.png" alt="">
        </div>
        <div class="home__join">
            <img src="<?= IMG ?>/boton-game-of.png" alt="">
        </div>
        <div class="home__form d-none">
            <img class="form__container" src="<?= IMG ?>/marco-form.png" alt="">
            <!-- <img class="form__button" src="<?= IMG ?>/form-btn.png" alt=""> -->
        </div>
        <div class="home__video">
            <img class="video__container" src="<?= IMG ?>/video-container.png" alt="">
            <img class="video__video" src="<?= IMG ?>/video-img.png" alt="">
        </div>
    </div>
</div>

<?php

    include './src/static/footer.view.php';

?>