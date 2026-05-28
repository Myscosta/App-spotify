<?php
$titulo_da_pagina = "Visualizar Discografia";
include "inc-cabecalho.php";
include "inc-conexao.php";

$id = $_GET['id'];

$sql = "select * from tb_discografia where id = $id";
$resultado = mysqli_query($conexao, $sql);

$nome = $ano = $artista = $tipo = $foto ="";
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['Nome'];
    $ano = $linha['Ano'];
    $artista = $linha['Artista'];
    $tipo = $linha['Tipo'];
    $foto = $linha['Foto'];
}


?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container mt-5">
    <h1>Visualizar Discografia</h1>
    <div class="card">
    <div class="card-body border border-primary">
    Foto: <img  class="mb-4 mt-4" class=" card-img-top" src="<?=$foto; ?>" alt="<?=$nome; ?>"> <br>
    Nome: <?=$nome; ?> <br>
    Ano: <?=$ano; ?> <br>
    Artista: <?=$artista; ?> <br>
    Tipo: <?=$tipo;?> <br>
    </main>
    </div>
    </div>

    <?php
    mysqli_close($conexao);
    include "inc-rodape.php"; ?>

</body>