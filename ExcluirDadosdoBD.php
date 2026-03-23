<?php
  session_start();    // abre uma sessão p enviar dados entre PhP
                      // recebe e trata dado da página anterior
  $rgm = filter_input(INPUT_GET, 'rgm', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['rgm'] = $rgm;    // passa os dados para a sessão criada

  require("dao.php");
  $con = conectar('localhost','root','','backend');
  mysqli_set_charset($con,"utf8");
  $sql = "select * from alunos where rgm=$rgm";
  $consulta = mysqli_query($con,$sql) or die(mysqli_error($con));
  $registros = mysqli_num_rows($consulta);
  
  if ($registros > 0){        // se encontrou o RGM mostrará os dados e chamará
                              // a página que efetivará a exclusão no BD
      echo "<h1> Exclusão de Dados </h1>";
      echo "<br><h3> Seguem os dados do RGM: $rgm </h3>";
      while($reg_consulta = mysqli_fetch_array($consulta)){
          echo 'Nome : '.$reg_consulta['nome'].'<br>';
          echo 'Telefone : '.$reg_consulta['telefone'].'<br>';
          echo 'Sexo : '.$reg_consulta['sexo'].'<br><br>';
      }
      echo '<a href="excluir.php?rgm=rgm"> Clique aqui para confirmar a 
                                          Exclusão dos Dados </a> <br><br>';
  }
  else{
      echo 'Aluno não encontrado <br><br>';
  }
  echo '<a href="infoRGmpESCL.php"> Voltar a tela anterior </a>'.'<br><br>';
  echo '<a href="index.php"> clique aqui para voltar ao Menu </a>';
?>