<?php
require_once 'functions.php';
    if(isset($_POST["daftar"])) {
        if(daftar($_POST) > 0) {
            echo "<script>
                alert('Daftar Berhasil');
            </script>";
        } else {
            echo "<script>
                alert('Daftar Gagal');
            </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Rekrutmen | KARISMA</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="ajax/ajax-login.php" method="post">
        <label for="nim">NIM : </label>
        <input type="number" id="nim" name="nim" autocomplete="off">
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" autocomplete="off">
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>