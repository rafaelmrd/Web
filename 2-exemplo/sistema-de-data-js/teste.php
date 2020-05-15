<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>teste-PHP-JS</title>
	</head>

	<style type="text/css">

		label {
		  display: flex;
		  align-items: center;
		}

		span::after {
		  padding-left: 5px;
		}

		input:invalid + span::after {
		  content: '✖';
		}

		input:valid+span::after {
		  content: '✓';
		}

	</style>

	<body>
		<script src="teste.js"></script>


		<?php

			// CHAMANDO UMA VARIÁVEL JS PARA O PHP
			// $variavelphp = "<script>document.write(variavel js)</script>";
   // 			echo $variavelphp;

			// CONVERTER DATA PARA PT-BR COM PHP
			// $dateEN = new \DateTime('2017-02-01');
			// $datePTBR = $dateEN->format('d/m/Y');
			// echo $datePTBR; //output: 01/02/2017

		?>
		<label for="male">Digite número</label>
  		<input type="text" name="algo_num" id="algo_num" value=""><br>

  		<label for="male">Digite string</label>
  		<input type="text" name="algo_string" id="algo_string" value=""><br>

  		<input id="b2" type="button" value="Imprimir valor" onclick="teste()"><br><br>
		
		<div id="impri_num"></div><br>

		<div id="impri_string"></div><br>

		<form>
			<label for="start">Data:
				<input type="date" id="start" name=party min="2020-01-01" max="2020-12-31" required>
		       	<span class="validity"></span>
	       	</label>

	       	<p>
	       		<button>Enviar</button>
	       	</p>

		</form>
       	<input type="button" value="Imprimir data" onclick="data()"><br><br>

       	<div id="impri_data"></div><br><br>

       	<div id="impri_data_out"></div>

       	<div id="impri_data_br"></div>

       	<input type="button" value="Imprimir data de hj" onclick="data2()"><br><br>
       	<div id="impri_data_hj"></div>

       	<input type="button" value="tt" onclick="dataAtualFormatada()"><br><br>
       	<div id="tt"></div>
       	
       	

		<!-- <script src="teste.js"></script> -->

	</body>
</html>

