<!DOCTYPE html>
<html lang="en">

<?php
    $pag = "";
    include("inc/head.php");
?>

<body>

    <?php include("inc/menu.php"); ?>

    <!-- Page Content -->
    <div class="container container-body container-produtos">

        <!-- Lista de Produtos -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Poltronas</h2>
            </div>
            <?php for($i=1; $i<=9; $i++){ ?>
            <div class="col-md-4">
                <a
                    href="http://placehold.it/800x534"
                    class="item-produto"
                    data-lightbox="galerias"
                    data-title="<div class='col-lg-7'>
                                    <span class='title-prod'>Poltrona TOLUCCI</span>
                                    <span class='medidas-prod'>comp: 0,70m altura: 0,90m largura: 0,75m</span>
                                </div>

                                <div class='col-lg-5'>
                                    <span class='desc-prod'>
                                        Pés em “L” de plástico + Rodízios
                                        Assento Retrátil e encosto reclinável
                                        Articulação de ferro (tubo)
                                    </span>
                                    <span class='material-prod'>
                                        Fibra de silicone: encosto | assento | braço
                                    </span>
                                </div>">

                    <img alt="" src="http://placehold.it/800x534" class="img-responsive img-portfolio img-hover" width="800">
                    <h3>Poltrona TOLUCCI</h3>
                </a>
            </div>
            <?php } ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

</body>

</html>
