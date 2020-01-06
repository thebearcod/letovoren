var navMain = document.querySelector('.main-nav');
var navToggle = document.querySelector('.main-nav__toggle');
var pageLogo = document.querySelector('.page-header__logo');

//-- если JS подгрузился, удалим с навигации класс --nojs
navMain.classList.remove('main-nav--nojs');

//-- обработка открытия и закрытия меню
navToggle.addEventListener('click', function() {
  if (navMain.classList.contains('main-nav--closed')) {
    navMain.classList.remove('main-nav--closed');
    navMain.classList.add('main-nav--opened');
  } else {
    navMain.classList.remove('main-nav--opened');
    navMain.classList.add('main-nav--closed');
  }
});

var calculateScrolled = function() {
  // console.log('window.pageYOffset: ' + window.pageYOffset);
  // console.log('document.documentElement.scrollTop: ' + document.documentElement.scrollTop);
  var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  if (scrolled > 5) {
    pageLogo.classList.add('page-header__logo--scrolled');
    navMain.classList.add('main-nav--scrolled');
  }
  if (5 > scrolled) {
    pageLogo.classList.remove('page-header__logo--scrolled');
    navMain.classList.remove('main-nav--scrolled');
  }
}

// const swipeAdvantages = function () {
  // let sliderAdv = document.querySelector('.advantages');
  // sliderAdv.addEventListener('touchmove', function() {
  //
  // }
// }

window.addEventListener('scroll', function() {
  calculateScrolled();
});
//-- изменение активого элемента меню (коряво временно для проверки верстки #)
// var siteList = document.querySelector('.site-list');
// var siteListItem = siteList.getElementsByClassName('site-list__item');
// var siteListItemActive = document.querySelector('.site-list__item--active');
//
// for (var i=0; i < siteListItem.length; i++) {
//   siteListItem[i].addEventListener('click', function() {
//     var links = siteListItemActive.getElementsByTagName('a');
//     for (var j = 0; j < links.length; j++) {
//       links[j].href = "#";
//     }
//     siteListItemActive.classList.remove('site-list__item--active');
//     this.classList.add('site-list__item--active');
//     var links = this.getElementsByTagName('a');
//     for (var j = 0; j < links.length; j++) {
//       links[j].removeAttribute('href');
//     }
//     siteListItemActive = this;
//   });
// }
