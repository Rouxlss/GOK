<div class="lobby">
    <?php include './src/static/menu.view.php'; ?>

    <div class="lobby__header">
        <img class="header__bg" src="<?= IMG ?>/lobby/header.png" alt="">

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
        <img src="" class="lobby__main_bg_character" alt="">
        <img src="<?= IMG ?>/lobby/left-arrow.png" class="lobby__main_left-arrow" alt="">
        <img src="" class="lobby__main_character" alt="">
        <img src="<?= IMG ?>/lobby/right-arrow.png" class="lobby__main_right-arrow" alt="">
        <img src="<?= IMG ?>/lobby/play-btn.png" class="lobby__play_btn" alt="">
        <div class="col-wapons col-left">
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/blade.png" class="weapon_img" alt="">
                <img src="<?= IMG ?>/lobby/nivel_herreria.png" class="nivel_herreria d-none" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/helmet.png" class="weapon_img" alt="">
                <img src="<?= IMG ?>/lobby/nivel_herreria.png" class="nivel_herreria d-none" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/overalls.png" class="weapon_img" alt="">
                <img src="<?= IMG ?>/lobby/nivel_herreria.png" class="nivel_herreria d-none" alt="">
            </div>
        </div>
        <div class="col-wapons col-right">
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/shield.png" class="weapon_img" alt="">
                <img src="<?= IMG ?>/lobby/nivel_herreria.png" class="nivel_herreria d-none" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/glove.png" class="weapon_img" alt="">
                <img src="<?= IMG ?>/lobby/nivel_herreria.png" class="nivel_herreria d-none" alt="">
            </div>
            <div class="weapon">
                <img src="<?= IMG ?>/lobby/rune.png" class="rune" alt="">
                <img src="<?= IMG ?>/lobby/boots.png" class="weapon_img" alt="">
                <img src="<?= IMG ?>/lobby/nivel_herreria.png" class="nivel_herreria d-none" alt="">
            </div>
        </div>
        <div class="lobby__stats-01">
            <img src="<?= IMG ?>/lobby/stats-01.png" class="bg__stats-01" alt="">
            <div class="stats01__pic">
                <img src="<?= IMG ?>/lobby/stats-circle.png" class="bg__stats-pic" alt="">
                <img src="<?= IMG ?>/lobby/peon-blanco-pp.png" class="stats-pp" alt="">
            </div>
            <div class="stats01__medal">
                <img src="<?= IMG ?>/lobby/stats-circle.png" class="bg__stats-medal" alt="">
                <img src="<?= IMG ?>/medals/01.Medalla_Ases.png" class="stats-medal" alt="">
            </div>
        </div>
        <div class="lobby__stats-02">
            <img src="<?= IMG ?>/lobby/stats-02.png" class="bg__stats-02" alt="">
            <div class="gold stat">
                <img src="<?= IMG ?>/lobby/golden_bag.png" class="golden_bag" alt="">
                <p>465</p>
            </div>
            <div class="potion stat">
                <img src="<?= IMG ?>/lobby/potion.png" class="potion" alt="">
                <p>05</p>
            </div>
        </div>
    </div>
</div>

<script src="./public/assets/js/lobby.js"></script>

<?php

include './src/static/footer.view.php';

?>