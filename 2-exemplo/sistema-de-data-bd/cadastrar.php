
<?php
//iniciar a sessão
session_start();
//incluir a conexao
include_once("conexao-banco/conexao.php");
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

        label {
                display: flex;
                align-items: center;
        }
       
       </style>

    </head>
    <body>
    
    <!--  -->
    <!-- Link para voltar para o mapa -->
    

    <!-- metodo post para enviar os dados, enviar para o arquivo processa_cad.php -->
    <form method="POST" action="conexao-banco/processa_cadastro.php">
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
   
            <!-- Inicio da tabela entrada-dados -->
            <table id="tabela1" nome="entrada-dados" cellspacing="10">      <!-- Criando tabela -->

                <strong>Cadastrar Dados dos clientes:</strong>


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

               <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">CPF: </label>
                    </td>
                    <td aling="left">
                        <input id="cpf" type="text" placeholder="Ex.: 000.000.000-00">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">CEP: </label>
                    </td>
                    <td aling="left">
                        <input id="cep" type="text" placeholder="Ex.: 00000-000">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Data: </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="data" placeholder="Ex.: dd/mm/aaaa" maxlength="10" autocomplete="off">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">R$: </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="dinheiro" placeholder="Ex.: 000,00">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Telefone: </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="telefone" placeholder="Ex.: (00) 9.0000-0000">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">RG: </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="rg" placeholder="Ex.: 00.000.000">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Hora: </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="hora" placeholder="Ex.: 00:00">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Alfabético : </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="alfa_bet" placeholder="Ex.: (A-Z, a-z)">
                    </td>
                </tr>

                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Alfanumérico  : </label>
                    </td>
                    <td aling="left">
                        <input type="text" id="alfa_num" placeholder="Ex.: (A-Z, a-z ,0-9)">
                    </td>
                </tr>


                <tr>                                                        <!-- Linha da tabela -->
                    <td>                                                    <!-- Célula/coluna da linha -->
                        <!-- Preciso criar um campo -->
                        <label for="">Máscara para CPF e CNPJ no mesmo campo  : </label>
                    </td>
                    <td aling="left">
                        <input id="cpfcnpj" type="text" placeholder="digite o CPF ou CNPJ" name="cpfcnpj" onkeyup="maskCpfCnpj2()" required>
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
                    <td>
                        <a href="listar_dados.php"> <input id="atualizar-pag" type="button" value="Listar dados"></a>
                    </td>
                    
                </tr>

            </table> 
            <!-- Fim da tabela botoes -->
<br>

    </fieldset> 
            <!-- <hr> -->
    </form>

    <footer><!-- Rodapé -->
        <p>&copy; Projeto</p>

    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

    
    <script src="https://unpkg.com/imask"></script>
    <script src="jquery.js" type="text/javascript"></script>

    </body>
</html>
