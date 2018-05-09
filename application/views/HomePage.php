<?php session_start()?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIBADES - Sistem Informasi Balai Desa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../SIBADES/assets/style/login.css" />
    <link rel="stylesheet" type="text/css" href="../SIBADES/assets/semantic/semantic.min.css">
    <script src="../SIBADES/assets/library/jquery.js"></script>
    <script type="text/javascript" src="../SIBADES/assets/semantic/semantic.js"></script>

    <script language='javascript'>
        $(document).ready(function() {
            $('.ui.accordion').accordion();
        });
    </script>


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
        </button></a>
                </div>
                <div class="ui icon right dropdown">
                    <i class="large bars icon"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="main-page">
        <img class="ui fluid image" src="../SIBADES/assets/image/container.png">
    </div>

    <div class="ui center aligned container">
        <h1 class="ui header">
            <div class="content">
                Ajukan Surat
                <div class="sub header">
                    <h3>Pengajuan surat-surat kebutuhan warga desa</h3>
                </div>
                <div class="sub header"><button class="ui large primary button" id="pengajuan">Mulai</button></div>
            </div>
        </h1>
    </div>


    <div class="ui accordion">
        <div class="title">
            <i class="dropdown icon"></i> lalalala
        </div>
        <div class="content">
            kakakakak
        </div>
        <div class="title">
            <i class="dropdown icon"></i> lalalala
        </div>
        <div class="content">
            kakakakak
        </div>
        <div class="title">
            lalalala
        </div>
        <div class="content">
            kakakakak
        </div>
        <div class="title">
            lalalala
        </div>
        <div class="content">
            kakakakak
        </div>
    </div>


</body>

</html>