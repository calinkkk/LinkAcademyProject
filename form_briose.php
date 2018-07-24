
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/form_briose.css">
   <title>Document</title>
 </head>
 <body background="background/back2.jpg">
<div class="container">
 <form id="order_form" action="order.php" method="post">
   <div class="row">
      <div class="col-25">
        <label for="fullname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="name" placeholder="Your name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="phonenr">PhoneNumber</label>
      </div>
      <div class="col-75">
        <input type="number" id="phoneNumber" name="phoneNumber" placeholder="Your phone number.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="adress">Adress</label>
      </div>
      <div class="col-75">
        <input type="text" id="adress" name="adress" placeholder="Your adress.."required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="muffins">Muffins</label>
      </div>
      <div class="col-75">
<select id="muffins" name="muffins" required>
  <option value="banana_muffins">Banana muffins</option>
  <option value="blueberry_muffins">Blueberry muffins</option>
  <option value="chocolate_muffins">Chocolate muffins</option>
  <option value="raspberries_muffins">Raspberries muffins</option>
</select>
</div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="quantity">Quantity</label>
      </div>
      <div class="col-75">
        <input type="text" id="quantity" name="quantity" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="message">Message</label>
      </div>
      <div class="col-75">
<textarea id="message" name="message" placeholder="Addnotations" style="height:200px" required>
</textarea>
<br>
</div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
</form>
</div>
</body>
</html>
