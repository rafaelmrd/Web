
<?php
//iniciar a sessão
session_start();
//incluir a conexao
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <!-- <link rel="stylesheet" type="text/css" href="./css/cadastrar-dados.css"> -->
    
        <title>Cadastrar</title>

       <style>
        
        fieldset{
                width: 40%;
                }
       
       </style>

    </head>
    <body>
    
    <!--  -->
    <!-- Link para voltar para o mapa -->
    

    <!-- metodo post para enviar os dados, enviar para o arquivo processa_cad.php -->
    <form method="POST" action="processa_cadastro.php">
    <fieldset> 

    <?php
        // exibir a mensagem de cadastrou ou nao.
        if(isset($_SESSION['msg'])){ // se existir a nossa variavel global, entao ele acesse esse if,
            echo  $_SESSION['msg']; // imprime a mensagem.
            unset($_SESSION['msg']); // destroi a mensagem. 
        }
    ?>
<br>
    <!--  -->
    
        <legend>Teste</legend>
    

        Cadastrar Dados dos clientes:
   
            <!-- Inicio da tabela entrada-dados -->
            <table id="tabela1" nome="entrada-dados" cellspacing="10">      <!-- Criando tabela -->
                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Nome: </label>
                    </td>
                    <td aling="left">
                        <input type="text" name="nome" placeholder="Nome do cliente...">
                    </td>
                </tr>
    <!-- <input type="text" name="rg" size="13" maxlength="13"> -->

                <tr>
                    <td>
                        <label for="">Descrição: </label>
                    </td>
                    <td>
                        <input type="text" name="descricao" placeholder="Descrição...">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Latitude: </label>
                    </td>
                    <td>
                        <input type="text" name="lat" placeholder="Latitude...">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="">Longitude: </label>
                    </td>
                    <td>
                        <input type="text" name="lng" placeholder="Longitude...">
                    </td>
                </tr>
            </table> 
            <!-- Fim da tabela entrada-dados -->
<hr>
            <!-- Inicio da tabela botoes -->
            <table nome="botoes" cellspacing="10">
                <tr>
                    <td>
                        <input id="cadastro" type="submit" value="Cadastrar">
                    </td>

                    <td>
                        <input id="limpar" type="reset" value="Limpar">
                    </td>
                    <td>
                        <a href="cadastrar.php"> <input id="atualizar-pag" type="button" value="Atualizar página"></a>
                    </td>
                    
                </tr>

<!--
                <tr>
                    <td>
                        
                    </td>

                    <td>
                        
                    </td>
                </tr>
-->

                <tr>
                    <td>
                        <a href="index.php"> <input id="voltar" type="button" value="Voltar ao mapa"></a>
                    </td>

                    <td>
                        <a href="listar_dados.php"> <input id="consulta" type="button" value="Consultas/Listar"></a>
                    </td>

                    <td>
                        <a href="pesquisar.php"> <input id="pesquisa" type="button" value="Pesquisar"></a>
                    </td>
                </tr>

            </table> 
            <!-- Fim da tabela botoes -->
<br>

<td>
        <label for="teste">Teste:</label>
   </td>
   
    <td aling="left">
        <select name="estado">
            <option value="Teste1">Teste1</option> 
            <option value="Teste2">Teste2</option> 
        </select>
</td>

    </fieldset> 
            <!-- <hr> -->
    </form>

    <footer><!-- Rodapé -->
        <p>&copy; Projeto</p>

    </footer>

    </body>
</html>
