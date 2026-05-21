<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Discografia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 
    <div class= "formulario"> 
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
</body>
</html>