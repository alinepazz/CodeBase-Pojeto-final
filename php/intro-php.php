<!doctype html>
<html>

<head>
    <title>CodeBase | Aprenda PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Aprenda PHP">
    <!--descrição do site-->
    <meta name="keywords" content="programação,php">
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
    <link rel="stylesheet" href="/plugin-quiz/dist-o-que-reproduz/php-questoes.js">






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
            background: #ac4c4f !important;

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
            color: #0a0a0a;

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
            background: #c17376;
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
            background: #cf5155;
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
            background: #cf5155;
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
                <li class="class-logo"><a href="index.php" title="Página Inicial"><img src="../imagens/logo.png" alt="logo codebase" id="logo"></a></li>
                <li class="class-entrar"><a href="perfil-aluno.php" title="perfil" class="cadastroconfig">Perfil</a></li>
            </ul>

        </nav>


    </header>

    <div class="flip-container">
        <section class="sticky-nav-tabs">
            <h1>🖥️ Por que aprender PHP?</h1>
            <h3>O PHP é uma linguagem de programação do servidor amplamente usada que se tornou cada vez mais rápida e poderosa ao longo dos anos. O PHP funciona bem com HTML e bancos de dados, tornando-o uma ótima linguagem para qualquer pessoa interessada em criar aplicativos da web dinâmicos.

            </h3>
            <h4 class="link-config">Referência bibliográfica usada neste conteúdo: <a href="https://www.primecursos.com.br/">Prime Cursos</a>.
                Estude mais sobre PHP em: <a href="https://www.php.net/manual/pt_BR/intro-whatis.php" target="_blank">PHP Manual</a>.</h4>


            <div class="sticky-nav-tabs-container"> <a class="sticky-nav-tab" href="#projeto">Aprenda PHP</a><a class="sticky-nav-tab" href="#pratique">Pratique</a>

        </section>
        <main class="spa-main">


            <section class="spa-slide intro-geral" id="projeto">



                <div class="demo conteudo-content" id="text-pager">

                    <h1>:: Delimitadores ou tags</h1>
                    <p>Para o PHP ser entendido pelo navegador web ele já fica embutido no próprio código HTML e o interpretador identifica o código PHP através dos delimitadores ou tags <img src="../imagens/php.png" alt="tag php">. Ex:</p>
                    <p><img src="../imagens/php1.png" alt="exemplo php"></p>
                    <p>Obs: Lembrando que cada comando PHP será seguido de ponto e vírgula ao final da linha.< /p> <h2>:: Comentários</h2>
                            <p>Digamos que você queira fazer uma observação em um código para relembrar alguma coisa no futuro quando você ver o tal código novamente ou fazer alguma observação em uma linha, observação esta que você não poderá esquecer na próxima vez que abrir o seu programa, nesse caso você utiliza de comentários. Esses comentários simplesmente não interferem no código, você pode digitar o que quiser.</p>
                            <p>Comentário só de uma linha é feito com duas barras <b>//</b>. Comentário de mais de uma linha você inicia com <b><i>/* e termina com */</i></b>. Os comentários são simplesmente ignorados pelo compilador, não interferem no código.</p>

                            <h2>:: Variáveis</h2>
                            As variáveis em PHP sempre serão precedidas pelo caractere dólar <i>$</i>. Ex: <i>$var</i>, <i>$nome</i>.
                            Lembrando que o PHP é <b>case sensitive</b>, ou seja, ele diferencia maiúsculas de minúsculas. Então <b>$var</b> é diferente de <b>$VAR</b>.
                            <h2>:: Tipos de Dados Suportados</h2>
                            <p>O PHP suporta os tipos: <br>
                                - Inteiro; <br>
                                - Ponto flutuante; <br>
                                - String; <br>
                                - Array; <br>
                                - Objeto.</p>
                            <p><b>Nota</b>: não é preciso declarar o tipo de dado na declaração da variável porque o PHP utiliza checagem dinâmica de variáveis, ou seja, uma variável poderá conter diferentes valores de diferentes tipos durante a execução do código, o interpretador PHP decide qual o melhor tipo de dado representa aquele valor. Mesmo assim o programador pode realizar uma conversão para um determinado tipo de dado se assim o desejar utilizando, por exemplo, o comando <i>settype</i> que veremos adiante.</p>
                            <h2>:: Strings</h2>
                            <p><b>Strings</b> podem ser atribuídas de duas maneiras:<br>
                                a) utilizando aspas simples <b>( ´)</b> – Desta maneira, o valor da variável será exatamente o texto contido entre as aspas; <br>
                                b) utilizando aspas duplas <b>( " )</b> – Desta maneira, qualquer variável ou caractere de escape será expandido antes de ser atribuído.</p>
                            <h2>:: Coersão</h2>
                            <p>Convertendo um tipo primitivo em outro explicitamente e com o comando <i>settype</i>.<br>
                                Forma explicita:</p>
                            <p><img src="../imagens/php2.png" alt="exemplo php"></p>


                            <p>Comando <i>Settype</i></p>
                            <p>
                                <O comando <i>settype</i> converte uma variável para um tipo de dado especificado pelo <b>programador.Settype</b> (variável, novo tipo da variável).
                            </p>
                            <p><img src="../imagens/php3.png" alt="exemplo php"></p>



                            </h2>:: Operadores. Os principais são: </h2>
                            <p><img src="../imagens/php4.png" alt="exemplo php"></p>


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
        <script src="../plugin-quiz/dist-o-que-reproduz/php-questoes.js"></script>
        <!--fazer um js das questões pra cada página-->







</body>

</html>