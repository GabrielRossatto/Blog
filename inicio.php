<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 

    <title>Inicio</title>
</head>
<body>
<a class="cadastro" href="cadastrar.php">Cadastrar novo post</a>

<?php


include("conexao.php");


$sql = "SELECT postagens.ID, postagens.Nome_postagem, usuario.Nome
        FROM postagens
        JOIN usuario ON postagens.Autor = usuario.ID";
$result = mysqli_query($mysqli, $sql);
if (!$result) {
    echo "Erro: " . mysqli_error($mysqli);
}
while ($row = mysqli_fetch_assoc($result)) {
    
    echo "<br> . <a href='postagem.php?id=" . $row["ID"] . "'>" . $row["Nome_postagem"] . "</a>";
    echo "Autor: " . $row["Nome"];
};

?>
</body>
</html>

