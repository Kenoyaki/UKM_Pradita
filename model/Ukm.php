<?php
class Ukm{
    //memberi var 1
    private $koneksi;

    //memberi var 2
    public function __construct (){
        global $dbh; //globalkan instance obj di file koneksi.php
        $this-> koneksi = $dbh;
    }
    //member 3 fungsionalitas
    public function index(){
        $sql = "SELECT * FROM list_ukm";

        //$rs = $this->koneksi->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps -> execute();
        $rs = $ps -> fetchAll();
        return $rs;
    }

//     // Simpab data
    public function simpan($data){
         $sql = "INSERT INTO list_ukm (nama_ukm,foto) 
         VALUES (?,?)";
         //$rs = $this->koneksi->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps -> execute($data);
    }

    public function getUkm($id){
    $sql = "SELECT * FROM list_ukm 
            WHERE id_ukm = ?"; // Ubah 'list_ukm' menjadi nama kolom yang sesuai, misalnya 'id'
    //PDO prepare statement
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();
    return $rs;
    }

//      // ubah data
//      public function ubah($data){
//         $sql = "UPDATE instansi SET nama=? 
//         WHERE id=?";
//         //$rs = $this->koneksi->query($sql);
//         $ps = $this->koneksi->prepare($sql);
//         $ps -> execute($data);
//     }

//     // Hapus data
//     public function hapus($id){
//         $sql = "DELETE FROM instansi WHERE id=?"; 

//         $ps = $this->koneksi->prepare($sql);
//         $ps->execute([$id]);
//     }
 }