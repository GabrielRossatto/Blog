<?php

include("conexao.php");


$sql = "SELECT postagens.ID, postagens.Nome_postagem, usuario.Nome
        FROM postagens
        JOIN usuario ON postagens.Autor_ID = usuario.ID";
$result = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    
    echo "<a href='postagem.php?id=" . $row["ID"] . "'>" . $row["Nome_postagem"] . "</a> <br>";
    echo "Autor: " . $row["Nome"] . "<br>";
};

?>