<?php

//------------proses edit data----------------
$id = $_REQUEST['id']; //tangkap request id di url
$obj_ukm = new Ukm(); //ciptakan object dari class Peserta
if(!empty($id)){
    // panggil fungsi untuk menampilkan data lama yg ingin diubah di form
    $row = $obj_ukm->getUkm($id); // mode edit data, form terisi data lama yg akan diedit
}
else {
    $row = []; // mode input data baru, form tetap dalam keadaan kosong
}
?>

<div class="container pt-5">
<h3 class="pt-5 text-center">Formulir UKM baru</h3>
    <div class="container px-5 my-5">
        <form id="contactForm" method="POST" action="ukm_controller.php">
            <div class="mb-3">
                <label class="form-label"  for="namaUkm">Nama UKM</label>
                <input class="form-control" name="nama_ukm" value="<?= $row['nama_ukm']?>" id="namaUkm" type="text" placeholder="Nama UKM" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="namaUkm:required">Nama UKM is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label"  for="foto">Foto</label>
                <input class="form-control" name="foto" value="<?= $row['foto']?>" id="foto" type="text" placeholder="Foto" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="foto:required">Foto is required.</div>
            </div>
            
            <div class="d-grid">
                <button class="btn btn-primary" name="proses" type="submit" value="simpan">Submit</button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>