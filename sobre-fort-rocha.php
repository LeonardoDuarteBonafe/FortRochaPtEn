<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
        <!--<div id="header"></div>
-->
        <?php 
            include 'php/headernav.html';
        ?>
        
        <div class="page-sobre-industria text-center" id="page-fort-rocha">
            <div class="container">
                <h1>Sobre Fort Rocha</h1>
                <div class="blue-square"></div>
                <p>
                    Uma empresa experiente, que iniciou no mercado com a comercializa????o de M??rmore Branco.</p>
                <p>
                    Sempre pensando em avan??os, no ano de 2015, foi dado um grande passo para a empresa: a aquisi????o de uma politriz autom??tica que permite uma produ????o de maior quantidade e, sobretudo de maior qualidade. </p>
                <p>
                    Em 2017 foi adquirido um tear multifio visando maior qualidade na serradas dos materiais.</p>
                <p>
                    Atualmente as instala????es est??o sendo ampliadas para atividades comerciais mais intensas, objetivando a exporta????o de seus materiais.</p>
                <p>
                    Sonhando e investindo na empresa para voc?? receber o melhor sempre.
                </p>
            </div>
            <img src="Imagens/banner-sobre-fort-rocha.png">
        </div>

       <?php 
            include 'php/faleconosco.html';
            include 'php/footer.html';
        ?>
        
        <script type="text/javascript" src="main.js"></script>

    </body>
</html>