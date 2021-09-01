home__btn = document.querySelector('.home__btn');
home__menu = document.querySelector('.home__menu');

home__form = document.querySelector('.home__form');
home__join = document.querySelector('.home__join');

window.addEventListener('click', function(e){   

    if (home__btn.contains(e.target) || home__menu.contains(e.target)){
        home__menu.classList.remove('d-none');
    } else{
        home__menu.classList.add('d-none');
    }

    
});

home__join.addEventListener('click', ()=> {
    home__form.classList.remove('d-none');
})

home__form.addEventListener('click', ()=> {
    home__form.classList.add('d-none');
})

