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
	<script src="http://localhost/SIBADES/assets/library/jquery.js"></script>
  <script src="http://localhost/SIBADES/assets/semantic/semantic.js"></script>

	<script>
		$(function(){
			$("#create").click(function (){
				$(".ui.modal").modal('show');
				console.log('lalalalala');
			});
			$(".ui.modal").modal({
				closable: true
			});
		});
	</script>
</head>

<body>
	<?php include ('components/HeaderBar.php'); ?>
		<div class="ui container" id="pengajuan-container">
        <h1>Daftar pengajuan surat</h1>
		<table class="ui compact celled table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>NIK</th>
					<th>Perihal</th>
					<th>Status</th>
					<th>Pesan</th>
					<?php 
						if(isset($_SESSION["username"])&&$_SESSION['admin']){
							echo '<th>Aksi</th>';
						}
					?>
				</tr>
			</thead>
			<tbody>
			<?php 
				foreach($pengajuan as $value){
					$status = '';
					if($value->status == 0){
						$status = "Menunggu";
					}else if($value->status == 1){
						$status = "Disetujui";
					}else{
						$status = "Ditolak";
					}

					if(isset($_SESSION["username"])&&$_SESSION['admin']){
						echo " 
						<tr>
							<td>
								$value->nama
							</td>
							<td>
								$value->nik
							</td>
							<td>
								$value->perihal
							</td>
							<td>
								$status
							</td>
							<td>
								$value->pesan
							</td>
							<td>
							<form class=\"ui form\">
								<div class=\"field\">
									<button type=\"submit\" class=\"ui button\">Tolak</button>
								</div>
							</form>
							<form class=\"ui form\">
								<div class=\"field\">
									<button type=\"submit\" class=\"ui button\">Terima</button>
								</div>
							</form>
							</td>
						</tr>
					";
					}else if(isset($_SESSION["username"])&& !$_SESSION['admin']){
						echo " 
						<tr>
							<td>
								$value->nama
							</td>
							<td>
								$value->nik
							</td>
							<td>
								$value->perihal
							</td>
							<td>
								$status
							</td>
							<td>
								$value->pesan
							</td>
						</tr>
					";
					}
					
				};
			?>
			</tbody>
		</table>
		
		<?php 
			if(isset($_SESSION["username"])&& !$_SESSION['admin']){
				echo '
				<button class="ui primary button" type="button" id="create" >
					Ajukan Surat
				</button>
				';
			}
		?>
		
				
		<div class="ui modal">
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
	</div>
</body>

</html>