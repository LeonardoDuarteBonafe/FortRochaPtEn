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

        <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script type="text/javascript" src="main.js"></script>

        <link rel="icon" href="Imagens/site-icon.png">
        <title>Fort Rochas</title>
    </head>
    <body>
        <!--<script>
//define language reload anchors
/*var dataReload = document.querySelectorAll("[data-reload]");*/

//language translations

//define language via window hash
/*if(window.location.hash){
if(window.location.hash === "#pt"){
hi.textContent = language.pt.welcome;
}
}*/

//define language reload onclick illiteration
/*('.btn-language').click(function(){
alert('clicado'); 
});*/
</script>-->

        <!--<div id="header"></div>-->

        <?php 
            include 'php/headernav.html';
        ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Imagens/banner-top-super-white.png" class="d-block w-100" alt="...">
                    <!--<div class="carousel-caption">
                        <h1>Super White</h1>
                        <p>Perfeito para seu ambiente.</p>
                    </div>-->
                </div>
                <div class="carousel-item">
                    <img src="Imagens/banner-top-white-alvorada.png" class="d-block w-100" alt="...">
                    <!--<div class="carousel-caption">
                        <h1>White Alvorada</h1>
                        <p>Beleza e durabilidade.</p>
                    </div>-->
                </div>
                <div class="carousel-item">
                    <img src="Imagens/banner-top-crystal.png" class="d-block w-100" alt="...">
                    <!--<div class="carousel-caption">
                        <h1>Crystal</h1>
                        <p>Para espa??os iluminados.</p>
                    </div>-->
                </div>
            </div>
            <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>-->
        </div>

        <div class="infos">
            <div class="row fort-rocha">
                <div class="col-12 col-sm-5 align-self-center texts">
                    <h1>Sobre Fort Rocha</h1>
                    <p class="text-justify shitclass" id="shit">Uma empresa experiente, que iniciou no mercado com a comercializa????o do belo M??rmore Branco Super White e prestando servi??os de serrada.</p>
                    <!--<button onclick="window.location.href='/sobre-fort-rocha.html'" class="button-before">Saiba mais...</button>-->
                    <button class="button-before">Saiba mais...</button>
                </div>
                <div class="col-12 col-sm-7 d-flex justify-content-end">
                    <img src="Imagens/image-sobre-fort-rocha.png">
                </div>
                <!--<div class="col-12 align-self-center button-after">
<button onclick="window.location.href='/sobre-fort-rocha.html'">Saiba mais...</button>
</div>-->
                <div class="col-12 align-self-center button-after">
                    <button>Saiba mais...</button>
                </div>
            </div>
            <div class="row industria">
                <div class="col-12 col-sm-5 align-self-center texts">
                    <h1>Ind??stria</h1>
                    <p class="text-justify">Contamos com um p??tio industrial moderno, com maquin??rios de qualidade e de alta tecnologia para produzir sempre um material perfeito para voc??.</p>
                    <!--<button onclick="window.location.href='/industria.html'"class="button-before">Saiba mais...</button>-->
                    <button class="button-before">Saiba mais...</button>
                </div>
                <div class="col-12 col-sm-7 d-flex justify-content-end">
                    <img src="Imagens/image-industria.png">
                </div>
                <div class="col-12 align-self-center button-after">
                    <!--<button onclick="window.location.href='/industria.html'">Saiba mais...</button>-->
                    <button>Saiba mais...</button>
                </div>
            </div>
        </div>

        <!--<div class="nossos-produtos">
<h1>Conhe??a Nossos Produtos</h1>
<div class="blue-square"></div>
<p class="col-9 top-info">As mais diversas superficies para o seu projeto, cada uma com sua identidade</p>
<div class="row">
<div class="col-6">
<img src="Imagens/image-white-alvorada.png">
<p>White Alvorada</p>
</div>
<div class="col-6">
<img src="Imagens/image-super-white.png">
<p>Super White</p>
</div>
<div class="col-6">
<img src="Imagens/image-branco-fortaleza.png">
<p>Branco Fortaleza</p>
</div>
<div class="col-6">
<img src="Imagens/image-crystal-sunshine.png">
<p>Crystal Sunshine</p>
</div>
<div class="col-6">
<img src="Imagens/image-marmore-dolomitico.png">
<p>M??rmore Dolom??tico</p>
</div>
<div class="col-6">
<img src="Imagens/image-crystal.png">
<p>Crystal</p>
</div>
<div class="col-6">
<img src="Imagens/image-calcita-azul.png">
<p>Calcita Azul</p>
</div>
<div class="col-6">
<img src="Imagens/image-amarelo-maracana.png">
<p>Amarelo Maracan??</p>
</div>
<div class="col-6">
<img src="Imagens/image-preto-florido.png">
<p>Preto Florido</p>
</div>
</div>
</div>
-->
        <div class="nossos-produtos">
            <h1>Conhe??a Nossos Produtos</h1>
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

        <?php 
            include 'php/faleconosco.html';
            include 'php/footer.html'
        ?>
        <!--
<footer>
<div class="container">
<div class="row">
<div class="col-12 col-sm-4 logo">
<a href="index.html"><img src="Imagens/footer-logo.png"></a>
</div>
<div class="col-12 col-sm-4">
<p><a href="sobre-fort-rocha.html">Sobre N??s</a></p>
<p><a href="industria.html">Ind??stria</a></p>
<p><a href="produtos.html">Produtos</a></p>
<p><a href="fale-conosco.html">Fale Conosco</a></p>
<div class="social-logos">
<a href="https://www.facebook.com/" target="_blank"><img src="Imagens/footer-facebook.png" class="col-3 col-sm-3"></a>
<a href="https://www.instagram.com/" target="_blank"><img src="Imagens/footer-instagram.png" class="col-3 col-sm-3"></a>
<a href="https://web.whatsapp.com/" target="_blank"><img src="Imagens/footer-whatsapp.png" class="col-3 col-sm-3"></a>
<a href="https://br.linkedin.com/" target="_blank"><img src="Imagens/footer-linkedin.png" class="col-3 col-sm-3"></a>
</div>
</div>
<div class="col-12 col-sm-4">
<h5>Empresa</h5>
<p><a href="https://goo.gl/maps/5tJ9GsjL1wiUz2iS6" target="_blank">Av. Principal, Gironda - Zona Rural, Cachoeiro de Itapemirim - ES - Brasil
<br> CEP. 29326-000</a></p>
<div class="footer-contato">
<p>+55 28 3523-1011
<br>fort-rochas@hotmail.com</p>
</div>
</div>
</div>
<div class="row justify-content-center copyright">
<div class="col-md-auto">
Copyright 2021 - All Rights Reserved - Fort - Rocha Granito LTDA
</div>
</div>
</div>
</footer>

-->

    </body>
</html>