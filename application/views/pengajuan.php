<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIBADES - Pengajuan Surat</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/pengajuan.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/semantic/semantic.min.css');?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/home.css');?>" />
	<script src="<?php echo base_url('assets/libary/jquery.js');?>"></script>
</head>

<body>
	<?php include ('components/HeaderBar.php'); ?>
		<div class="ui container" id="pengajuan-container">
        <h1>Pengajuan Surat</h1>
		<?php
			print_r($pengajuan);
		?>
		<form class="ui form" action="<?php echo base_url('user/pengajuan/upload');?>" method="POST" ?>
			<div class="field">
				<label>Nama</label>
				<div class="ui input">
					<input name="nama" type="text">
				</div>
			</div>
            <div class="field">
				<label>NIK</label>
				<div class="ui input">
					<input name="nik" type="text">
				</div>
			</div>
            <div class="field">
				<label>Perihal</label>
				<select name="perihal" class="ui dropdown">
                    <option value="Surat Keterangan Miskin">Surat Keterangan Miskin</option>
                    <option value="Surat Keterangan Tidak Memiliki Rumah">Surat Keterangan Tidak Memiliki Rumah</option>
                </select>
			</div>
            <button class="ui primary button">Kirim</button>
		</form>
	</div>
</body>

</html>