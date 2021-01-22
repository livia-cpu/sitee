<?php
session_start();
include_once("conexao.php");


$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
$CPF= filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$Datadenascimento = filter_input(INPUT_POST, 'Datadenascimento', FILTER_SANITIZE_STRING);
$Telefone = filter_input(INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
$Endereco = filter_input(INPUT_POST, 'Endereco', FILTER_SANITIZE_STRING);
//echo "Nome: $Nome <br>";
//echo "RG: $RG <br>";
//echo "CPF: $CPF <br>";
//echo "Datadenascimento: $Datadenascimento <br>";
//echo "Telefone: $Telefone<br>";
//echo "Email: $Email <br>";
//echo "Endereco: $Endereco <br>";

$result_cadastro = "INSERT INTO cadastro (Nome, RG, CPF, Datadenascimento, Telefone, Email, Endereco)
VALUES ( '$Nome','$RG', '$CPF', '$Datadenascimento', '$Telefone', '$Email', '$Endereco')";
$resultado_cadastro = mysqli_query($conn, $result_cadastro);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:red;'>Cadastro feito com sucesso</p>";
    header("Location: cadastrodeusuario.php");
}else{
    
    header("Location: cadastrodeusuario.php");

}
?>
