<?php
class User{
    //memberi var 1
    private $koneksi;

    //memberi var 2
    public function __construct (){
        global $dbh; //globalkan instance obj di file koneksi.php
        $this-> koneksi = $dbh;
    }
    //member 3 fungsionalitas
    public function index(){
        $sql = "SELECT * FROM list_user";

        //$rs = $this->koneksi->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps -> execute();
        $rs = $ps -> fetchAll();
        return $rs;
    }

//     // Simpan data
    public function newUser($data){
         $sql = "INSERT INTO list_user (nama_user, nim, password) 
         VALUES (?,?,?)";
         //$rs = $this->koneksi->query($sql);
        $ps = $this->koneksi->prepare($sql);
        $ps -> execute($data);
    }

    public function getUser($id){
    $sql = "SELECT * FROM list_user 
            WHERE id_user = ?"; //menampilkan user dengan id_user = ?
    //PDO prepare statement
    $ps = $this->koneksi->prepare($sql);
    $ps->execute([$id]);
    $rs = $ps->fetch();
    return $rs;
    }

    public function auth($data){
        $sql = "SELECT * FROM list_user WHERE nim = ? AND password = ?";
        $ps = $this->koneksi->prepare($sql);
		$ps->execute($data);
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