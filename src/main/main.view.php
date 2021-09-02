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
        <div class="form__bg d-none">
            <div class="home__form">
                <img class="form__close" src="<?= IMG ?>/close.png" alt="form__close">
                <img class="form__container" src="<?= IMG ?>/marco-form.png" alt="form__container">
                <div class="form__group">
                    <input id="nombre_Apellido" type="text" placeholder="Nombre y apellido" class="form__input input_text">
                    <input id="email" type="email" placeholder="Correo eletronico" class="form__input input_text">
                    <input id="password" type="password" placeholder="Contraseña" class="form__input input_text">
                    <input id="number" type="number" placeholder="Edad" class="form__input input_text">
                    <div class="form__options">
                        <div class="form__control">
                            <input id="terminos" type="checkbox" id="terminos" class="form__input inputtext">
                            <label for="terminos">Aceptar terminos y condiciones</label>
                        </div>
                        <div id="generos" class="form__control form__radios">
                            <div class="radio">
                                <label for="M">M</label>
                                <input type="radio" id="M" value="M" name="genero" class="form__input">
                            </div>
                            <div class="radio">
                                <label for="F">F</label>
                                <input type="radio" id="F" value="F" name="genero" class="form__input">
                            </div>
                        </div>
                    </div>
                </div>
                <img class="form__button" src="<?= IMG ?>/form-btn.png" alt="">
            </div>
        </div>
        <div class="home__video">
            <img class="video__close d-none" src="<?= IMG ?>/close.png" alt="form__close">
            <img class="video__container" src="<?= IMG ?>/video-container.png" alt="">
            <img class="video__video" src="<?= IMG ?>/video-img.png" alt="">
        </div>
    </div>
</div>

<div class="modes">
    <img src="<?= IMG ?>/second-bg.png" alt="" class="modes__bg">
    <div class="modes__history">
        <img src="<?= IMG ?>/history-mode-bg.png" alt="" class="history__bg">
        <img src="<?= IMG ?>/h-mode-title.png" alt="" class="history__title">
        <div class="modes-toplay">
            <div class="mode unlocked">
                <img src="<?= IMG ?>/recluta.png" alt="" class="mode__img">
            </div>
            <div class="mode lock">
                <img src="<?= IMG ?>/guerrero.png" alt="" class="mode__img">
            </div>
            <div class="mode lock">
                <img src="<?= IMG ?>/legionario.png" alt="" class="mode__img">
            </div>
        </div>
        <img src="<?= IMG ?>/rangos-text.png" alt="" class="history__text">
    </div>
    <div class="modes__other">
        <div class="other__space">
            <img src="<?= IMG ?>/other.png" alt="other__bg" class="other__bg">
            <img src="<?= IMG ?>/medal_icon.png" alt="other__icon" class="other__icon">
            <img src="<?= IMG ?>/medallas.png" alt="other__text" class="other__text">
        </div>
        <div class="other__space">
            <img src="<?= IMG ?>/other.png" alt="other__bg" class="other__bg">
            <img src="<?= IMG ?>/mundo1.png" alt="other__icon" class="other__icon">
            <img src="<?= IMG ?>/mundos.png" alt="other__text" class="other__text">
        </div>
    </div>
    <div class="online">
        <img src="<?= IMG ?>/reina-trono.png" alt="queen" class="queen">
        <img src="<?= IMG ?>/batalla-en-linea.png" alt="batalla-en-linea" class="battle-text">
    </div>
</div>

<?php

include './src/static/footer.view.php';

?>