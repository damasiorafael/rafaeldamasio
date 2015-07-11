<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body>

    <?php include("inc/menu.php"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <div id="slider1_container" style="position: relative; width: 1903px; height: 492px; overflow: hidden;">

            <!-- Slides Container -->
            <div class="itens-slides" u="slides" style="cursor: move; position: absolute; width: 1903px; height: 492px; overflow: hidden;">
                <?php for($i=1; $i<=9; $i++){ ?>
                <div><img u="image" src="img/img-slider-1.jpg" /></div>
                <?php } ?>
            </div>
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora03l"></span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora03r"></span>
        </div>
        <!-- Jssor Slider End -->
    </header>

    <!-- Page Content -->
    <div class="container container-body">

        <!-- Destaque Home -->
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 col-img-title">
                    <img src="img/logo_interna.png" class="img-max-size-100" />
                </div>
                <p class="par-padd-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin odio nisl, at blandit neque faucibus porta. Praesent suscipit risus ex. Donec vitae quam faucibus, fringilla diam nec, porta tortor. Nullam a sodales tortor. Etiam rhoncus pretium ex id ullamcorper. Aliquam venenatis tellus in libero sollicitudin, aliquet congue lacus tempor. Etiam eu viverra ex, in faucibus dolor. Donec rhoncus mattis ligula, at accumsan libero convallis eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam auctor lorem sed lacus laoreet tristique. Quisque eleifend nunc sit amet sem eleifend, sit amet sagittis lorem facilisis. Maecenas ut eros sed metus egestas consectetur at a sapien.</p>
            </div>
            <div class="col-md-4 col-img-destaque">
                <img src="img/img-destaque-home.png" class="img-max-size-150 img-size-150 pull-right margin-negativa-right" />
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        $(document).ready(function($){

            var ua = navigator.userAgent;
            //alert(ua);
            var ie = /.NET/g;
            var ie10 = /MSIE 10.0/;
            var ie9 = /MSIE 9.0/;
            var ie8 = /MSIE 8.0/;
            var Mobile = /Mobile/;

            var larg = $(window).width();

            $("#slider1_container").width(larg);
            $(".itens-slides").width(larg);

            if(Mobile.test(ua)){
                $(".jssora03r, .jssora03l").css({
                    "display" : "block"
                });
                $(".jssora03r, .jssora03l").attr("style", "display: block!important");
            }

            $("#slider1_container").css({
                "width" : larg
            });
            $(".itens-slides").css({
                "width" : larg
            });
            //}

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 160,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 1,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                $SlideWidth: 741,                                   //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 492,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 4,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                              //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 0,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 0,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if(bodyWidth){
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, larg));
                    var difLarg = larg-960;
                    var marginLarg;
                    if(difLarg>1){
                        marginLarg = difLarg/2;
                        $(".jssora03r").css({
                            "margin-left" : marginLarg,
                            "left" : "50%"
                        });
                        $(".jssora03l").css({
                            "margin-left" : marginLarg*(-1),
                            "left" : "50%"
                        });
                    } else {
                        $(".jssora03r").css({
                            "left" : larg,
                            "margin-left" : "-56px"
                        });
                        $(".jssora03l").css({
                            "left" : 1
                        });
                    }
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

</body>

</html>
