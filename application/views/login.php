<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIBADES - Halaman Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../SIBADES/assets/style/login.css" />
  <script src="main.js"></script>
</head>
<body>
  <?php include ('components/HeaderBar.php'); ?>

  <div class="ui center aligned container">
    <form class="ui large form" method="post" action="LoginController">
    <img src="../SIBADES/assets/image/logo.png" width="180" height="50" alt="">
      <div class="field">
        <div class="ui left icon input">
          <input name="email" placeholder="user@gmail.com" type="text">
          <i class="user icon"></i>
        </div>
      </div>
      <div class="field">
        <div class="ui left icon input">
          <input name="password" placeholder="*********" type="password">
          <i class="lock icon"></i>
        </div>
      </div>
      <button class="ui primary button">Login</button>
    </form>
  </div>
</body>
</html>