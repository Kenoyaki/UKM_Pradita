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

<!-- Foto dari ukm -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 text-center align-items-center">
            <?php
            if(!empty($rs['foto'])){
            ?>
                <img src="images/<?= $rs['foto'] ?>" width="50%" />
            <?php
            }
            else{
            ?>
                <img src="assets/nophoto.jpg" width="50%" />
            <?php } ?>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>

<!-- Nama dari UKM -->
<div class="col-lg-12 text-center">
    <h2 class="m-2"><?php echo $rs['nama_ukm'] ?></h2>
    <hr class="divider" />
</div>

<!-- Deskripsi UKM -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 text-center align-items-center">
            <p class="m-2 "><?php echo $rs['deskripsi_ukm'] ?>
            </p>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>



