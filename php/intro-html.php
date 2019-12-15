<!doctype html>
<html>

<head>
    <title>CodeBase | Introdução ao HTML</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Introdução ao HTML">
    <!--descrição do site-->
    <meta name="keywords" content="plataforma de estudos, html">
    <link rel="stylesheet" href="../css/estilo-salas.css">
    <!--<link rel="stylesheet" href="../css/estilo-devops.css">-->
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Indie+Flower|Open+Sans|Open+Sans+Condensed:300|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon|Montserrat|Open+Sans|Open+Sans+Condensed:300|Poppins|Roboto|Solway&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">

    <!--quiz-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://raw.githubusercontent.com/jchamill/jquery-quiz/master/src/jquery.quiz.css'>
    <link rel="stylesheet" href="/plugin-quiz/dist-o-que-reproduz/style.css">







    <style>
        /*CONFIGURAÇÕES GERAIS*/

        body {
            font-family: "Lato", sans-serif;
            max-width: 100%;
            margin: 0 auto;
            background: #eee;

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
            text-align: justify;
            margin: 0 auto;
            width: 70%;
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
            background: #2f3949 !important;

        }

        .sticky-nav-tabs h1,
        .sticky-nav-tabs h3 {
            text-align: justify;
            width: 70%;
            color: #ffffff;
            opacity: 0.8;
            font-weight: 200;
        }

        .link-config {

            letter-spacing: normal;
            color: #ffffff;
            opacity: 0.8;

            font-weight: 200;
        }

        .link-config a {
            text-decoration: underline;
            font-size: 16px;
            color: #dd547f;

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
            opacity: 0.8;
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

        /* QUIZ */


        .faded {
            color: #777;
        }

        #quiz-counter {
            color: #88449a;
        }

        .quiz-container {
            padding: 0.25em;
            max-width: 650px;
            margin: 1em auto;
        }

        .quiz-container a {
            text-decoration: none;
            color: #333;
        }

        #quiz-header,
        #quiz-start-screen,
        #quiz-results-screen,
        #quiz-counter {
            text-align: center;
        }

        .question {
            font-size: 1.25em;
        }

        .answers {
            list-style: none;
            padding: 0;
        }

        .answers a {
            display: block;
            padding: 0.5em 1em;
            margin-bottom: 0.5em;
            background: #fff;
        }

        .answers a.correct {
            background: #090;
        }

        .answers a.incorrect {
            background: #c00;
        }

        .answers a.correct,
        .answers a.incorrect {
            color: #fff;
        }

        #quiz-controls {
            background: #836FFF;
            color: #111;
            padding: 0.25em 0.5em 0.5em;
            text-align: center;
        }

        #quiz-response {}

        #quiz-results {
            font-size: 1.25em;
        }

        #quiz-buttons a,
        .quiz-container .quiz-button {
            display: inline-block;
            padding: 0.5em 1em;
            background: #483D8B;
            color: #fff;
        }

        #quiz-buttons a {
            background: #fff;
            color: #333;
        }

        /* Quiz State Overrides */

        .quiz-results-state #quiz-controls {
            background: none;
            padding: 0;
        }

        .quiz-results-state #quiz-buttons a {
            background: #483D8B;
            color: #fff;
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
                <li class="class-entrar"><a href="perfil-aluno.php" title="perfil" class="cadastroconfig">Perfil</a></li>
            </ul>

        </nav>


    </header>

    <div class="flip-container">
        <section class="sticky-nav-tabs">
            <h1>🖥️ A história do HTML</h1>
            <h3>O HTML foi criado em 1991, por Tim Berners-Lee, no CERN (European Council for Nuclear Research) na suíça. Inicialmente o HTML foi projetado para interligar instituições de pesquisa próximas, e compartilhar documentos com facilidade. Em 1992, foi liberada a biblioteca de desenvolvimento WWW ( World Wide Web), uma rede de alcance mundial, que junto com o HTML proporcionou o uso em escala mundial da WEB.</h3>
            <h3>O HTML é a base de todas as páginas da web. Sem o HTML, você não seria capaz de organizar texto ou adicionar imagens ou vídeos às suas páginas da web. HTML é o começo de tudo o que você precisa saber para criar páginas da web atraentes!</h3>
            <h4 class="link-config">Referência bibliográfica usada neste conteúdo: <a href="https://www.enki.com/#app">EnkiDevs</a>.
                Estude mais sobre o HTML em: <a href="http://www.evolutionoftheweb.com/?hl=pt-br">A Evolução da Internet</a>.</h4>


            <div class="sticky-nav-tabs-container">
                <a class="sticky-nav-tab" href="#projeto">Aprenda HTML</a>
                <a class="sticky-nav-tab" href="#pratique">Pratique</a>
            </div>
        </section>
        <main class="spa-main">


            <section class="spa-slide intro-geral" id="projeto">



                <div class="demo conteudo-content" id="text-pager">
                    <h1>Introdução à Web:</h1>

                    <p>O <b>CSS</b> e o <b>HTML</b> são os principais idiomas usados para criar páginas da Web e aplicativos baseados na Web. O HTML foi inventado em 1989, enquanto o CSS foi inventado em 1996.</p>

                    <p><b>HTML</b>, ou <b>HyperText Markup Language</b> é uma linguagem de marcação para criar a estrutura e o conteúdo de uma página da Web usando texto, imagens, links e contêineres. Enquanto isso, <b>CSS</b>, o <b>Cascading Style Sheets</b>, é usado para modificar o design e a exibição desses elementos <b>HTML.</b></p>

                    <p><b>HTML</b> é composto de conteúdo entre <img src="../imagens/img-html/tags.png" alt="exemplo <tag>">, enquanto <b>CSS</b> é composto de seletores seguidos por um {bloco de declaração}.</p>

                    <p>Ao criar um site, todos os seus arquivos HTML e CSS exclusivos para o mesmo site geralmente estão localizados dentro de uma pasta principal.</p>
                    <h2>Definição do HTML</h2>

                    <p><b>HTML</b>, ou <b>Hypertext Markup Language</b>, é um componente essencial de todas as páginas da web.</p>

                    <p>O objetivo principal do <b>HTML</b> é listar o conteúdo usado na página da web. O HTML exibirá texto, rótulos, listas, insira fotos e outras mídias, criar hiperlinks, botões e contêineres. Tudo isso é feito com elementos <b>HTML</b>apropriados. Além disso, cada elemento HTML pode ser usado para separar o conteúdo em seções. Você também pode aninhar elementos <b>HTML</b> um para o outro para melhor controle sobre os layouts e o conteúdo da página.</p>

                    <p>No entanto, o <b>HTML</b> não é bom para criar animações, gerenciar layouts responsivos e outras interações semelhantes no conteúdo.</p>

                    <h2>Definindo o CSS</h2>

                    <p><i>CSS</i> ou <b>Cascading Style Sheets</b> é uma linguagem de <i>folha de estilo</i> usada para descrever a preservação de um documento HTML, XML ou XHTML. É usado para fornecer estilo para texto, imagens e links.</p>

                    <p>Em resumo, o CSS é usado para criar layouts responsivos, animações, estilo de texto e recipientes de posicionamento. Ao aplicar o CSS, você adiciona a aparência que deseja aos seus sites.</p>

                    <p>No entanto, o CSS não é bom para inserir mídia, criar links e também não permite expressões matemáticas e armazenamento de banco de dados.</p>



                </div>


            </section>

            <hr>
            <section class="spa-slide intro-slide" id="pratique">
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

                <div id="quiz">
                    <div id="quiz-header">
                        <h2>Exercícios de Fixação</h2>
                        <p class="faded">De acordo com o que foi aprendido, responda as seguintes questões</p>
                    </div>
                    <div id="quiz-start-screen">
                        <p><a href="#" id="quiz-start-btn" class="quiz-button">Vamos lá!</a></p>
                    </div>
                </div>

            </section>

        </main>

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


        <!--QUIZ-->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='https://jchamill.github.io/jquery-quiz/jquery.quiz-min.js'></script>
        <script src="../plugin-quiz/dist-o-que-reproduz/questoes-html.js"></script>
        <!--fazer um js das questões pra cada página-->


</body>

</html>