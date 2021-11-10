<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        $ehPost = true;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST["nome"];
            $matricula = $_POST["matricula"];
            $funcao = $_POST["funcao"];
            $nomeArquivo ="Cadastrados.txt";
            $txtC = "nome | matricula | função\n";
            $txt = "$nome | $matricula | $funcao\n";
            file_put_contents($nomeArquivo, $txt, FILE_APPEND);
        } else {
            $ehPost = false;
        }
    ?>
    <section>
        <a href="cadastro.php">Cadastrar</a><br>
        <a href="alt.php">Alterar</a><br>
        <a href="list.php">Listar</a><br>
        <a href="excluir.php">Excluir</a><br><br>
        <h3>
            <?php 
                if ($ehPost) {echo "$nome cadastrado com sucesso";}
            ?>
        </h3>
        <form action="cadastro.php" method="POST">
            nome:   <input type="text" name="nome"><br>
            matricula: <input type="text" name="matricula"><br>
            função:   <input type="text" name="funcao"><br>
            <input type="submit" value="enviar">
        </form>
</section>
    
</body>
</html>