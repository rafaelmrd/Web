<?php
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "celke";//MUDEI, ESTAVA celke
	
	// Criar a conexao. Armazenar na variavel conn a conexao.
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
  
  mysqli_set_charset($conn, "ISO-8859-1");
  mysqli_set_charset($conn, "utf8");



/* CRIANDO A TABELA DO BANCO DE DADOS

CREATE TABLE `markers` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `name` VARCHAR( 60 ) NOT NULL ,
  `address` VARCHAR( 80 ) NOT NULL ,
  `lat` FLOAT( 10, 6 ) NOT NULL ,
  `lng` FLOAT( 10, 6 ) NOT NULL ,
  `type` VARCHAR( 30 ) NOT NULL,
  `title` VARCHAR( 30 ) NOT NULL
) ENGINE = MYISAM ;
*/


/* INSERIR NO BANCO DE DADOS

INSERT INTO `markers` (`id` , `name`, `address` , `lat`, `lng`, `type`, `title`) VALUES
(1, 'Test1', 'endereço test1', -19.777900, -44.021100, 'ed test1', 'title1' ),
(2, 'Test2', 'endereço test2', -19.777900, -44.023100, 'ed test2', 'title2' ),
(3, 'Test3', 'endereço test3', -19.777900, -44.025100, 'ed test3', 'title3' );
*/

// Eliminar tabela e coluna 

//ALTER TABLE <tabela> DROP COLUMN <coluna>;
//ALTER TABLE markers DROP COLUMN address;