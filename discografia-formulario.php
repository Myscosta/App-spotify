<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro discografia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class= "formulario"> 
       <?php include "inc-menu.php"; ?>

    <h1 class="titulo">Cadastro de Discografia</h1>  
    <form action="discografia-salvar.php" method = "post">
    <label>Artista</label><br>
    <input type="text" name = "artista"><br>  
    <label>Nome do álbum</label><br>
    <input type="text" name = "nome"><br>
    <label>Ano do lançamento</label><br>
    <input type="number" name = "ano"><br>
    <label>Tipo</label><br>
        <select name="tipo">
            <option value="album">ALbum</option>
            <option value="Single">Single</option>
        </select><br>

    <label>Foto</label><br>
    <input type="text" name = "foto"><br><br>
        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>

        </form> 
    </div> 
    <?php include "inc-rodape.php"; ?>
    </html>
