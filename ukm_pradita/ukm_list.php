<?php
//ciptakan obj dari class produk
$obj_ukm = new Ukm();
//panggil fungsionalitas terkait
$rs = $obj_ukm->index();

function limitWords($text) {
    $words = explode(" ", $text);
    $limitedWords = array_slice($words, 0, 5);
    $result = implode(" ", $limitedWords);
    return $result;
}
?>

<section class="page-section bg-dark text-white" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">List UKM</h2>
                <hr class="divider" />
                <a href="index.php?hal=ukm_form" class="icon-link">
                    <i class="bi-plus-square-fill icon" style="font-size:20px;"></i>
                </a>
                <div class="row gx-4 gx-lg-5">
                    <?php 
                        foreach ($rs as $ukm){
                    ?>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2">
                                <?php
                                if(!empty($ukm['foto'])){
                                ?>
                                    <img src="<?= $ukm['foto'] ?>" width="50%" />
                                <?php
                                }
                                else{
                                ?>
                                    <img src="assets/nophoto.jpg" width="50%" />
                                <?php } ?>
                            </div>
                            <h3 class="h4 mb-2"><?= $ukm['nama_ukm'] ?></h3>

                            <?php $limitedDesc = limitWords($ukm['deskripsi_ukm'])?>
                            <p class="text-muted mb-3"><?= $limitedDesc ?></p>

                            <a href="index.php?hal=ukm_detail&id_ukm=<?= $ukm['id_ukm'] ?>" 
                                title="Detail Ukm" class="btn btn-primary btn-sm text-dark" >
                                <i class="bi bi-eye-fill"></i>
				            </a>
                    </div> 
                </div>
                <?php } ?>
            </div>
</section>