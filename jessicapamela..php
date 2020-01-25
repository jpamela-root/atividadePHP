<?php
	$palavras = array('estudar', 'educação', 'esforço', 'persistência', 'dedicação', 'crescimento', 'evolução', 'sabedoria', 'trabalho', 'entusiasmo', 'alegria', 'vitória', 'sucesso', 'profissão', 'conhecimento', 'vida');		
?>
<html>
	<head>
	<title> Projeto 2</title>
	</head>
	<body > 
		<div>
			<table id="Menor" border="1">
				<tr><td colspan="2"> LETRAS PEQUENAS </td> </tr>
				<?php  
					for ($i=0; $i < count ($palavras); $i++) {
						$tamanho = strlen(utf8_decode($palavras[$i]));
						if ($tamanho <=7){
							echo "<tr><td>".$palavras[$i]."</td><td> ".strlen(utf8_decode($palavras[$i]))."</td></tr>";
						}
					}
				?>
			</table>
			<br>
			<table id="Maior" border="1">
				<tr><td colspan="2"> LETRAS GRANDES </td> </tr>
				<?php 
					for ($i=0; $i < count ($palavras); $i++) {
						$tamanho = strlen(utf8_decode($palavras[$i]));
						if ($tamanho >7){
							echo "<tr><td>".$palavras[$i]."</td><td> ".strlen(utf8_decode($palavras[$i]))."</td></tr>";
						}
					}
				?>
			</table>
		</div>
	</body>
</html>