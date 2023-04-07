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