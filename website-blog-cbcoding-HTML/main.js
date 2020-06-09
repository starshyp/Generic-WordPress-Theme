const menuIcon = document.getElementByID('menu-icon');
const slideoutMenu = document.getElementByID('slideout-icon');
const searchIcon = document.getElementByID('search-icon');
const searchBox = document.getElementByID('search-box');

searchIcon.addEventListner('click', function() {
  if (searchBox.style.top == '72px') {
    searchBox.style.top = '24px';
    searchBox.style.pointerEvents = 'none';
  } else {
    searchBox.style.top = '72px';
    searchBox.style.pointerEvents = 'auto';
  }
});

menuIcon.addEventListener('click', function() {
  if (slideoutMenu.style.opacity == '1') {
    slideoutMenu.style.opacity = '0';
    slideoutMenu.style.pointerEvents = 'none';
  } else {
    slideoutMenu.style.opacity = '1';
    slideoutMenu.style.pointerEvents = 'auto';
  }
})
