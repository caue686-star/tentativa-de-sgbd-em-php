<?php
  require("dao.php");
  $rgm=$_POST['rgm'];
  try{
            // verifica se o RGM Existe
    $ret = conectar('localhost','root','','backend');
    mysqli_set_charset($ret,"utf8");
    $sql = "select * from alunos where rgm=$rgm";
    $consulta = mysqli_query($ret,$sql) or die(mysqli_error($con));
    $registros = mysqli_num_rows($consulta);

    if ($registros > 0){    // se encontrou o RGM
      echo "<h1> Atualização de Dados </h1>";
      echo "<br><h3> Seguem os dados do RGM: $rgm </h3>";
      while($reg_consulta = mysqli_fetch_array($consulta)){
          $nome = $reg_consulta['nome'];
          $telefone = $reg_consulta['telefone'];
          $sexo = $reg_consulta['sexo'];
      }
?>
    <html>
    <head>
        <meta charset="utf-8">
        <title> Alteração de Dados </title>
    </head>
    <body text="blue" bgcolor="#ccbbaa">
        ...altere os campos desejados <br><br>

        <form action="atualizacaoBD.php" method="POST">
            <input type="hidden" name="rgm" value="<?php echo $rgm; ?>">
            Nome : <input type="text" name="nome"  value="<?php echo $nome; ?>"> <br><br>
            Telefone : <input type="numeric" name="telefone" value="<?php echo $telefone; ?>"> <br><br>
            Sexo : <input type="text" name="sexo"  value="<?php echo $sexo; ?>"> <br><br>
            <br><br><input type="submit" value="Salvar">
        </form>
        <a href="informaRGMpAtualizar.php"> Clique para voltar a tela anterior </a> <br><br>
        <a href="index.php"> clique aqui para voltar ao Menu </a>
    </body>
    </html>
<?php
    }
    else{        // caso o RGM não exista, outra forma p voltar a tela anterior
      echo "<script> alert('RGM não encontrado !');location.href='informaRGMpAtualizar.php';</script>";
    }
  } catch (Exception $e) {
    echo 'Falha no acesso ao BD : '.$e->getMessage();
  }
?>