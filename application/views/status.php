<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    <h1> selamat anda telah Login </h1>
    <a href="logout"> <button> LogOut  </button></a>
    <?php
    echo $admin;
        if(($admin)){
            
            echo '<button> Admin </button>';
        }
    ?>
        <a href="pengajuan"> <button> Pengajuan  </button></a>
</body>

</html>