<?php
$id = $_GET['id'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$artista = $_POST['artista'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

include "inc-conexao.php";
$sql = "update tb_discografia set Nome='{$nome}' , Ano='{$ano}' , Artista='{$artista}' ,
Tipo='{$tipo}' , Foto='{$foto}' where Id={$id}";
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('Location:discografia-listagem.php');

?>
