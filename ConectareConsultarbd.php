<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php 
	require ('dao.php');
 ?>
<body>
	<h4>CONEXÃO AO BD SQL</h4>
	<?php 
	$ret = conectar('localhost','root','','backend');
	echo "conectando ao banco: " .backend</br>;

	$consulta = select * from alunos;


	$obj_consulta = mysql_query($ret, $consulta) or die (mysql_error());

	echo"seguem abaixo os dados da tabela 'alunos': <br> ";

	while ($reg_consulta = msql_fetch_array($obj_consulta)){
	
	echo $reg_consulta['rgm'] . '';
	echo $reg_consulta['nome'] . '';
	echo $reg_consulta['sexo'] . '';
	echo $reg_consulta['telefone'] . '';
	}
	 ?>
	}
</body>
</html>