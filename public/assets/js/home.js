home__btn = document.querySelector('.home__btn');
home__menu = document.querySelector('.home__menu');

home__form = document.querySelector('.home__form');
form__bg = document.querySelector('.form__bg');
home__join = document.querySelector('.home__join');
form__close = document.querySelector('.form__close');

video__close = document.querySelector('.video__close');
video__video = document.querySelector('.video__video');
home__video = document.querySelector('.home__video');

window.addEventListener('click', function(e){   

    if (home__btn.contains(e.target) || home__menu.contains(e.target)){
        home__menu.classList.remove('d-none');
    } else{
        home__menu.classList.add('d-none');
    }

    if (home__join.contains(e.target)){
        form__bg.classList.remove('d-none');
    } else if (form__close.contains(e.target)){
        form__bg.classList.add('d-none');
    }
    
});

video__video.addEventListener('click', ()=> {
    home__video.classList.add('video__play');
    video__close.classList.remove('d-none');
})

video__close.addEventListener('click', ()=> {
    home__video.classList.remove('video__play');
    video__close.classList.add('d-none');
})


let modes = document.querySelectorAll('.mode');
let modes_locked = document.querySelectorAll('.lock');

modes.forEach(mode => {
    if(mode.classList.contains('lock')){
        mode.innerHTML += `<img src="public/assets/img/candado.png" alt="" class="locked">`;
    }
});

modes_locked.forEach(mode => {
    console.log('a');
    mode.addEventListener('click', ()=>{
        mode.classList.add('no-selectable')
        setTimeout(() => {
            mode.classList.remove('no-selectable')
        }, 500);
    })
});

//Boton para inscribir usuarios
let submitUser = document.querySelector(".form__button");
submitUser.addEventListener("click", ()=> {
    //Obtener valores
    let nombre_Apellido = document.querySelector("#nombre_Apellido").value;
    let email = document.querySelector("#email").value;
    let password = document.querySelector("#password").value;
    let number = document.querySelector("#number").value;
    let terminos = document.querySelector("#terminos");
    let generos = document.querySelectorAll("#generos input");
    let genero_value;

    generos.forEach(genero => {
        if(genero.checked == true) {
            genero_value = genero.value;
        }
    });

    // console.log(nombre_Apellido, email, password, number, terminos, genero_value);

    if(terminos.checked == true) {
        $.ajax ({
            type: "POST",
            url: "./config/ajax/user.ajax.php",
            data: {
                action: 'Registrar',
                nombre_Apellido,
                email,
                password,
                number,
                genero_value
            },
    
        success: function (data) {
          console.log(data);
          nombre_Apellido = "";
          email = "";
          password = "";
          number = "";
          terminos.checked = false;
          generos.checked = false;
          form__bg.classList.add('d-none');
        },
    
        error: function (xhr, statusText, err) {
          alert("error" + xhr.status);
        }
    
      })
    }
});