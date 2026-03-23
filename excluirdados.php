<?php 
	require("$dao.php");
	$rgm = 2;
	$sql = "delete from alunos where rgm = $rgm";
	$ret = conectar ('localhost','root','','backend');
	mysqli_query($ret,$sql) or die (mysql_error($con));
	echo "usuario excluído com sucesso!";
 ?>