<?php
require "../inc/logica-alunos.php";
require "../inc/logica-sessao.php";


// echo "<pre>";
// var_dump($conexao);
// echo "</pre>";
if (isset($_GET['curso'])) {
    $cursoSelecionado = $_GET['curso']; // trazer o curso selecionado antes do cadastro
}


if (isset($_POST['entrar'])) {

    if (empty($_POST['email']) || empty($_POST['senha'])) {
        // echo "vazio";
        header("location:login.php?campos_obrigatorios");
    } else {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //$curso = $_GET['curso'];

        $usuario = buscaAlunos($conexao, $email);

        // echo "<pre>";
        //  var_dump($usuario);
        //  echo "</pre>";

        // primeira etapa: fazer o if do password verify
        //dentro deste if chamar a funcao login

        // echo $senha;
        // echo "<br>";
        // echo $usuario['senha'];
        // die();


        if ($usuario != null) {
            if (password_verify($senha, $usuario['senha'])) {
                // login($usuario['id'], $usuario['nome_completo'], $usuario['email'], $curso);
                login($usuario['id'], $usuario['nome_completo'], $usuario['email'], $usuario['curso']);
                //header("location:intro-html.php");
                if ($usuario['curso'] == 'html') {
                    //echo 'curso html';
                    header("location:intro-html.php");
                } else if ($usuario['curso'] == 'css') {
                    header("location:intro-css.php");
                    // echo 'curso css';
                } else if ($usuario['curso'] == 'js') {
                    header("location:intro-js.php");
                } else if ($usuario['curso'] == 'php') {
                    header("location:intro-php.php");
                }
            } else {
                header("location:login.php?senha_incorreta");
            }
        } else {
            header("location:login.php?nao_encontrado");
        }
    }

    require "../inc/desconecta.php";
    //header("location:intro-html.php");

}


?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="faça seu login">
    <!--descrição do site-->
    <meta name="keywords" content="entrar, login">
    <!--    <link rel="stylesheet" href="../css/estilo.css">-->
    <link rel="stylesheet" href="../css/estilo-loginecad.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">
    <title>Login</title>
    <style>
        /*CONFIGURAÇÕES ESPECÍFICAS DO FIELDSET FORAM FEITAS POR AQUI*/
        fieldset {
            width: 80%;
            height: 450px;
            margin-left: 50px;


        }
    </style>



</head>

<body>
    <header>

        <nav>
            <ul>
                <li><a href="index.php" title="Home"><img src="../imagens/logo.png" alt="logo codebase" id="logo"></a></li>
                <li><a href="cadastro.php" title="login" class="cadastroconfig">Entrar</a></li>
                <li><a href="cadastro.php" title="cadastre-se" class="cadastroconfig">Cadastre-se</a></li>
            </ul>

        </nav>
    </header>


    <section><img src=""></section>
    <article class="cadastro">

        <form action="" method="post">
            <fieldset>

                <h2 id="entrar-h2">JÁ TEM CADASTRO?</h2>
                <p id="entrar-p">Digite seus dados para entrar.</p>
                </P>

                <br>


                <p>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" placeholder="DIGITE SEU E-MAIL">
                </p>

                <p>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="*******">

                </p>
                <p></p>
                </p>

                <p><a href="cadastro.php?curso=<?= $cursoSelecionado ?>" class="link-config" self="_blank">Não sou cadastrado</a></p>
                <!--   PARA VISUALIZAR A PÁGINA APENAS<p><a href="cadastro.php>" class="link-config" self="_blank">Não sou cadastrado</a></p>-->




                <button type="submit" id="enviar" name="entrar">ENTRAR</button>


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


<!-- <?php
        require "inc/index.php";
        ?>  -->