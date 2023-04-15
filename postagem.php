<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 

    <title>Postagem</title>
</head>
<body>
    <?php 
    include("conexao.php");

    $id = $_GET['id'];

    $sql = "SELECT * FROM postagens WHERE ID = $id";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);
    $nome_postagem = $row['Nome_postagem'];
    $conteudo = $row['Conteudo'];

    ?>

    <h2><?php echo $nome_postagem; ?></h2>
    <p><?php echo $conteudo; ?></p>
    <a href="inicio.php">Voltar ao inicio</a>
</body>
</html>

