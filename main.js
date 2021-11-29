const navIconEl =document.querySelector('.nav__icon');
const navCloseEl =document.querySelector('.close-btn1');
const navListEl =document.querySelector('.nav__list');
const navOverlayEl =document.querySelector('.nav__bgOverlay');

const navOpen = () =>{
    
    navListEl.classList.add('show');
    navOverlayEl.classList.add('active');
    document.body.style='visibility:visible; height:100vh; width:100vw; overflow:hidden;';

}
const navClose = () =>{
   navListEl.classList.remove('show');
   navOverlayEl.classList.remove('active');
   document.body.style='visibility:visible; height:initial; width:100%; overflow-x:hidden;'
}


navIconEl.addEventListener('click',navOpen);
navCloseEl.addEventListener('click',navClose);
navOverlayEl.addEventListener('click',navClose);


//aos


