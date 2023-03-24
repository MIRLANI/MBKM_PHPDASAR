<?php

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit" name="login" value="login">
    </form>


    <p>Nama: <?php if (isset($nama)) echo $nama ?></p>
    <p>Password: <?php if (isset($password)) echo $password ?></p>

</body>

</html>