
<link rel="stylesheet" type="text/css" href="./css/cadastrar-dados.css">
<?php

// para poder colocar a mensagem, tem que iniciar a sessa.
session_start();
// incluir a conexao, que esta dentro do arquivo conexao.php
include_once("conexao.php");

// receber dados do formulario da pagina cadastrar.php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
// $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
// $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);


// Insetir os dados no bando
// created - valor de quando ele foi criado
$result_usuario = "INSERT INTO teste_data (nome, created) VALUES
('$nome', NOW() )"; // NOW - pegar data atual

// Executar a query
$resultado_usuario = mysqli_query($conn, $result_usuario);

// Verificando se ele salvou com sucesso
// se o mysqli_insert possuir o id da conexao conn, se foi inserido no bando de dados.
// se a nossa conexao $conn retornou um id, quer dizer que ele inseriu os dados no bando
if(mysqli_insert_id($conn)){
    // variavel global $_SESSION
    // "<span style='color: green';>Usuário cadastrado com sucesso! </span>";
    $_SESSION['msg'] = "<div id='sucesso-cadastro'> <span ><strong>Usuário cadastrado com sucesso!</strong></span> </div>";
    // redirecionamento para cadastrar.php
    // css esta no cadastrar-dados.css
    header("Location: ../cadastrar.php");
} else { 
    // manando para o cadastrar-usando a div no cadastrar-dados.css
    $_SESSION['msg'] = "<div id='erro-cadastrar'> <span ><strong>Erro: Dados não cadastrados!</strong></span> </div>";
    header("Location: ../cadastrar.php");
}

?>