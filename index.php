<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/4e315737a7.js" crossorigin="anonymous"></script>
     <script src="https://cdn.tailwindcss.com"></script>
    <title>ICAIA 2023</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php include("./navbar.php")?>
    <?php include("./header.php")?>
    <?php include("./about.php")?>
    <?php include("./contact.php")?>
  </body>
  <script>
const navbar = document.getElementById('navbar');
const navbarHeight = navbar.offsetHeight;

window.addEventListener('scroll', function() {
  if (window.scrollY > navbarHeight) {
    navbar.style.backgroundColor = '#100464';
  } else {
    navbar.style.backgroundColor = 'transparent';
  }
});


  </script>
</html>