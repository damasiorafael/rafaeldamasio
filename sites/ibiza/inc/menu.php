<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top <?php if($pag != "index"){ echo "sombra-menor"; } ?>" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="Home" />
                    <span>Home</span>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php if($pag != "index"){ echo "index.php"; } ?>#empresa" title="empresa" class="<?php if($pag == "index"){ echo "bt-scroll"; } ?>">empresa</a>
                    </li>
                    <li>
                        <a href="poltronas.php" title="poltronas">poltronas</a>
                    </li>
                    <li>
                        <a href="estofados.php" title="estofados">estofados</a>
                    </li>
                    <li>
                        <a href="contato.php" title="contato">contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>