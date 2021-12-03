<?php



function daftar($data){
    global $conn;
   
    return mysqli_affected_rows($conn);


}

?>