<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>conectando ao bd</title>
</head>
<?php 
require('dao.php') ;
?>
<body>
	<h3>recebendo dados do bd</h3>
	<?php 
	$ret = conectar('localhost','root','','backend');
	$consulta = "select * from alunos order by rgm";
	$obj_consulta = mysql_query($ret,$consulta) or die mysql_error();
	 ?>

	 <table border="2", cellpadding="2", cellspacing="1">
	 	<tr>
	 		<th>RGM</th>
	 		<th>NOME</th>
	 		<th>SEXO</th>
	 		<th>NUMERO</th>
	 	</tr>
	 	<?php 
	 	while ($reg_consulta = mysqli_fetch_array($obj_consulta)){
	 		echo "<tr>";
	 		echo "<td align="center"> $reg_consulta["rgm"]." </td>;
	 		echo "<td align="center"> $reg_consulta["nome"]."</td>;
	 		echo "<td align="center"> $reg_consulta["sexo"]."</td>;
	 		echo "<td align="center"> $reg_consulta["numero"]." </td>;

	 	}
	 	 ?>
	 	

	 </table>
</body>
</html>