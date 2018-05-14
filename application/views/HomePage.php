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

    <?php include ('components/HeaderBar.php'); ?>

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
                <div class="sub header">
                    <a href="http://localhost/SIBADES/user/pengajuan">
                        <button class="ui large primary button" id="pengajuan">Mulai</button>
                    </a>
                    <a href="http://localhost/SIBADES/admin">
                        <button class="ui large primary button" id="pengajuan">ADmin</button>
                    </a>
                </div>
            </div>
        </h1>
    </div>




</body>

</html>