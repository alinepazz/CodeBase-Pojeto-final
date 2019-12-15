<!doctype html>
<html>

<head>
    <title>CodeBase | Introdução ao CSS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Introdução ao CSS">
    <!--descrição do site-->
    <meta name="keywords" content="stylesheet, css">
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

    <!--slide-->





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
            background: #3c8b81 !important;

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
            color: #192725;

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
            background: #a2d0cb;
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
            background: #42bfba;
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
            background: #42bfba;
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
            <h1>🖥️ A história do CSS</h1>
            <h3>CSS é uma linguagem para estilos que define o layout de documentos HTML. Por exemplo, CSS controla fontes, cores, margens, linhas, alturas, larguras, imagens de fundo, posicionamentos e muito mais. Aguarde e você verá!</h3>
            <h3>O HTML pode ser usado para definir o layout de websites. Contudo, CSS proporciona mais opções e é mais preciso e sofisticado. CSS é suportado por todos os navegadores atuais. Sem o CSS, todas as páginas da web seriam monótonas. Com o CSS, você pode adicionar imagens coloridas e de plano de fundo e alterar o layout da sua página - suas páginas da Web podem parecer obras de arte!</h3>
            <h4 class="link-config">Referência bibliográfica usada neste conteúdo: <a href="https://www.enki.com/#app">EnkiDevs</a>.
                Estude mais sobre o CSS em: <a href="https://tableless.com.br/categories/css/">Tableless - CSS</a>.</h4>


            <div class="sticky-nav-tabs-container"> <a class="sticky-nav-tab" href="#projeto">Aprenda CSS</a><a class="sticky-nav-tab" href="#pratique">Pratique</a>

        </section>
        <main class="spa-main">


            <section class="spa-slide intro-geral" id="projeto">



                <div class="demo conteudo-content" id="text-pager">
                    <h1>Introdução ao CSS</h1>

                    <h2>O que é o CSS?</h2>

                    <p>O <b>CSS</b>, também conhecido como <b>Cascading Style Sheets</b>, é uma linguagem atraente que pode ser aplicada a documentos HTML, XML ou SVG. Aqui está um exemplo:</p>

                    <p><img src="../imagens/img-css/cor-css.png" alt="exemplo css"></p>


                    <p>O CSS é muito importante para se conhecer, porque praticamente todos os sites hoje em dia o utilizam para personalizar elementos HTML.
                        Como em qualquer projeto, recomenda-se a separação funcional dos arquivos. Seguindo essa regra, podemos dividir os arquivos de um site em três categorias: estrutura, apresentação e comportamento.
                        CSS é quem cuida da apresentação (o HTML cuida da estrutura e o JavaScript cuida do comportamento).</p>
                    <p>Existem várias vantagens em dividir as funções:
                        <ul>
                            <li>Nenhuma duplicação de código, pois o arquivo CSS pode ser usado para páginas com aparência semelhante no site.</li>
                            <li>Uma consequência de menos código é menos dados a serem transmitidos, o que é importante para usuários com uma conexão lenta à Internet.</li>
                            <li>A apresentação pode ser alterada sem modificar o conteúdo.</li>
                        </ul>
                    </p>

                    <p>O CSS pode alterar a cor e o tamanho dos elementos HTML, seu posicionamento e até mesmo animá-los.</p>

                    <h2>Declaração CSS</h2>

                    <p>Um arquivo CSS é composto de seletores (uma maneira de apontar para os elementos HTML a serem alterados) e declarações (um par de propriedades e valores).</p>

                    <p>A sintaxe para uma declaração CSS é:</p>

                    <p><img src="../imagens/img-css/background.png" alt="exemplo css"></p>

                    <p>A propriedade que estamos procurando alterar é o <i>backgound-color</i> (cor de fundo). O <i>:</i> separa as duas entidades e o <i>red</i> é o novo valor da propriedade.</p>

                    <p>Toda declaração deve estar localizada dentro de um bloco:</p>
                    <p><img src="../imagens/img-css/background1.png" alt="exemplo css"></p>

                    <p>A declaração múltipla pode ser agrupada dentro de um bloco. Nesse caso, ponto e vírgula,; são necessários após cada declaração:</p>
                    <p><img src="../imagens/img-css/background2.png" alt="exemplo css"></p>

                    <p>O código acima fez algumas alterações, mas o CSS não sabe a quais elementos eles estão se referindo. Os seletores são usados para especificar esses elementos: </p>

                    <img src="../imagens/img-css/background3.png" alt="exemplo"></p>

                    <p><i>p</i> é um tipo de seletor. Qualquer que seja a regra CSS aplicada a <i>p</i> neste exemplo, ela afetará todas as instâncias dos elementos <img src="../imagens/img-html/tagp.png" alt="tag <p>"> no documento HTML.</p>

                    <h2>O que é cascata?</h2>
                    <p>Quando falamos sobre "Cascading Style Sheets", o que queremos dizer com cascata?
                        Os blocos de estilos se conectam em cascata do topo da folha de estilos para o fundo, como uma cachoeira.

                        <p>Aqui está um exemplo:</p>
                        <p><img src="../imagens/img-css/p-css.png" alt="exemplo css"></p>

                        <p>Primeiro, selecione todos os parágrafos da página e defina a cor da fonte em vermelho - <i>red</i> e o estilo em negrito - <i>bold</i>. Em seguida, selecionamos todos os parágrafos novamente e definimos a cor da fonte para verde - <i>green</i>.
                            Como o seletor que define sua cor para <i>green</i> vem após o seletor que define sua cor para <i>red</i>, ir substituirá o valor inicial. Os parágrafos ainda estarão em <i>bold</i>>, pois o segundo seletor não especifica outro valor para a propriedade de peso da fonte - <i>font-weight</i>.</p>

                        <p>A mesma propriedade em cascata funciona para declarar valores diferentes no mesmo seletor:</p>

                        <p><img src="../imagens/img-css/p1-css.png" alt="exemplo css"></p>

                        <p>O CSS nem sempre se comporta assim, no entanto, é uma propriedade dos seletores, chamada <b>especificidade</b>, que quebra a regra. Falaremos sobre especificidade no próximo exercício.</p>
                        <!--o arquivo p2-css.png será usado no exercicio 3-->
                        <h2>Seletores de tipo</h2>
                        <p>Conforme declarado no segundo insight, os seletores são uma maneira de direcionar estilos de elementos HTML específicos. Devemos explicar o que é um <b>seletor</b>.</p>
                        <p>Os seletores variam entre os mais simples:</p>
                        <p><img src="../imagens/img-css/p3-css.png" alt="exemplo css"></p>
                        <p>Para os mais complexos:</p>

                        <p><img src="../imagens/img-css/p4-css.png" alt="exemplo css"></p>

                        <p>Esses seletores se comportam como padrões usados para direcionar elementos HTML específicos. Os atributos de estilo (por exemplo, <i>color: white</i>) adicionados aos seletores serão aplicados aos <b>elementos HTML</b>.</p>

                        <h2>Seletores de tipo</h2>

                        <p>Eles são os seletores mais genéricos, que segmentam elementos por tipo: para selecionar todos os elementos <img src="../imagens/img-html/tag-div.png" alt="tag <div>"> no documento HTML, é necessário o seletor <i>div</i>:</p>

                        <p><img src="../imagens/img-css/css.png" alt="exemplo css"></p>

                        <p>E o HTML:</p>

                        <p><img src="../imagens/img-css/html.png" alt="exemplo css"></p>

                        <p>O seletor de tipo não exige que os elementos HTML tenham atributos, ao contrário dos dois seguintes.</p>

                        <p>Considere a seguinte folha de estilo:</p>

                        <p><img src="../imagens/img-css/p5.png" alt="exemplo css"></p>

                        <p>Quando aplicado a uma página HTML, como:</p>

                        <p><img src="../imagens/img-css/p6.png" alt="exemplo css"></p>

                        <p>Definirá o tamanho da fonte de todos os elementos <img src="../imagens/img-html/tagp.png" alt="exemplo <p>"> para 20px. Portanto, o parágrafo Olá, Codebase também terá um tamanho de 20px.</p>

                        <h2>Seletores de classe e ID</h2>

                        <h3>Seletores de Classe</h3>

                        <p>Os seletores de classe são mais específicos que os seletores de tipo, porque selecionam um grupo menor de elementos em vez de todos de um tipo. Na folha de estilos, eles sempre são chamados com um ponto anterior ao nome da classe:</p>

                        <p><img src="../imagens/img-css/p7.png" alt="exemplo css"></p>

                        <p>E o HTML:<p>

                                <p><img src="../imagens/img-css/p8.png" alt="exemplo css"></p>

                                <p>Um elemento pode ter várias classes, como você pode ver acima. O <img src="../imagens/img-html/tag-div.png" alt="tag <div>"> com <i>main-content</i> e <i>cidades</i> será denominado pelas duas classes. Por causa da cascata, se os dois estiverem alterando a mesma propriedade, as classes definidas mais baixas terão a maior prioridade, a classe definida mais baixa terá a maior prioridade (nesse caso, <i>cidades</i>).</p>

                                <h2>Seletores de ID</h2>
                                <p>Os seletores de ID têm a maior prioridade dentre os três, pois segmentam um elemento único por vez. Na folha de estilos, eles sempre são chamados com uma hashtag antes do ID:</p>
                                <p><img src="../imagens/img-css/p9.png" alt="exemplo css"></p>
                                <p>E o HTML:</p>
                                <p><img src="../imagens/img-css/p10.png" alt="exemplo css"></p>



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
        <script src="../plugin-quiz/dist-o-que-reproduz/questoes-css.js"></script>
        <!--fazer um js das questões pra cada página-->







</body>

</html>