<?php
$titulo_da_pagina = "Discos";
include "inc-cabecalho.php";
?>

<body>
    <main class="container">
        <h1 class="text-center fs-2 mt-2 mb-4">Discografia</h1>
        <div class="row mb-4">
            <?php
            include "inc-conexao.php";
            $sql ="select * from tb_discografia order by Artista, Ano";
            $resultado = mysqli_query($conexao, $sql);
            while($linha = mysqli_fetch_assoc($resultado)){
            ?>
            <div class="col-3">
                <div class="cartao" style="background-image: url('<?=$linha['Foto'];?>');">
                    <div class="cor-cartao">
                        <div class="texto-cartao p-3">
                            <h1 class="fs-4"><?=$linha['Nome'];?></h1>
                            <h2 class="fs-5"><?=$linha['Artista'];?></h2>
                            <h3 class="fs-6"><?=$linha['Tipo'];?> - <?=$linha['Ano'];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        mysqli_close($conexao)
        ?>
        </div>
    </main>
</body>

<?php
include "inc-rodape.php";

?>
