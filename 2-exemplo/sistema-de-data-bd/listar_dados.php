
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

    <link rel="stylesheet" type="text/css" href="./css/listar_dados.css">

     <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    
        <title>Listar usuários</title>

        <style>
   

        </style>
     
    </head>
    <body>
    <h1>Listar usuários: </h1>

    <a href="listar_dados.php"> <input id="imp" type="button" value="Atualizar página"></a> 
    <a href="cadastrar.php"> <input type="button" value="Cadastrar"></a> 
    
    <?php
        // exibir a mensagem de cadastrou ou nao.
        if(isset($_SESSION['msg'])){ // se existir a nossa variavel global, entao ele acesse esse if,
            echo  $_SESSION['msg']; // imprime a mensagem.
            unset($_SESSION['msg']); // destroi a mensagem.
        }
    ?>

    <?php
        /******* FAZENDO A PAGINAÇÃO - INICIO ********/

        // receber o numero da pagina.
        // receber o valor da variavel $pagina
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

        // quando a pagina esta na pagina inicial.
        // se pagina_atual for diferente de vazio, entao vou passar o valor dela mesma,
        // se nao, vou colocar pagina 1.
        // $pagina - qual pagina o usuario esta, e deve ser carregado os dados.
        $pagina = (!empty($pagina_atual) ? $pagina_atual : 1);

        // setar a quantidade de itens por pagina.
        $quant_result_pagina = 3;

        // calcular o inicio da visualização.
        $inicio = ($quant_result_pagina * $pagina) - $quant_result_pagina;

        /******* FAZENDO A PAGINAÇÃO - FIM ********/

        // criando a query para pesquisar no banco.
        // trazer a quantidade de dados para as paginas.
        $result_usuario = "SELECT * FROM teste_data LIMIT $inicio, $quant_result_pagina";

        $resultado_usuario = mysqli_query($conn, $result_usuario);

        // criando um while para percorrer o array(linhas) do banco
        // mysqli_fetch_assoc - ler o resultado

        // toda vez que passar pelo while, 
        //os valores do bando vai estar na variavel $row_usuario
        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){

            // imprimindo os valores das colunas
            echo "<br><br>";
            echo "<article>";

                // UTIL PARA DATA
                // https://www.portaleducacao.com.br/conteudo/artigos/idiomas/funcao-data-e-hora-em-mysql/7408

                echo "ID: " . $row_usuario['id']."<br>";
                echo "Nome: " . $row_usuario['nome']."<br>";

                echo "Data completa: " . $row_usuario['created']."<br><br>";

                echo "Data: " .date("d/m/Y", strtotime($row_usuario['created']))."<br>";
                echo "Hora: " .date("H:i", strtotime($row_usuario['created']));

            echo "</article>";
        }
        echo "<br><br>";

         /******* NÚMERO PARA ALTERAR DE PAGINA - INICIO ********/

         // paginacao - somar a quantidade de usuarios.

         // somar a quantidade de usuarios cadastrados.
         // contar a quant. de registros na coluna id, armazenar em num_result, da tabela markerst4s.
         $result_pg = "SELECT COUNT(id) AS num_result FROM teste_data";

         // executando a query.
         $resultado_pg = mysqli_query($conn, $result_pg);

         // ler os dados e atribuir na variavel row_pg.
         $row_pg = mysqli_fetch_assoc($resultado_pg);
         //echo $row_pg['num_result'];

         // Quantidade de pagina de vai ter. funcao ceil, para arredondar os numeros.
         $quantidade_pag = ceil($row_pg['num_result'] / $quant_result_pagina);

         // Limitar os link antes e depois.
         $max_links = 2;
         // primeira pagina.
         echo "<a href='listar_dados.php?pagina=1'>Primeira página</a>";

        // dois links antes.
        // toda vez que passar pelo for, ele vai acrescentar mais 1 link.
        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina-1; $pag_ant ++){

            if($pag_ant >= 1){
            echo " <a href='listar_dados.php?pagina=$pag_ant'>$pag_ant</a>";
            }
        }

        // pagina atual que o usuario esta.
        echo "  -   " . " $pagina " . "   -   ";

        // dois links depois.
        // toda vez que passar pelo for, ele vai acrescentar mais 1 link.
        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){

            if($pag_dep <= $quantidade_pag){
            echo " <a href='listar_dados.php?pagina=$pag_dep'>$pag_dep</a> ";
            }
        }
        
        // ultima pagina.
         echo " <a href='listar_dados.php?pagina=$quantidade_pag'>Ultima página</a> ";

        /******* NUMERO PARA ALTERAR DE PAGINA - FIM ********/
        
    ?>
    
</div>
    </body>
</html>


<!-- OUTROS COISAS QUE PODERAM SER USADAS

https://www.youtube.com/watch?v=wFfwt_Rbp1o&list=PLmY5AEiqDWwDjjE7dEFT1jdrgah6-z7UCg&index=2
Como listar registros do banco de dados com PHP e MySQLi e criar paginação

https://www.youtube.com/watch?v=Jpz1lF5zt2k&list=PLmY5AEiqDWwDjjE7dEFT1jdrgh6-z7UCg&index=6
Como pesquisar com PHP e MySQLi

https://www.youtube.com/watch?v=pDhsb7s2Ous
https://www.youtube.com/watch?v=ejnU-17yd8A
https://www.youtube.com/watch?v=zuV7PLyqbpg

https://www.youtube.com/watch?v=CYVDtwTxrsc 
Como apagar registros no banco de dados com PHP e MySQLi.

https://getbootstrap.com/docs/3.4/javascript/ 

Como carregar janela modal do Bootstrap quando abrir a página
https://www.youtube.com/watch?v=LRMOuRt0Vc8


Como Criar Janela Modal para Visualizar Detalhes do Produto
https://www.youtube.com/watch?v=yWIJVaNyTKQ

$tipo = $_POST["tipo"]; - menos seguro!
$tecn = filter_input(INPUT_POST, 'tec'); - mais seguro!

echo "este é o " . $tecn;
https://www.guj.com.br/t/pegar-os-dados-do-input-radio/355389/2



 -->
