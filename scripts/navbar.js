const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');

    menuToggle.addEventListener('click', () => {
      navLinks.classList.toggle('top-20');
      navLinks.classList.toggle('bg-theme');
      navLinks.classList.toggle('top-[-490px]');
    });