const hamburguesa = document.querySelector('#hamburger');
 const menu = document.querySelector('#menu');


hamburguesa.addEventListener('click', ()=>{ 
    hamburguesa.classList.toggle('animate');
    menu.classList.toggle('menu--mostrar');
})
