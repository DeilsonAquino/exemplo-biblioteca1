<?php
$email = $_POST["email"];
$senha = $_POST["senha"];



$conexao = mysqli_connect("localhost", "root", "");

mysqli_select_db($conexao, "biblioteca");

$consulta = "SELECT * FROM funcionarios WHERE email = '$email' AND senha = '$senha';";

$resposta = mysqli_query($conexao, $consulta);

if(mysqli_num_rows($resposta) > 0){

echo "<center><fieldset><img src='biblioteca.png'><br>";

echo "<font face='Arial' color='gray' size='5'>Biblioteca </font>
<font face='Arial' color='blue' size='5'>Firjan Senai Caxias</font></filedset></center>
";

echo "<meta http-equiv='refresh' content='4;PaginaPrincipalBiblioteca.html' />";

}else{

    echo "<script>alert('Usuário Ou Senha Incorretos!');</script>";

    echo "<meta http-equiv='refresh' content='1;telaDeLogin.html' />";
}



?>