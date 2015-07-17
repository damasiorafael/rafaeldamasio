<!DOCTYPE html>
<html lang="en">

<?php
    $pag = "";
    include("inc/head.php");
?>

<body>

    <?php include("inc/menu.php"); ?>


    <!-- GOOGLE MAPS -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfVpzxaQRLeD6z-r-RaEzNbRfD-c6aWmo&sensor=TRUE"></script>
    <script type="text/javascript">
        function initializeMaps() {
            var myLatlng = new google.maps.LatLng(-23.372862,-51.448094);
            var latlngAlpha = new google.maps.LatLng(-23.372862,-51.448094);
            var mapOptions = {
              zoom: 14,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
            }
            var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            var marker = new google.maps.Marker({
                position: latlngAlpha,
                title:"Ibiza"
            });
            var styles = [{
                stylers: [
                    { hue: ""},
                ]
            }];
            var styledMap = new google.maps.StyledMapType(styles,
            {name: "Styled Map"});
            map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');
            marker.setMap(map);
        }
    </script>
    <!-- GOOGLE MAPS -->

    <!-- Page Content -->
    <div class="container container-body container-produtos container-contato">

        <!-- Contato -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Contato</h2>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-6">
                <form name="contato" id="contato" validate action="contacts.php" method="post">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" required Placeholder="Nome">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required Placeholder="E-mail">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefone:</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone" required data-mask="" data-inputmask="'mask': '(99) 9999[9]-9999'" Placeholder="Telefone">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Empresa:</label>
                            <input type="text" class="form-control" id="empresa" name="empresa" Placeholder="Empresa">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Cidade/Estado:</label>
                            <input type="text" class="form-control" id="cidade_estado" name="cidade_estado" required Placeholder="Cidade/Estado">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensagem:</label>
                            <textarea rows="10" cols="100" class="form-control" id="mensagem" name="mensagem" required Placeholder="Mensagem" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary pull-right">Enviar</button>
                </form>
            </div>

            <!-- Contact Details Column -->
            <div class="col-md-6 col-detalhes-contato">
                <p class="item-contato">
                    <abbr title="Address">
                        <b>
                            <span>Endereço: Rodovia PR 444 Km 03</span>
                            <span>Bloco 1 e 2 – Arapongas – PR</span>
                        </b>
                    </abbr>
                </p>
                <br />
                <p class="item-contato">
                    <span><b>Telefone:</b></span>
                    <abbr title="Phone">
                        <span>43 3275 2025</span>
                        <span>43 9141 1131</span>
                    </abbr>
                </p>
                <br />
                <p class="item-contato">
                    <span><b>Atendimento:</b></span>
                    <abbr title="Email">
                        <span>ibizamoveleira@uol.com.br</span>
                    </abbr>
                </p>
                <br />
                <p class="item-contato">
                    <span><b>Departamento comercial:</b></span>
                    <abbr title="Email">
                        <span>comercial@ibizamoveleira.com.br</span>
                    </abbr>
                </p>
                <br />
                <p class="item-contato">
                    <span><b>Assistência Técnica:</b></span>
                    <abbr title="Email">
                        <span>assistencia@ibizamoveleira.com.br</span>
                    </abbr>
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-12">
                <!-- Google Map -->
                <div id="map_canvas"></div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php include("inc/footer.php"); ?>

    <!-- InputMask -->
    <script src="js/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="js/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="js/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

    <script type="text/javascript">
        initializeMaps();
        $("[data-mask]").inputmask();
    </script>

</body>

</html>
