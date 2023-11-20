<?php
$id = $_REQUEST['id_ukm']; // tangkap request produk id di URL
$model = new Ukm(); // ciptakan obj dari class Produk
$rs  = $model->getUkm($id); // panggil fungsi u/ mendetailkan produk
?>


<header class="site-header d-flex flex-column justify-content-center align-items-center pt-5 bg-dark">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-12 col-12 pt-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a href="index.php" class="text-white" style="text-decoration: none;">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">UKM List</li>
                                </ol>
                            </nav>

                            <!-- content -->
                            
                        </div>
                    </div>
                </div>
</header>

<div class="container">
    <!-- Foto dari ukm -->
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center align-items-center mt-4">
            <?php
            if (!empty($rs['foto'])) {
            ?>
                <img src="<?= $rs['foto'] ?>" width="30%" />
            <?php
            } else {
            ?>
                <img src="assets/nophoto.jpg" width="50%" />
            <?php } ?>
        </div>
    </div>

    <!-- Nama dari UKM -->
    <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
            <h2 class="mt-3"><?php echo $rs['nama_ukm'] ?></h2>
            <hr class="divider" />
        </div>
    </div>

    <!-- Deskripsi UKM -->
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <p class="mb-5"><?php echo $rs['deskripsi_ukm'] ?></p>
        </div>
    </div>

    <!-- Registrasi anggota UKM -->
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="m-3">Daftar</h2>
            <hr class="divider"/>
        </div>
    </div>
    <div class="row gx-4 gx-lg-5 justify-content-center m-3">
        <div class="col-lg-6">
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <!-- Dropdown input -->
                <div class="form-floating mb-3">
                    <select class="form-control" id="division" data-sb-validations="required">
                        <option value="" selected disabled>Pilih divisi</option>

                        <?php 
                        $sql = "SELECT nama_divisi FROM divisi";
                        $queryDivisi = $dbh->query($sql); 

                        while($row = $queryDivisi->fetch(PDO::FETCH_ASSOC)){
                        $nama_divisi = $row['nama_divisi'];
                        ?>
                        <option value="<?= $nama_divisi ?>"> <?= $nama_divisi ?> </option>
                        <?php
                        }
                        ?>

                        <!-- Add more options as needed -->
                    </select>
                    <label for="division">Divisi</label>
                    <div class="invalid-feedback" data-sb-feedback="division:required">Please select a division.</div>
                </div>
                <div class="d-grid"><button class="btn btn-primary btn-xl mt-3" id="submitButton" type="submit">Submit</button></div>
            </form>
        </div>
    </div>
</div>
