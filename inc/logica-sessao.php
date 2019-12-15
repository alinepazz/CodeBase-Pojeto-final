<?php
/* SESSÕES PHP*/ 


/* VERIFICANDO SE NÃO EXISTE UMA 
SESSÃO EM FUNCIONAMENTO */


if(!isset($_SESSION)){
        //Inicamos
        session_start();
}
/*Passamos os dados para funçao (id, nome, email, tipo)
e levamos estas informações para a sessão na forma de variaveis */
function login($id, $nome_completo, $email, $curso){

    //Criar variaveis de SESSÃO
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['nome_completo'] = $nome_completo;
    $_SESSION['curso'] = $curso;
}


function verificaAcesso(){
    /* Se o usuario não estiver logado (ou seja, não há variavel de sessão com ID) */
    if(!isset($_SESSION['id']) ){
        //Destrua qualquer resquicio de sessão 
        session_destroy();
        //mande ele para a página de login
        header("location:login.php?acesso_proibido");
        //Para complementamento do script
        exit;
    }
}

function logout(){
    session_start();
    session_destroy();
    header("location:index.php?logout");
    exit;
}

