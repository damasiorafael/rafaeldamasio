<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

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
                <a href="http://placehold.it/700x468" class="item-produto" data-lightbox="galerias" data-title="Poltrona Thaty Pachwork">
                    <img alt="" src="http://placehold.it/700x468" class="img-responsive img-portfolio img-hover">
                    <h3>Poltrona Thaty Pachwork</h3>
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
