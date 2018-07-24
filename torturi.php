<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script>function imglist1() {
    var x = document.getElementById("bcakemenu");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function imglist2() {
  var y = document.getElementById("chocolatevanillacake");
  if (y.style.display === "none") {
      y.style.display = "block";
  } else {
      y.style.display = "none";
  }
}
function imglist3() {
  var z = document.getElementById("moussecake");
  if (z.style.display === "none") {
      z.style.display = "block";
  } else {
      z.style.display = "none";
  }
}
</script>
  <link rel="stylesheet" type="text/css" href="css/torturi.css">
  <title>Torturi</title>
</head>
<body background="/background/shop7.jpg">
  <div id="logo_container"><img id="logo" src="imagini/logo/logo4.png" width="400"></div>
  <nav id="menu">
    <ul id="b1">
    <li class="b2"><a href="acasa.php">Acasa</a></li>
    <li class="b2"><a href="briose.html">Briose</a></li>
    <li class="b2"><a class="active"  href="torturi.php">Torturi</a></li>
    <li class="b2"><a href="specialitati.php">Specialitati</a></li>
    <li class="b2"><a href="contact.php">Contact</a></li>
  </ul>
  </nav>
  <div><h1>Welcome to cake factory! </h1>
    <p id="intro">These are one of our best cakes! You can order one of these or<br>
       you can call at <a href="tel:0723329186">0723329186</a> and order your own <strong>Special</strong> cake!</p>

  </div>
<nav>
  <button onclick="imglist1()">Birthday Cakes:</button>
  <button onclick="imglist2()">Chocolate & Vanilla Cakes:</button>
  <button onclick="imglist3()">Mousse Cakes:</button><br>
</nav>
    <div id="bcakemenu">
      <ul class="list">
        <li>
          <img src="imagini/torturi/birthday cake/b1.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b2.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b3.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b4.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b5.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b6.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b7.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b8.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b9.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b10.jpg" width="200px">
        </li>
        <li>
          <img src="imagini/torturi/birthday cake/b11.jpg" width="200px">
        </li>

      </ul>
  </div>

  <div id="chocolatevanillacake">
    <ul class="list">
      <li>
        <img src="imagini/torturi/chocolate cake/c1.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/chocolate cake/c2.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/chocolate cake/c3.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/chocolate cake/c4.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/vanilla cake/v1.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/vanilla cake/v2.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/vanilla cake/v3.jpg" width="200px">
      </li>
      <li>
        <img src="imagini/torturi/vanilla cake/v4.jpg" width="200px">
      </li>
    </ul>
  </div>

  <div id="moussecake">
   <ul class="list">
     <li>
       <img src="imagini/torturi/mousse cake/m1.jpg" width="200px">
     </li>
     <li>
       <img src="imagini/torturi/mousse cake/m2.jpg" width="200px">
     </li>
     <li>
       <img src="imagini/torturi/mousse cake/m3.jpg" width="200px">
     </li>
     <li>
       <img src="imagini/torturi/mousse cake/m4.jpg" width="200px">
     </li>
     <li>
       <img src="imagini/torturi/mousse cake/m5.jpg" width="200px">
     </li>
     <li>
       <img src="imagini/torturi/mousse cake/m6.jpg" width="200px">
     </li>
   </ul>
  </div>
</body>
</html>
