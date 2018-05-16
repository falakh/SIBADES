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
  <script src="http://localhost/SIBADES/assets/library/jquery.js"></script>
  <script src="http://localhost/SIBADES/assets/semantic/semantic.js"></script>
</head>
<body>
  <div class="ui sticky">
    <div class="ui attached  secondary menu" id="sticky-header">
      <div class="ui container" id="header">
        <div class="ui image" id="header">
          <a href="http://localhost/SIBADES/">
          <img src="<?php echo base_url('assets/image/logo.png') ?>" width="460" height="1000">
          </a>
        </div>
          <a class="item">
        		Informasi
      		</a>
          <a class="item">
        		Bantuan
      		</a>
          <div class="right menu">
          <button class="ui basic positive button">
                  Admin Mode
</button>
          <?php
        	// mengecek user login atau tidak
        		if(isset($_SESSION["username"])&& $_SESSION['admin']){
              echo'
              <a href="http://localhost/SIBADES/user/logout">
                <button class="ui basic positive button">
                  Logout
                </button>
              </a>';
        		}else if(isset($_SESSION["username"])){
              echo'
              <a href="http://localhost/SIBADES/user/logout">
                <button class="ui basic positive button">
                  Logout
                </button>
              </a>';
            }else {
              echo'
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
              ';
            }
      		?>
          </div>
          <div class="ui icon right dropdown">
              <i class="large bars icon"></i>
          </div>
        </div>
      </div>
    </div>
</body>
</html>