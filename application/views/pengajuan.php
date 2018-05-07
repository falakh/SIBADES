<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo base_url('user/pengajuan/upload'); 

?>" method="POST">
        <table>
            <tr>
                <td> Nama</td>
                <td> : </td>
                <td><input type="text" name="nama"> </td>
            </tr>
            <tr>
                <td> NIK</td>
                <td> : </td>
                <td><input type="text" name="nik"> </td>
            </tr>
            <tr>
                <td> Perihal</td>
                <td> : </td>
                <td>
                    <select name="perihal">
                        <option value="Surat Keterangan Miskin"> Surat Keterangan Miskin</option> 
                        <option value="Surat Keterangan Tidak Memiliki Rumah"> Surat Keterangan Tidak Memiliki Rumah</option> 
                    </select>
                </td>
            </tr>
            <tr>
                <td> kirim</td>
                <td> : </td>
                <td>
                    <input type="submit" value="kirim">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>