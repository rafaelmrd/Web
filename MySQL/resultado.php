<?php

// Buscar as informaçoes no banco de dados

// Incluindo a conexao
require("conexao.php");

/*
Se você não tiver acesso às dom_xmlfunções do PHP , poderá gerar o XML com a echofunção. 
Use uma função auxiliar (por exemplo parseToXML) ao usar apenas a echofunção para codificar 
corretamente algumas entidades especiais (<,>, ", ') para serem compatíveis com XML.

Abaixo está o arquivo PHP que se conecta ao banco de dados MySQL e despeja o XML no navegador.
*/
function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
  $xmlStr=str_replace("&",'&amp;',$xmlStr);
  //$xmlStr=str_replace("ç",'&#33;',$xmlStr);
	return $xmlStr;
}

// Selecione todas as linhas na tabela de marcadores
$result_markers = "SELECT * FROM markerst4s"; // MUDEI AQUI, estava FROM markers"
$resultado_markers = mysqli_query($conn, $result_markers); // Tudo que ele encontrar ira atribuir a //resultado_markers.

header("Content-type: text/xml"); // Relacionado com o XML

echo '<markers>'; // Abrir a tag markers. // MUDEI AQUI, estava echo '<markers>';

// Interação com o resultado. @mysqli_fetch. @ é para ocultar os erros
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){ // resultado_markers: resulado da consulta
  // Add to XML document node // Criando um XML
  echo '<marker ';
  echo 'id="' . $row_markers['id'] . '" ';
  echo 'nomecliente="' . $row_markers['nomecliente'] . '" ';
  echo 'descricaochamado="' . parseToXML($row_markers['descricaochamado']) . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';

  /*
  echo 'name="' . parseToXML($row_markers['name']) . '" ';
  echo 'address="' . parseToXML($row_markers['address']) . '" ';
  echo 'type="' . $row_markers['type'] . '" ';
  echo 'title="' . $row_markers['title'] . '" ';
  echo 'createdAt="' . $row_markers['createdAt'] . '" ';
  echo 'updatedAt="' . $row_markers['updatedAt'] . '" ';
  */

  echo '/>';
  $ind = $ind + 1;
}

// End XML file // Fichar o markers
echo '</markers>'; // MUDEI AQUI, ESTAVA  echo '</markers>';

