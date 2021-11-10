<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <section>
        <a href="cadastro.php">Cadastrar</a><br>
        <a href="alt.php">Alterar</a><br>
        <a href="list.php">Listar</a><br>
        <a href="excluir.php">Excluir</a><br><br>
        <h1>Alterar Cadastro</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["aluno"];
                $matricula = $_POST["matricula"];
                $funcao = $_POST["funcao"];
                
            }
        ?>
        <form action="alteracao.php" method="POST">
            nome:   <input type="text" name="aluno" value=""><br>
            matricula: <input type="text" name="matricula" value=" "><br>
            funcao:   <input type="text" name="funcao" value=" "><br>
            <input type="submit" value="Alterar">
        </form>
    </section>
</body>
</html>