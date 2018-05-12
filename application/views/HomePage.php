
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

</head>
<body>
	<?php include ('components/HeaderBar.php'); ?>
		
  <div class="main-page">
    <img class="ui fluid image" src="../SIBADES/assets/image/container.png">
  </div>

  <div class="ui fluid container">
    <div class="ui center aligned stackable two column grid">
      <div class="column">
        <h2 class="ui header">
          <div class="content">
            <h2>Ajukan Surat</h2>
            <div class="sub header">Pengajuan surat untuk keperluan warga desa</div>
            <div class="sub header">seperti surat keterangan tidak mampu dan keterangan tidak memiliki rumah</div>
          </div>
        </h2>
        <a href="pengajuan">
          <button class="ui primary button">Mulai</button>
        </a>
      </div>
      <div class="column">
        <h2 class="ui header">
          <div class="content">
            <h2>Berita Terkini</h2>
            <div class="sub header">Menampilkan berita terkini seputar keadaan daerah</div>
            <div class="sub header">berdasarkan fakta dan data yang ada</div>
          </div>
        </h2>
        <button class="ui primary button">Lihat</button>
      </div>
    </div>  	
  </div>




</body>

</html>