<?php

include_once 'koneksi.php';
include_once 'model/Ukm.php';
//1. tangkap request form (dari name2 element form)

$nama_ukm = $_POST['nama_ukm']; 
$foto = $_POST['foto']; 
$tombol = $_POST['proses']; // untuk keperluan eksekusi sebuah tombol di form
//2. simpan ke sebuah array
$data = [
    $nama_ukm, // ? 2
    $foto, // ? 2

];
//3. eksekusi tombol
$obj_ukm = new Ukm();
switch ($tombol) {
    case 'simpan':
        $obj_ukm -> simpan($data);
        break;

    // case 'ubah':
    //     $data[] = $_POST['idx']; ;
    //     $obj_ukm -> ubah($data);
    //     break;
    
    // case 'hapus': 
    //     $obj_mentor->hapus($_POST['id']); 
    //     break; //$_POST['id'] dari hidden field di tombol hapus
    
    default:
    header('location:index.php?hal=ukm_list');
        break;
}

//4. setelah selesai diarahakan kehalaman view
header('location:index.php?hal=ukm_list');
