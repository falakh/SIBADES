<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIBADES - Sistem Informasi Balai Desa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="../SIBADES/assets/style/home.css" />
    <link rel="stylesheet" type="text/css" href="../SIBADES/assets/semantic/semantic.min.css">
		<script src="http://localhost/SIBADES/assets/library/jquery.js"></script>
  <script src="http://localhost/SIBADES/assets/semantic/semantic.js"></script>

    <script language='javascript'>
        $(document).ready(function() {
            $('.ui.accordion').accordion();
        });
    </script>


</head>

<body>
	<?php include ('components/HeaderBar.php'); ?>
	<div class="main-page">
    <img class="ui fluid image" src="../SIBADES/assets/image/container.png">
  </div>
		

		<div class="ui stackable center aligned two column grid">
			<div class="column">
			<h1 class="ui header">
				<div class="content">
					<?php 
						if(isset($_SESSION["username"])&& $_SESSION['admin']){
							echo 'Lihat Pengajuan Surat';
						}else{
							echo 'Ajukan Surat';
						}
					?>
        <div class="sub header">
          <h3>
					<?php 
						if(isset($_SESSION["username"])&& $_SESSION['admin']){
							echo 'Lihat pengajuan surat warga desa';
						}else{
							echo 'Pengajuan surat untuk keperluan warga desa';
						}
					?>
					</h3>
        </div>
				<a href="http://localhost/SIBADES/user/pengajuan">
					<button class="ui large primary button" id="pengajuan">Mulai</button>
    		</a>
      </div>
  	</h1>
	</div>

	<div class="column">
		<h1 class="ui header">
			<div class="content">
        Berita Terkini
      <div class="sub header">
				<h3>Pantau berita terkini yang menyajikan informasi faktual</h3>
			</div>
				<a href="">
					<button class="ui large primary button" id="pengajuan">Mulai</button>
    		</a>
      </div>
  	</h1>
	</div>
	</div>
</body>

</html>