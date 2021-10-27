const open= document.getElementById('guardar');
const model_container= document.getElementById('model-container');
const close= document.getElementById('close');

open.addEventListener('click', ()=> {
    model_container.classList.add('show');
});

close.addEventListener('click', ()=> {
    model_container.classList.remove('show');
})