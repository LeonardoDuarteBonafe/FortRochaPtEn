<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="lightbox.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" href="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--<script>
            var pageLanguage = localStorage.getItem("language");
            $(function(){
                if(pageLanguage == "eng"){
                    $('#header').load('php/headernaven.html');
                }
                else{
                    $('#header').load('php/headernav.html');
                }
            });

            $(function(){
                if(pageLanguage == "eng"){
                    $('#faleconosco').load('php/faleconoscoen.html');
                }
                else{
                    $('#faleconosco').load('php/faleconosco.html');
                }
            });

            $(function(){
                if(pageLanguage == "eng"){
                    $('#footer').load('php/footeren.html');
                }
                else{
                    $('#footer').load('php/footer.html');
                }
            });
        </script>-->

        <link rel="icon" href="Imagens/site-icon.png">
        <title>Fort Rochas</title>
    </head>
    <body>
        <?php 
            include 'php/headernav.html';
        ?>
        <!--<div id="header"></div>

        <div class="language">
                <a data-reload id="pt" class="btn-language"><img src="Imagens/language-pt.png"></a>
                <a data-reload id="eng" class="btn-language"><img src="Imagens/language-eng.png"></a>
        </div>-->
        
        <div class="nossos-produtos">
            <h1>Produtos</h1>
            <div class="blue-square"></div>
            <p class="col-9 top-info">As mais diversas superficies para o seu projeto, cada uma com sua identidade</p>
            <div class="row">
                
               <!-- <div class="galeria col-6">
                    <div>
                        <a href="Imagens/image-white-alvorada.png" data-lightbox="mygallery1" data-title="Obra em edif??cio residencial e comercial versato em Ceil??ncia - DF"><img src="Imagens/image-crystal-sunshine.png" class="galeriaImagem"></a>
                        <a href="Imagens/image-super-white.png" data-lightbox="mygallery1" data-title="Obra em edif??cio residencial reserva biografia em Bras??lia - DF"><img class="hideImage"></a>
                        <a href="Imagens/image-branco-fortaleza.png" data-lightbox="mygallery1" data-title="Obra em edif??cio residencial reserva essencial em Bras??lia - DF"><img class="hideImage"></a>
                    </div>
                </div>-->
                
                <div class="col-6">
                    <a href="Imagens/image-white-alvorada.png" data-lightbox="mygallery1" data-title="White Alvorada"><img src="Imagens/image-white-alvorada.png"></a>
                    <p>White Alvorada</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-super-white.png" data-lightbox="mygallery1" data-title="Super White"><img src="Imagens/image-super-white.png"></a>
                    <p>Super White</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-branco-fortaleza.png" data-lightbox="mygallery1" data-title="Branco Fortaleza"><img src="Imagens/image-branco-fortaleza.png"></a>
                    <p>Branco Fortaleza</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-crystal-sunshine.png" data-lightbox="mygallery1" data-title="Crystal Sunshine"><img src="Imagens/image-crystal-sunshine.png"></a>
                    <p>Crystal Sunshine</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-marmore-dolomitico.png" data-lightbox="mygallery1" data-title="M??rmore Dolom??tico"><img src="Imagens/image-marmore-dolomitico.png"></a>
                    <p>M??rmore Dolom??tico</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-crystal.png" data-lightbox="mygallery1" data-title="Crystal"><img src="Imagens/image-crystal.png"></a>
                    <p>Crystal</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-calcita-azul.png" data-lightbox="mygallery1" data-title="Calcita Azul"><img src="Imagens/image-calcita-azul.png"></a>
                    <p>Calcita Azul</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-amarelo-maracana.png" data-lightbox="mygallery1" data-title="Amarelo Maracan??"><img src="Imagens/image-amarelo-maracana.png"></a>
                    <p>Amarelo Maracan??</p>
                </div>
                <div class="col-6">
                    <a href="Imagens/image-preto-florido.png" data-lightbox="mygallery1" data-title="Preto Florido"><img src="Imagens/image-preto-florido.png"></a>
                    <p>Preto Florido</p>
                </div>
            </div>
        </div>


        <!--<div id="faleconosco"></div>

        <div id="footer"></div>-->
        
        <?php 
            include 'php/faleconosco.html';
            include 'php/footer.html';
        ?>
        
        <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
        
    </body>
</html>