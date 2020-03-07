var buttonOpen = document.querySelector('.button-social > button');
var dark = document.querySelector('.dark'); 
var popup = document.querySelector('.popup');
var buttonClose = document.querySelector('.cross');
var burger = document.querySelector('.burger');
var burgerTop = document.querySelector('.burgertop');
var burgerBottom = document.querySelector('.burgerbottom');
var burgerMiddle = document.querySelector('.burgermiddle');
var mobileMenu = document.querySelector('.mobile-menu');
var onBurgerClick = function () {
    mobileMenu.classList.toggle('mobile-menu-visible');
    burgerTop.classList.toggle('burger-top')
    burgerMiddle.classList.toggle('burger-middle')
    burgerBottom.classList.toggle('burger-bottom')
}
var escClose = function (evt) {
    if (evt.keyCode === 27) {
        popup.classList.add('hidden');
        dark.classList.add('hidden');  
        document.removeEventListener('keycode', escClose);
    }
};
var onButtonOpenClick = function (evt) {
    evt.preventDefault();    
    popup.classList.remove('hidden');
    dark.classList.remove('hidden');
    document.addEventListener('keydown', escClose);
};
var onButtonCloseClick = function (evt) {
    evt.preventDefault();
    popup.classList.add('hidden');
    dark.classList.add('hidden');
    document.removeEventListener('keydown', escClose);
};
buttonOpen.addEventListener('click', onButtonOpenClick);
buttonClose.addEventListener('click', onButtonCloseClick);
burger.addEventListener('click', onBurgerClick);



