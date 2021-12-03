<?php
require_once '../conn.php';
 $nim = $_POST["nim"];
 $password = $_POST["password"];
 $wa = $_POST["wa"];
 $query = "INSERT INTO `user` VALUES('', '$nim', '$password', '$wa')";
 $sql = mysqli_query($conn, $query);

 if($sql){
     $out = array(
         "status" => 1,
         "data" => array(
             "msg" => "Berhasil Mendaftar"
         )
     );

 } else {
    $out = array(
        "status" => 0,
        "data" => array(
            "msg" => "Gagal Mendaftar",
            "error" => mysqli_error($conn)
        )
    );
 }

 echo json_encode($out, JSON_PRETTY_PRINT);

?>