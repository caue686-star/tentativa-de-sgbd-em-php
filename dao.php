<?php 
	function conectar($host,$user,$senha,$bd){
		$con = mysqli_connect($host,$user,$senha,$bd);
		if (mysql_conect_errno()){
			echo "falha ao conectar com o mysql: " .mysqli_connect_error();
			exit(0);
		}
		return $con;
	}


 ?>