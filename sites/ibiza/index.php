<!DOCTYPE html>
<html lang="en">

<?php
    $pag = "index";
    include("inc/head.php");
?>
<!-- jCarousel -->
<link rel="stylesheet" type="text/css" href="css/jcarousel.responsive.css">

<body>

    <?php include("inc/menu.php"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <div class="jcarousel-wrapper">
            <div class="jcarousel">
                <ul>
                    <?php for($i=1; $i<=5; $i++){ ?>
                    <li><img src="img/slider/<?php echo $i; ?>.jpg" alt="Image 1"></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="container-setas">
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container container-body">

        <!-- Destaque Home -->
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 col-img-title">
                    <img src="img/logo_interna.png" class="img-max-size-100" />
                </div>
                <p id="empresa" class="par-padd-right">
                    Desde 2012 no mercado, nós da Ibiza estofados buscamos agregar conforto, qualidade e durabilidade no nossos produtos. Localizada em Arapongas no norte do Paraná, utilizamos matérias primas selecionadas, com certificação comprovada sempre se preocupando com o desenvolvimento sustentável e a preservação dos recursos naturais.<br />
                    O nosso esforço é atender e superar as expectativas dos nossos clientes comercializando e produzindo móveis com qualidade, por meio de tecnologia, pelos nossos fornecedores, colaboradores e representantes, proporcionando o melhor atendimento.</p>
            </div>
            <div class="col-md-4 col-img-destaque">
                <img src="img/img-destaque-home.png" class="img-max-size-150 img-size-150 pull-right margin-negativa-right" />
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

    <!-- jCarousel -->
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/jcarousel.responsive.js"></script>

    <script type="text/javascript">
        $(function(){
            var marginSetas = function(){
                var larg = $(window).width();

                var btnPrev = $(".jcarousel-control-prev");
                var btnNext = $(".jcarousel-control-next");
                var marginJanela = (parseInt(larg)-741)/2;

                console.log(marginJanela);

                /*$(".jcarousel-control-prev").css({
                    "margin-left" : marginJanela
                });
                $(".jcarousel-control-next").css({
                    "margin-right" : marginJanela
                });*/
                
                //$(".jcarousel-control-prev").attr("style", "left: "+marginJanela+"px!important; margin-left: "+marginJanela+"px!important");
                //$(".jcarousel-control-next").attr("style", "right: "+marginJanela+"px!important; margin-left: "+marginJanela+marginJanela+"px!important");
            }

            //marginSetas();

            $(window).resize(function(){
                //marginSetas();
            });
        });
    </script>

    <?php
        /*.jcarousel-control-prev {
            left: 370px;
        }

        .jcarousel-control-next {
            right: 370px;
        }*/
    ?>

</body>

</html>
