<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/acasa.css">
  <title>Acasa</title>
</head>
<body background="background/shop3.jpg">
<div id="logo_container"><img id="logo" src="imagini/logo/logo4.png"></div>
<nav id="menu">
  <ul>
  <li><a class="active" href="acasa.php">Acasa</a></li>
  <li><a href="briose.html">Briose</a></li>
  <li><a href="torturi.php">Torturi</a></li>
  <li><a href="specialitati.php">Specialitati</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>
</nav>

<div id="container">
<div class="slider">
  <div id="img">
    <img src="imagini/acasa/img3.jpg">
  </div>
</div>
<script>
  var img = document.getElementById('img');

  var images = ['imagini/acasa/img1.jpg', 'imagini/acasa/img2.jpg',
  'imagini/acasa/img3.jpg', 'imagini/acasa/img4.jpg', 'imagini/acasa/img5.jpg'];

  var x = 0;

  function slide(){
    if (x < images.length) {
      x = x+1;
    }else{
      x=1;
    }
    img.innerHTML = "<img src="+images[x-1]+">";
  }

  setInterval(slide, 2000);
</script>
<div id="intro">
<img src="imagini/intro/ntro.png">
</div>



</body>
</html>
