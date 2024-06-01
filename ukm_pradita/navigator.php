<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-1">
            <img class="img-fluid" src="assets/img/logopradita.png" alt="..." width = 10% />
                <a class="navbar-brand" href="#page-top" style = "padding-left : 1%"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php?hal=header">Home</a></li>
                        <?php
                            $model = new Ukm();
                            $rs = $model -> index();
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    List UKM
                                </a>

                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <?php
                                    foreach($rs as $ukm){
                                    ?>
                                    
                                    <li><a class="dropdown-item" href="index.php?hal=ukm_detail&id_ukm=<?= $ukm['id_ukm'] ?>"><?= $ukm['nama_ukm'] ?></a></li>
                                    <?php } ?>
                                </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Gallery</a></li>
                        
                        <div class="d-none d-lg-block">
                            <a href="index.php?hal=profile" class="navbar-icon bi-person smoothscroll" ></a>
                        </div>
                    </ul>
                </div>
            </div>
</nav>