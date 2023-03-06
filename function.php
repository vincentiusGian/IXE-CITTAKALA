<?php
$conn = mysqli_connect("localhost:8111", "root", "gj050508", "pameran digital");    
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);
    
    // cek username sudah ada/blm
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah terdaftar');
        </script>";
    }

    // cek confirm password
    if($password !== $password2) {
        echo "<script>
        alert('Silahkan masukkan password yang sesuai');
        </script>";

        return false;
    } 

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambah user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);

}



?>