<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style1.css">
  <title>Dairy Farm Shop</title>
</head>
<body>
  <div id="headersection">
    <h1>Dairy Farm Shop Management System</h1>
    <hr>
  </div>
  <div id="bodysection">
    <form action="login.php" method="POST">
      <h2>Login</h2>
      <img src="https://static.vecteezy.com/system/resources/thumbnails/029/635/773/small_2x/variety-of-dairy-products-on-wooden-table-photo.jpg"
           height="450px" width="500px">
      <br>
      <div class="container">
        <input type="number" name="mobile" placeholder="Enter mobile" required><br><br>
        <input type="password" name="cpassword" placeholder="Enter password" required><br><br>
        <div class="login">
          <button type="submit">Login</button><br><br>
          New user? <a href='register.php'>Register here</a>
        </div>
      </div>
    </form>
  </div>
</body>
</html>
