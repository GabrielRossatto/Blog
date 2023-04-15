<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de post</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

<div>
    <form method="post" action="">
     
        <label>Nome da postagem</label>     
        <input type="text" name="nome_postagem"> <br>
        <label>Autor</label>
        <input type="text" name="autor">
        <label>Conteudo</label>
        <input type="text" name="conteudo">
        <input class= "enviar" type="submit" name="submit" value="Enviar dados">

    </form>
</div>
</body>
</html>
<?php

include("conexao.php");

if(isset($_POST['submit'])) {
    $nome = $_POST['nome_postagem'];
    $cont = $_POST['conteudo'];
    $aut = $_POST['autor'];

    $sql_autor = "INSERT INTO usuario (Nome) VALUES ('$aut')";
    $sql_postagem = "INSERT INTO postagens (Nome_postagem, Conteudo) VALUES ('$nome','$cont')";


    if($mysqli->query($sql_autor) === TRUE && $mysqli->query($sql_postagem) === TRUE) {
        echo "Dados inseridos com sucesso";

    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }
}

?>

<a href="inicio.php">Voltar ao inicio</a>