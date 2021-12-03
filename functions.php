<?php

$server = "localhost";
$user = "root";
$pass = "";
$db_name = "rekrutmen";

$conn = mysqli_connect($server, $user, $pass, $db_name) or die(mysqli_error($conn));

function daftar($data){
    global $conn;
    $nim = $data["nim"];
    $password = $data["password"];
    $wa = $data["wa"];
    $query = "INSERT INTO rekrutmen VALUES('', $nim, $password, $wa)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

?>