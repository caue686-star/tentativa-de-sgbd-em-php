<?php
  session_start();        // entra na sessão já aberta
  $rgm = $_SESSION['rgm'];    // recebe o dado passado do PhP

  require("dao.php");
  $sql = "delete from alunos where rgm = $rgm";
  $con = conectar('localhost','root','','backend');
  mysqli_query($con,$sql) or die(mysqli_error($con));
  
  // verifica se a exclusão foi efetivada
  if(mysqli_affected_rows($con) > 0){
      echo "Aluno excluído com sucesso";
  }else
      echo "Aluno NÃO excluído !! ";

  echo '<br>';
  echo '<a href="informaRGMpExcluir.php"> Voltar a tela de Exclusão </a>'.'<br><br>';
  echo '<a href="index.php"> Voltar ao Menu </a>';
  //header("Location:informaRGMpExcluir.php"); // outra forma p chamar um programa Php
?>