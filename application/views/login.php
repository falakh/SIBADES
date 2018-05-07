<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welocome To SiBADES</title>
</head>

<body>
    <form action= "<?php echo base_url('user/login'); 

?>"
    method="POST">
        <div>
            userName : <input type="text" name="userName">
        </div>
        <div>
            password : <input type="password" name="password">
        </div>
        <div>
            <input type="submit" value="send">
        </div>
    </form>

</body>

</html>