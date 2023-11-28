<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=web_ukm_v2;host=localhost;port=3308';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Sukses koneksi ke db dengan user $user";
}
catch(PDOException $e) {
    echo 'Terjadi kesahalahan koneksi dataabase dengan sebab'.$e->getMessage();
}

?>