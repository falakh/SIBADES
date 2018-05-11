<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <link rel="stylesheet" type="text/css" href="../SIBADES/assets/style/home.css" />
    <link rel="stylesheet" type="text/css" href="../SIBADES/assets/semantic/semantic.min.css">
    <script src="../SIBADES/assets/library/jquery.js"></script>
    <script type="text/javascript" src="../SIBADES/assets/semantic/semantic.js"></script>
</head>
<body>
  <div class="ui sticky">
    <div class="ui attached  secondary menu" id="sticky-header">
      <div class="ui container" id="header">
        <div class="ui image" id="header">
          <img src="../SIBADES/assets/image/logo.png" width="460" height="1000">
        </div>
          <a class="item">
        		Beranda
      		</a>
          <a class="item">
        		Informasi
      		</a>
          <a class="item">
        		Bantuan
      		</a>
      		<?php
        	// mengecek user login atau tidak
        		if(isset($_POST["username"])){
          		if($_POST['admin']){
							
							}
        		}
      		?>
          <div class="right menu">
            <a href="login">
              <button class="ui basic positive button">
          			Login
        			</button>
            </a>
            <a href="register">
              <button class="ui primary button">
          			Daftar
        			</button>
						</a>
          </div>
          <div class="ui icon right dropdown">
              <i class="large bars icon"></i>
          </div>
        </div>
      </div>
    </div>
</body>
</html>