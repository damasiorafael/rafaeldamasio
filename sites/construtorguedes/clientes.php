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
                <h2 class="page-header">Clientes</h2>
            </div>
            <?php for($i=1; $i<=9; $i++){ ?>
            <div class="col-md-4">
                <a
                    href="http://placehold.it/800x534"
                    class="item-produto"
                    data-lightbox="galerias"
                    data-title="<div class='col-lg-7'>
                                    <span class='title-prod'>Cliente 1</span>
                                </div>">
                    <img alt="" src="http://placehold.it/700x468" class="img-responsive img-portfolio img-hover">
                    <h3>Cliente 1</h3>
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
