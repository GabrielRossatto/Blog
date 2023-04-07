
<form method="post" action="">

    <label>Nome da postagem</label>
    <input type="text" name="nome_postagem"> <br>
    <label>Conteudo</label>
    <input type="text" name="conteudo">
    <input type="submit" name="submit" value="Enviar dados">

</form>


<?php

include("conexao.php");

if(isset($_POST['submit'])) {
    $nome = $_POST['nome_postagem'];
    $cont = $_POST['conteudo'];

    $sql = "INSERT INTO postagens (Nome_postagem, Conteudo) VALUES ('$nome', '$cont')";


    if($mysqli->query($sql) == TRUE) {
        echo "Dados inseridos com sucesso";

    } else {
        echo "Erro: " . $sql . "<br>" . $mysqli->error;
    }
}

?>