<?php
session_start();
include_once 'koneksi.php';
include_once 'model/User.php';
//1. tangkap request form (dari name2 element form)
$NIM = $_POST['NIM']; 
$password = $_POST['password']; 
//2. simpan ke sebuah array
$data = [
    $NIM, // ? 1
    $password, // ? 2
];
//3. eksekusi tombol
$obj_user = new User();
$rs = $obj_user->auth($data);
if(!empty($rs)){ //----------sukses login-----------
    //setelah sukses login diarahkan ke hal produk
    $_SESSION['USER'] = $rs; //data user dikenal oleh session
    header('location:index.php?hal=header');
}
else{  //----------gagal login-----------
    echo '<script>alert("Username/Password Anda Salah!!!");history.go(-1);</script>';
}
?>
