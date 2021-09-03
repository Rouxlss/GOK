<div class="lobby">
    <div class="lobby__header">
        <img class="header__bg" src="<?= IMG ?>/lobby/header.png" alt="">
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
        <div class="lobby__text">
            <img src="<?= IMG ?>/lobby/header-perfil.png" alt="">
        </div>
    </div>
    <div class="lobby__main">
        <img src="<?= IMG ?>/lobby/GOK_Chess_Ground_1.png" class="lobby__main_bg" alt="">
        <img src="<?= IMG ?>/lobby/f1.png" class="lobby__main_mask" alt="">
        <img src="<?= IMG ?>/lobby/ground.png" class="lobby__main_ground" alt="">
        <img src="<?= IMG ?>/lobby/GOK_Peon-negro.png" class="lobby__main_bg_character" alt="">
        <img src="<?= IMG ?>/lobby/GOK_Peon-negro.png" class="lobby__main_character" alt="">
        <img src="<?= IMG ?>/lobby/play-btn.png" class="lobby__play_btn" alt="">
        <div class="col-wapons col-left">
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/blade.png" class="weapon_img" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/helmet.png" class="weapon_img" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/overalls.png" class="weapon_img" alt="">
            </div>
        </div>
        <div class="col-wapons col-right">
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/shield.png" class="weapon_img" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/glove.png" class="weapon_img" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/boots.png" class="weapon_img" alt="">
            </div>
        </div>
    </div>
</div>

<?php

include './src/static/footer.view.php';

?>