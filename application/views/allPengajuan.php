<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="http://localhost/SIBADES/PengajuanController/AllPengajuan">
        <button> all </button>
    </a>
    <form action="http://localhost/SIBADES/PengajuanController/accPengajuan" method="POST">
        id : <input name="id" type="number">
        <input type="submit" value="kirim">
    </form>
    <form action="http://localhost/SIBADES/PengajuanController/tolak" method="POST">
        id : <input name="id" type="number">
        <div>pesan : <input name="pesan" type="text"></div>
        <input type="submit" value="kirim">
    </form>

</body>

</html>