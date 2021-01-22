<?php
 session_start();
include_once("conexao.php");

$Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $Nome <br>";
//echo "Email: $Email <br>";

$result_usuario = "INSERT INTO usuarios (Nome, Email, created)VALUES ('$Nome', '$Email', Now())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:red;'>Usuario inserido com sucesso</p>";
	header("Location: paginadelogin.php");
}else{
	
	header("Location: paginadelogin.php");

}
?>