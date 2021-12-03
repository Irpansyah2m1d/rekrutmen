<?php
require_once '../conn.php';
$nim = $_POST["nim"];
$password = $_POST["password"];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE nim = '$nim'");
$data = mysqli_fetch_assoc($sql);
$cek = true;

if(!$data){
    $msg = "User Belum Terdaftar";
    $error = 0;
    $cek = false;
} else if($data["password"] !== $password){
    $msg = "Password Anda Salah";
    $error = 1;
    $cek = false;
} 

if($cek){
    $out = array(
        "status" => 1,
        "data" => array(
            "msg" => "Berhasil Login"
        )
    );
    $_SESSION["nim"] = $data["nim"];

} else {
   $out = array(
       "status" => 0,
       "data" => array(
           "msg" => $msg,
           "error" => $error
       )
   );
}

echo json_encode($out, JSON_PRETTY_PRINT);


?>