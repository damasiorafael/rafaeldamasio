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
                    <h1>Construtor Guedes</h1>
                </div>
                <p id="empresa" class="par-padd-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin odio nisl, at blandit neque faucibus porta. Praesent suscipit risus ex. Donec vitae quam faucibus, fringilla diam nec, porta tortor. Nullam a sodales tortor. Etiam rhoncus pretium ex id ullamcorper. Aliquam venenatis tellus in libero sollicitudin, aliquet congue lacus tempor. Etiam eu viverra ex, in faucibus dolor. Donec rhoncus mattis ligula, at accumsan libero convallis eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam auctor lorem sed lacus laoreet tristique. Quisque eleifend nunc sit amet sem eleifend, sit amet sagittis lorem facilisis. Maecenas ut eros sed metus egestas consectetur at a sapien.</p>
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
