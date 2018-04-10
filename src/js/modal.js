const login = document.querySelector('.login');
const modal = document.querySelector('.modalLogin');

login.addEventListener('click',function(){
    modal.style.display = 'flex';
});
window.addEventListener('click',function(event){
    if (event.target === modal) {
        modal.style.display = "";
    }
});