<?php
require "../inc/logica-alunos.php";
require "../inc/logica-sessao.php";

//Recuperar o ID do usuario logado na sessão

$id = $_SESSION['id'];
// echo $id;


$usuario = lerUmAluno($conexao, $id);

//  echo "<pre>";
// var_dump($usuario);
// echo "</pre>";
if (isset($_POST['atualizar'])) {
    $nome_completo = $_POST['nome_completo'];
    $email = $_POST['email'];

    if (empty($_POST['senha'])) {
        $senha = $usuario['senha'];
    } else {
        $senha = verificaSenha(
            $_POST['senha'],
            $usuario['senha']
        );
    }

    atualizarAluno($conexao, $id, $nome_completo, $email, $senha);
    require "inc/desconecta.php";
    header("location:perfil-aluno.php");
}

if (isset($_GET['id'])) {
    excluirAluno($conexao, $id);
    logout();
}
if (isset($_GET['logout'])) {
    logout();
}

?>


<html lang="pt-br">

<head>
    <title>Perfil-Usuário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="perfil-usuario">
    <!--descrição do site-->
    <meta name="keywords" content="perfil, usuario, login">
    <!--    <link rel="stylesheet" href="../css/estilo.css">-->
    <link rel="stylesheet" href="../css/estilo-loginecad.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../imagens/favicon.ico" type="image/x-icon">

    <style>
        /*Css da página do cadastro . Necessário linkar no CSS original
EDIÇÃO THALITA OBS: CRIAR UM CSS ESPECÍFICO PARA O CADASTRO POIS ESTÁ MUITO LONGO O CÓDIGO E TUDO EM UM CSS SÓ PODE DIMINUIR O DESEMPENHO.
*/
        #atualizar {
            border-radius: 4px;
            border-color: rgba(79, 83, 90, 0.51);
            background-color: transparent;
            color: white;
            padding: 10px 10px;
        }

        .excluir {
            border-radius: 4px;
            border-color: rgba(79, 83, 90, 0.51);
            background-color: transparent;
            color: white;
            padding: 10px 10px;
        }

        #atualizar:hover {
            background: rgba(116, 118, 121, 0.29);

        }

        #excluir:hover {
            background: rgba(116, 118, 121, 0.29);

        }

        .sair {
            color: #FFFFFF;
            /*AJUSTAR O NAV DAS PÁGINAS!!*/
            border: 1px solid #FFF;
            border-radius: 10px;
            padding: 2px;
            margin: 2px auto;
            float: right;
            margin-top: 35px;
        }

        footer {
            clear: both;
            margin: 0 auto;
            text-align: center;
            width: 80%;
        }

        .footerconfig {
            justify-content: center;
            margin-right: 350px;
        }
    </style>




</head>

<body>
    <header>

        <nav>
            <ul>
                <li><a href="index.php" title="Home"><img src="../imagens/logo.png" alt="logo codebase" id="logo"></a></li>
                <li><a href="?logout" title="sair" class="sair">Sair</a></li>
            </ul>

        </nav>
    </header>
    <article class="cadastro">
        <form action="" method="post" id="form-atualizar" name="form-atualizar">
            <input type="hidden" name="id" value="<?= $usuario['id'] ?>">



            <fieldset>

                <h2 class="cadastro-h2">Perfil do Aluno
                </h2>
                <p>


                    <label for="login">Nome Completo:</label>
                    <input required type="text" name="nome_completo" id="nome_completo" value="<?= $usuario['nome_completo'] ?>" class="inputconfig" required placeholder="NOME COMPLETO">
                </p>
                <p>
                    <label for="email">E-mail:</label>
                    <input required type="email" name="email" id="email" value="<?= $usuario['email'] ?>" class="inputconfig" placeholder="E-MAIL">

                </p>
                <p>
                    <label for="senha">Senha:</label>
                    <input required type="password" name="senha" id="senha" class="inputconfig" placeholder="*******">

                </p>
                <p> <button type="submit" id="atualizar" name="atualizar">ATUALIZAR DADOS</button></p>

                <p><a class="excluir" href="?id=<?= $_SESSION['id'] ?>"> EXCLUIR</p>



                </tr>

            </fieldset>
        </form>
    </article>

    <hr>
    <footer>

        <ul>
            <li><a link href="devs.php" class="footerconfig">DEVS</a></li>
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