<?php

require "../inc/logica-alunos.php";
require "../inc/conecta.php";

// echo "<pre>";
// var_dump($conexao);
// echo "</pre>";

$cursoSelecionado = $_GET['curso'];

if (isset($_POST['enviar'])) {
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST["email"];
    $senha = codificaSenha($_POST['senha']);
    $curso = $_POST['curso'];

    $usuario = inserirNovoAluno($conexao, $nome_completo, $email, $senha, $curso);

    if ($curso == 'php') {
        header("location:intro-php.php");
    } elseif ($curso == 'css') {
        header("location:intro-css.php");
    } elseif ($curso == 'js') {
        header("location:intro-js.php");
    } elseif ($curso == 'html') {
        header("location:intro-html.php");
    }


    require "../inc/desconecta.php";
    header("location:login.php");
}




?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Cadastre-se">
    <!--descrição do site-->
    <meta name="keywords" content="cadastro, login">
    <!--    <link rel="stylesheet" href="../css/estilo.css">-->
    <link rel="stylesheet" href="../css/estilo-loginecad.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
    <style>
        /*Css da página do cadastro. Necessário linkar no CSS original
EDIÇÃO THALITA OBS: CRIAR UM CSS ESPECÍFICO PARA O CADASTRO POIS ESTÁ MUITO LONGO O CÓDIGO E TUDO EM UM CSS SÓ PODE DIMINUIR O DESEMPENHO.
*/
    </style>




</head>

<body>
    <header>

        <nav>
            <ul>
                <li><a href="index.php" title="Home"><img src="../imagens/logo.png" alt="logo codebase" id="logo"></a></li>
                <li><a href="php/login.php" title="login" class="cadastroconfig">Entrar</a></li>
                <li><a href="cadastro.php" title="cadastre-se" class="cadastroconfig">Cadastre-se</a></li>
            </ul>

        </nav>
    </header>

    <article class="cadastro">
        <form action="#" method="post">


            <fieldset>

                <h2 class="cadastro-h2">Comece agora. Cadastre-se, é grátis!
                </h2>
                <p>
                    <label for="login">Nome Completo:</label>
                    <input type="text" name="nome_completo" id="nome_cad" class="inputconfig" required placeholder="NOME COMPLETO">
                </p>

                <p>
                    <label for="e-mail">E-mail:</label>
                    <input type="email" name="email" id="email" class="inputconfig" placeholder="E-MAIL">

                </p>
                <!-- <p>
<label for="conf_email">Confirmar e-mail</label>
<input type="conf_email" name="conf_email" id="conf_email" class="inputconfig" placeholder="*******">

</p> -->

                <p>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="inputconfig" placeholder="*******">

                </p>

                <!-- <p>
<label for="conf_senha">Confirmar senha:</label>
<input type="password" name="conf_senha" id="conf_senha" class="inputconfig" placeholder="*******">

</p> -->
                <p>
                    <label for="curso">Curso:</label>
                    <select name="curso" id="curso" required>
                        <option value=""></option>

                        <!-- Criando a lista de curso dinamicamente -->

                        <option <?php
                                if ($cursoSelecionado == 'html') {
                                    echo "selected";
                                }
                                ?> value="html">HTML</option>


                        <option <?php
                                if ($cursoSelecionado == 'css') {
                                    echo "selected";
                                }
                                ?> value="css">CSS</option>

                        <option <?php
                                if ($cursoSelecionado == 'js') {
                                    echo "selected";
                                }
                                ?> value="js">JS</option>

                        <option <?php
                                if ($cursoSelecionado == 'php') {
                                    echo "selected";
                                }
                                ?> value="php">PHP</option>
                    </select>

                </p>

                <button type="submit" id="enviar" name="enviar">CRIAR MINHA CONTA</button>


                <hr id="hr-form">

                <p id="termos">Ao clicar em "criar minha conta", declaro que aceito as Políticas de Privacidade e os Termos de Uso da CodeBase.</p>

            </fieldset>
        </form>
    </article>


    <footer>
        <hr>
        <ul>
            <br>

            <li><a link href="devs.php" class="footerconfig">DEVS</a></li>

            <br><br>
            <li>
                <h2 class="footer2">Plataforma desenvolvida pelas alunas do Senac Penha</h2>
            </li>
            <li>
                <h2 class="footer2">2019</h2>
            </li><br>
        </ul>
    </footer>



</body>

</html>