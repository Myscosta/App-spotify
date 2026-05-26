<?php
$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";
?>
<body>
    <main class="container ">
        <?php include "inc-menu.php"; ?>
        <h1>Listagem de Discografia</h1>
        <div class="row">
            <div class="col">
                <a href="discografia-formulario.php">Nova Discografia</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <table class= "table">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Ano</td>
                        <td>Artista</td>
                        <td>Tipo</td>
                        <td>Foto</td>
                    </tr>
                
            <?php
            #abrir conexao
            include "inc-conexao.php";

            #consulta os dados
            $sql = "select * from tb_discografia order by artista , ano";
            $resultado = mysqli_query($conexao, $sql);

            #listar os dados
            while($linha_resultado = mysqli_fetch_assoc($resultado)){
                echo "<tr>";

                echo "<td> {$linha_resultado['Id']} </td>";
                echo "<td> {$linha_resultado['Nome']} </td>";
                echo "<td> {$linha_resultado['Ano']} </td>";
                echo "<td> {$linha_resultado['Artista']} </td>";
                echo "<td> {$linha_resultado['Tipo']} </td>";
                echo "<td> {$linha_resultado['Foto']} </td>";

                echo "</tr>";
            }
            #fechar conexao
            mysqli_close($conexao);
            ?>
                </table>
           </div> 
        </div>

     </main>
<?php include "inc-rodape.php"; ?>