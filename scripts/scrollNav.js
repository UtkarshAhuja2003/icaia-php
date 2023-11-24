const navbar = document.getElementById('navbar');
const navbarHeight = navbar.offsetHeight;
const springerlogo = document.getElementById('springerlogo');

window.addEventListener('scroll', function() {
  if (window.scrollY > navbarHeight) {
    navbar.style.backgroundColor = '#041C32';
    springerlogo.style.backgroundColor = '#ffffff';
  } else {
    navbar.style.backgroundColor = '#041C32';
    springerlogo.style.backgroundColor = 'transparent';
  }
});