<?php 
	require('dao.php');
	try{

		$ret = conectar('localhost','root','','backend');
		
		$rgm = 4324;
		$nome = "algum nome";
		$sexo = "m";
		$telefone = 532424354;

		$sql = "select * from alunos where rgm =$rgm";
		$consulta = msql_query($ret,$sql);
		$retorno = mysql_num_rows($consulta);

		if(retorno > 1)
			echo"esse aluno já existe!";
		else{
			$sql = "insert into alunos (rgm,nome,sexo,telefone)
			values ($rgm,$nome,$sexo,$telefone)";
			$consulta = mysql_query($ret,$sql);
			if ($consulta)
				echo"cadastro realisado com sucesso!";
			else
				echo"problema ao realisar o cadastro";
		}

		catch(Exception = $e){
			echo "falha na conexão" .$e->getMessage(); 

		
	}
 ?>