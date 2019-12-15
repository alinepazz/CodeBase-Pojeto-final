<!doctype html>
<html>

<head>
    <title>CodeBase | Plataforma de estudos para iniciantes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Programação para iniciantes">
    <!--descrição do site-->
    <meta name="keywords" content="plataforma de estudos, programação">
    <!--<link rel="stylesheet" href="../css/estilo.css">-->
    <link rel="stylesheet" href="../css/estilo-devops.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Indie+Flower|Open+Sans|Open+Sans+Condensed:300|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
    <style>
        /*CONFIGURAÇÕES GERAIS*/
        body {
            font-family: "Lato", sans-serif;
            max-width: 100%;
            margin: 0 auto;

        }

        nav ul,
        footer ul {
            list-style: none;
            padding: 0;
            margin: 0;

        }

        nav ul {
            width: 100%;
            display: flex;
            flex-direction: row;

        }

        nav {
            width: 100%;
        }

        a,
        nav a,
        footer a {
            text-decoration: none;
            color: black;
            display: inline-block;
            line-height: 30px;
            text-align: center;
            font-size: 25px;

        }

        .aconfig {
            font-size: 15px bold;
            text-decoration: underline;
            text-align: justify;
            display: inline-block;
            padding: 20px;
            width: 70%;
        }

        nav li,
        footer li {
            display: inline;


        }


        .cadastroconfig {
            /*arrumar botão à direita*/
            color: #FFFFFF;
            border: 1px solid #FFF;
            border-radius: 10px;
            padding: 2px;
            margin: 2px auto;
            /*    float: right;*/
            margin-top: 20px;
            text-align: center;
            font-family: 'Open Sans Condensed', sans-serif;
            width: 90px;
        }

        .class-logo {
            width: 50%;
        }

        .class-entrar {
            width: 50%;
            text-align: end;
        }

        .cursosconfig {
            height: max-content;
        }


        #text-resumo {
            font-size: 22px;
            width: 70%;
            margin: 0 auto;
            text-align: justify;
            font-family: 'Source Sans Pro', sans-serif;
        }

        .hr-config {
            border-color: #c2bb6f;
            padding-top: 5px;
            border-radius: 5px;
            background: rgba(31, 37, 59, 0.78);
            width: 80%;

        }


        #projeto {
            height: fit-content;
            padding: 100px 0px 60px 0px;
        }

        .footerconfig {
            text-align: center;
            font-size: 18px;
        }

        footer {
            font-size: 9px;
            text-align: center;
            clear: both;
        }

        .intro-slide {
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        /*CONFIGURAÇÕES ROLAGEM*/
        .spa-header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 0 2em;
            height: 75px;
            z-index: 2;
            -webkit-transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            background: #1f253b;

        }

        .spa-header--scrolled {
            background: #1f253b;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .spa-header--move-up {
            -webkit-transform: translateY(-75px);
            transform: translateY(-75px);
            -webkit-transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .spa-header__logo {
            color: #000;
        }

        .spa-header__link {
            margin-left: 1em;
            color: #000;
        }

        .sticky-nav-tabs {
            background-image: url("../imagens/devs.jpg") !important;
            width: 100%;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            opacity: 1;

        }

        .sticky-nav-tabs,
        .spa-slide {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100vh;
            position: relative;
            background: #eee;
            text-align: center;
        }

        .sticky-nav-tabs h1,
        .spa-slide h1,
            {
            font-size: 2rem;
            margin: 0;
            letter-spacing: 1rem;

        }

        .sticky-nav-tabs h3,
        .spa-slide h3 {
            font-size: 1rem;
            letter-spacing: 0.3rem;
            opacity: 0.6;
        }

        .sticky-nav-tabs-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 75px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background: #c2bb6f;

            z-index: 1;
            -webkit-transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .sticky-nav-tabs-container--top-first {
            position: fixed;
            top: 75px;
            -webkit-transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
            transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .sticky-nav-tabs-container--top-second {
            position: fixed;
            top: 0;
        }

        .sticky-nav-tab {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            color: #000;
            letter-spacing: 0.1rem;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            font-size: 0.8rem;
        }

        .sticky-nav-tab:hover {
            color: white;
            background: rgb(31, 37, 59);
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .sticky-nav-tab-slider {
            position: absolute;
            bottom: 0;
            width: 0;
            height: 6px;
            background: #66B1F1;
            -webkit-transition: left 0.3s ease;
            transition: left 0.3s ease;
        }

        @media (min-width: 800px) {

            .sticky-nav-tabs h1,
            .spa-slide h1 {
                font-size: 3rem;
            }

            .sticky-nav-tabs h3,
            .spa-slide h3 {
                font-size: 1rem;
            }

            .sticky-nav-tab {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <header class="spa-header">
        <nav>
            <ul>
                <li class="class-logo"><a href="index.php" title="Home"><img src="../imagens/logo.png" alt="logo codebase" id="logo"></a></li>
                <li class="class-entrar"><a href="login.php" title="Entrar" class="cadastroconfig">Entrar</a></li>
            </ul>

        </nav>


    </header>
    <div>
        <section class="sticky-nav-tabs">

            <div class="sticky-nav-tabs-container"> <a class="sticky-nav-tab" href="#projeto">Equipe</a><a class="sticky-nav-tab" href="#html">Aline Paz</a> <a class="sticky-nav-tab" href="#css">Eliane Oliveira</a> <a class="sticky-nav-tab" href="#js">Thalita Mayra</a>
                <!--  <a class="sticky-nav-tab" href="#php">PHP</a></div>-->
        </section>
        <main class="spa-main">

            <section class="spa-slide intro-geral" id="projeto">
                <hr class="hr-config">
                <br>
                <h3 id="text-resumo">
                    A plataforma foi desenvolvida para auxiliar os programadores(as) iniciantes. Sabemos que iniciar no mundo da programação com nenhuma experiência anterior é bem complicado. Vendo este cenário, identificamos a necessidade de criar uma plataforma web para contribuir com o aprendizado dessas pessoas mordidas pelo bichinho da tecnologia.
                    A plataforma oferece uma pequena experiência no mundo da programação de forma didática para facilitar seu aprendizado, além de dicas sobre o assunto e bibliografias de cada contéudo.
                    A <i>CodeBase</i> foi criada no ano de 2019, pelas alunas Aline, Eliane e Thalita do curso de Programador Web do Serviço Nacional de Aprendizagem Comercial - SENAC. Os instrutores deste projeto foram o Prof° Klaibert Miranda e Tiago Santos, além da ajuda dos nossos colegas de sala.

                    Queremos agradecer a todos que nos incentivaram e que nos orientaram nesse projeto. O conhecimento compartilhado tem mais significado!
                </h3>
                <br>
                <hr class="hr-config">
            </section>
            <section class="spa-slide intro-slide" id="html">
                <div class="jquery-script-ads" align="center" style="margin:30px auto;">
                    <script type="text/javascript">
                        <!--
                        google_ad_client = "ca-pub-2783044520727903";
                        /* jQuery_demo */
                        google_ad_slot = "2780937993";
                        google_ad_width = 728;
                        google_ad_height = 90;
                        //
                        -->
                    </script>
                    <script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script>
                </div>

                <div class="flip-container" id="flip-aline">
                    <div class="flip-card-inner">
                        <div class="front">
                            <img src="../imagens/aline.jpg" alt="Aline" style="width:300px; height:300px;">

                        </div>

                        <div class="back">
                            <h1>Aline Paz</h1>
                            <p>Desenvolvedora Full Stack</p>
                            <p><a href="https://www.linkedin.com/in/alinepazz/" title="LinkedIn Aline" class="link">LinkedIn</a></p>


                        </div>
                    </div>
                </div>

            </section>


            <section class="spa-slide intro-slide" id="css">

                <div class="flip-container" id="flip-eli">
                    <div class="flip-card-inner">
                        <div class="front">
                            <img src="../imagens/eli2.jpg" alt="Eliane" style="width:300px; height:300px;">

                        </div>

                        <div class="back">
                            <h1>Eliane Oliveira</h1>
                            <p>Desenvolvedora Front End</p>
                            <p><a href="https://www.linkedin.com/in/eliane-oliveira-de-jesus-bb762799/" title="LinkedIn Eliane" class="link">LinkedIn</a></p>


                        </div>
                    </div>
                </div>
            </section>


            <section class="spa-slide intro-slide" id="js">
                <div class="flip-container" id="flip-thalita">
                    <div class="flip-card-inner">
                        <div class="front">
                            <img src="../imagens/thalita.jpg" alt="Thalita" style="width:300px; height:300px;">

                        </div>

                        <div class="back">
                            <h1>Thalita Mayra</h1>
                            <p>Desenvolvedora Front End</p>
                            <p><a href="https://www.linkedin.com/in/thalitsms/" title="LinkedIn Thalita" class="link">LinkedIn</a></p>


                        </div>
                    </div>
                </div>
    </div>
    </div>

    </section>

    </main>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script>
        class StickyNavigation {

            constructor() {
                this.currentId = null;
                this.currentTab = null;
                this.tabContainerHeight = 70;
                this.lastScroll = 0;
                let self = this;
                $('.sticky-nav-tab').click(function() {
                    self.onTabClick(event, $(this));
                });
                $(window).scroll(() => {
                    this.onScroll();
                });
                $(window).resize(() => {
                    this.onResize();
                });
            }

            onTabClick(event, element) {
                event.preventDefault();
                let scrollTop = $(element.attr('href')).offset().top - this.tabContainerHeight + 1;
                $('html, body').animate({
                    scrollTop: scrollTop
                }, 600);
            }

            onScroll() {
                this.checkHeaderPosition();
                this.findCurrentTabSelector();
                this.lastScroll = $(window).scrollTop();
            }

            onResize() {
                if (this.currentId) {
                    this.setSliderCss();
                }
            }

            checkHeaderPosition() {
                const headerHeight = 75;
                if ($(window).scrollTop() > headerHeight) {
                    $('.spa-header').addClass('spa-header--scrolled');
                } else {
                    $('.spa-header').removeClass('spa-header--scrolled');
                }
                let offset = ($('.sticky-nav-tabs').offset().top + $('.sticky-nav-tabs').height() - this.tabContainerHeight) - headerHeight;
                if ($(window).scrollTop() > this.lastScroll && $(window).scrollTop() > offset) {
                    $('.spa-header').addClass('spa-header--move-up');
                    $('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-first');
                    $('.sticky-nav-tabs-container').addClass('sticky-nav-tabs-container--top-second');
                } else if ($(window).scrollTop() < this.lastScroll && $(window).scrollTop() > offset) {
                    $('.spa-header').removeClass('spa-header--move-up');
                    $('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-second');
                    $('.sticky-nav-tabs-container').addClass('sticky-nav-tabs-container--top-first');
                } else {
                    $('.spa-header').removeClass('spa-header--move-up');
                    $('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-first');
                    $('.sticky-nav-tabs-container').removeClass('sticky-nav-tabs-container--top-second');
                }
            }

            findCurrentTabSelector(element) {
                let newCurrentId;
                let newCurrentTab;
                let self = this;
                $('.sticky-nav-tab').each(function() {
                    let id = $(this).attr('href');
                    let offsetTop = $(id).offset().top - self.tabContainerHeight;
                    let offsetBottom = $(id).offset().top + $(id).height() - self.tabContainerHeight;
                    if ($(window).scrollTop() > offsetTop && $(window).scrollTop() < offsetBottom) {
                        newCurrentId = id;
                        newCurrentTab = $(this);
                    }
                });
                if (this.currentId != newCurrentId || this.currentId === null) {
                    this.currentId = newCurrentId;
                    this.currentTab = newCurrentTab;
                    this.setSliderCss();
                }
            }

            setSliderCss() {
                let width = 0;
                let left = 0;
                if (this.currentTab) {
                    width = this.currentTab.css('width');
                    left = this.currentTab.offset().left;
                }
                $('.sticky-nav-tab-slider').css('width', width);
                $('.sticky-nav-tab-slider').css('left', left);
            }

        }

        new StickyNavigation();
    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <footer>

        <ul>
            <br>

            <li><a link href="devs.php" title="CBDevs" class="footerconfig">DEVS</a></li>

            <br><br>
            <li>
                <h2 class="footer-h2">Plataforma desenvolvida pelas alunas do Senac Penha</h2>
            </li>
            <li>
                <h2 class="footer-h2">2019</h2>
            </li><br>
        </ul>
    </footer>
</body>

</html>