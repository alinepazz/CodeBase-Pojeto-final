<?php
require "conecta.php";

//INSERT

function inserirNovoAluno($conexao, $nome_completo, $email, $senha, $curso) {
    $sql = "INSERT INTO alunos(nome_completo, email, senha, curso) VALUES('$nome_completo', '$email', '$senha', '$curso')";

mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

}


function codificaSenha($senha){
    return password_hash($senha, PASSWORD_BCRYPT);
}//fim codificaSenha


function buscaAlunos($conexao, $email){
    $sql = "SELECT * FROM alunos WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}


function lerUmAluno($conexao, $id){
    $sql = "SELECT * FROM alunos WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);
}

function verificaSenha($senhaDigitada, $senhaBanco){ 
    if(password_verify($senhaDigitada, $senhaBanco) ){
        return $senhaBanco;
    }else {
        return codificaSenha($senhaDigitada);
    }
}

//ATUALIZAR
function atualizarAluno($conexao, $id, $nome_completo, $email, $senha){
    $sql = "UPDATE alunos SET nome_completo = '$nome_completo', email = '$email', senha = '$senha' WHERE id = $id";
    
    mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
    
    }  

//EXCLUIR
function excluirAluno($conexao, $id){
    $sql = "DELETE FROM alunos WHERE id = $id";
//return $sql;

  mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
 }
