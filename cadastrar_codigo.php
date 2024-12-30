<?php

$cod_cdd = $_POST["codigo_cdd"];
$cod_subtema = $_POST["codigo_tema"];
$tema = $_POST["tema"];
$subtema = $_POST["subtema"];


$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");


if(isset($_POST["cadastrar"])){

$inserir = "INSERT INTO cdd(cod_cdd, cod_subtema, tema, subtema) 
VALUES ($cod_cdd, '$cod_subtema', '$tema', '$subtema')";

mysqli_query($conexao, $inserir);

echo "Cadastro Realizado com Sucesso!!! <br><br>";

echo "<a href='CadastroCDD.html'>Clique para Voltar e continuar Cadastrando.....</a>";

}else if(isset($_POST["excluir"])){

$excluir = "DELETE FROM cdd WHERE cod_cdd = '$cod_cdd'";

mysqli_query($conexao, $excluir);

echo "<script>alert('Código CDD Excluído com Sucesso!!!');</script>";

echo "<a href='CadastroCDD.html'>Clique para Voltar e continuar Cadastrando.....</a>";

}else if(isset($_POST["alterar"])){

    $alterar = "UPDATE cdd SET cod_subtema = '$cod_subtema', tema = '$tema', subtema = '$subtema' WHERE cdd.cod_cdd = '$cod_cdd';";
    
    mysqli_query($conexao, $alterar);
    
    echo "<script>alert('Código CDD Alterado com Sucesso!!!');</script>";
    
    echo "<meta http-equiv='refresh' content='2;CadastroCDD.html' />";
    
    }


?>