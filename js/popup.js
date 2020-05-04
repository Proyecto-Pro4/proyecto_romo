var abrir = document.getElementById('inicio'),
    overlay = document.getElementById('overlay'),
    popup = document.getElementById('popup'),
    cerrar = document.getElementById('close');

abrir.addEventListener('click',function(){
    overlay.classList.add('active');
    popup.classList.add('active');
});

cerrar.addEventListener('click',function(){
    overlay.classList.remove('active');
    popup.classList.remove('active');
});