const navbar = document.getElementById('navbar');
const navbarHeight = navbar.offsetHeight;

window.addEventListener('scroll', function() {
  if (window.scrollY > navbarHeight) {
    navbar.style.backgroundColor = '#041C32';
  } else {
    navbar.style.backgroundColor = 'transparent';
  }
});