<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="pt-br"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="pt-br"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
<head>
    <?php include 'inc/inc_head.php';?>
</head>

<body id="page-top" class="main" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- ==============================================
    Preloader
    =============================================== -->
    <?php include 'inc/inc_preloader.php';?>


    <!-- ==============================================
    Video background
    =============================================== -->
    <!--
    <video autoplay loop id="video-background" muted>
        <source src="https://player.vimeo.com/external/158148793.hd.mp4?s=8e8741dbee251d5c35a759718d4b0976fbf38b6f&profile_id=119&oauth2_token_id=57447761" type="video/mp4">
    </video>
    -->
    <div class="video-background">
        <div class="video-foreground">
            <iframe id="video-destaque" src="https://www.youtube.com/embed/2naasNvqi1g?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&enablejsapi=1&playlist=2naasNvqi1g" frameborder="0" volume="0" allowfullscreen></iframe>
        </div>
    </div>

    <script>
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('video-destaque', {
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        function onPlayerReady(event) {
            player.mute();
        }
    </script>


    <!-- ==============================================
    Header
    =============================================== -->
    <header id="header">
        <?php include 'inc/inc_header.php';?>

        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 item item-notice">
                    <img class="img-md" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="90">
                    <div class="inner">
                        <img class="pull-left img-lg" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="176" height="192">
                        <h2>atuação</h2>
                        <h3>Contencioso</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <a class="btn" href="news_interna.php" role="button">+</a>
                    </div><!-- /inner -->
                </div><!-- /.col-lg-5 -->

                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-5 col-xs-12 item item-notice">
                    <img class="img-md" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="90">
                    <div class="inner">
                        <img class="pull-left img-lg" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="176" height="192">
                    <h2>news</h2>
                    <h3>UM DIA INcrível de Premiação</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                        <a class="btn" href="news_interna.php" role="button">+</a>
                    </div><!-- /inner -->
                </div><!-- /.col-lg-5 -->

            </div><!-- /.row -->
        </div><!-- /.container -->

    </header><!-- /header -->

    <!-- ==============================================
    Features
    =============================================== -->
    <section class="sec_featutes">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4 item image">
                    <img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="147">
                    <div class="inner">
                        <a class="btn" href="news_interna.php" role="button">+</a>
                        <h2>artigo</h2>
                        <h3>Colocar aqui o Título do destaque</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div><!-- /inner -->
                </div><!-- / -->

                <div class="col-lg-4 col-md-4 item">
                    <div class="inner">
                        <a class="btn" href="news_interna.php" role="button">+</a>
                        <h2>equipe</h2>
                        <h3>Contencioso</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div><!-- /inner -->
                </div><!-- / -->

                <div class="col-lg-4 col-md-4 item image">
                    <img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="100%" height="147">
                    <div class="inner">
                        <a class="btn" href="news_interna.php" role="button">+</a> 
                        <h2>atuação</h2>
                        <h3>Contencioso</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>
                    </div><!-- /inner -->
                </div><!-- / -->
            </div><!-- /row -->

        </div><!-- /container -->
    </section><!-- /sec_featutes -->

    <!-- ==============================================
    Perfil
    =============================================== -->
    <section class="sec_profile">
        <div class="container">
            <div class="row">

                <div class="col-lg-offset-7 col-lg-5 col-md-offset-6 col-md-6 cont_profile">
                    <div class="inner">
                        <h1>Nossas escolhas foram determinantes para o nosso reconhecido sucesso. </h1>
                        <p>
                            O Antonelli Advogados tem um perfil desafiador, com atuações em causas emblemáticas e casos, aparentemente, sem solução. O Time Antonelli é persistente, incansável. Esse é o nosso negócio, buscar o resultado desenvolvendo estratégias jurídicas singulares, que se adequem ao perfil de cada cliente.
                        </p>
                        <a class="btn btn-default big pull-right" href="o-escritorio.php" role="button">saiba mais <span class="ico type01" aria-hidden="true"></span></a>
                    </div><!-- /inner -->
                </div><!-- / -->

            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /sec_featutes -->

    <!-- ==============================================
    Equipe
    =============================================== -->
    <section class="sec_equipe">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <div class="inner">
                        <h1>Quando a equipe excede o indivíduo, a excelência se torna realidade. </h1>
                        <p>
                            O comprometimento e o trabalho em grupo levam ao resultado planejado. O Antonelli Advogados investe em capacitação técnica e tem definido um plano de cargos e salários com uma política interna de participação nos lucros, resultados e ascensão à sociedade que estimula e possibilita o crescimento profissional daqueles que integram as nossas equipes.
                        </p>
                        <a class="btn btn-default big" href="equipe.php" role="button">conheça nossos advogados <span class="ico type01" aria-hidden="true"></span></a>
                    </div><!-- /inner -->
                </div><!-- / -->

                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">

                    <div class="equipe_home">
                        <div><img src="img/img_home_equipe01.png" class="img-responsive" alt=""></div>
                        <div><img src="img/img_home_equipe02.png" class="img-responsive" alt=""></div>
                        <div><img src="img/img_home_equipe03.png" class="img-responsive" alt=""></div>
                    </div>
                    <!-- <img src="img/img_home_equipe.png" alt=""> -->
                </div><!-- / -->

            </div><!-- /row -->
        </div><!-- /container -->
    </section><!-- /sec_featutes -->

    <!-- ==============================================
    Footer
    =============================================== -->
    <?php include 'inc/inc_footer.php';?>

</body>
</html>