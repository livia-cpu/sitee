<?php
session_start();
include_once ("conexao.php");

$Descricaodoproduto = filter_input(INPUT_POST, 'Descricaodoproduto', FILTER_SANITIZE_STRING);
$Precodoproduto = filter_input(INPUT_POST, 'Precodoproduto', FILTER_SANITIZE_STRING);
$Fichatecnica = filter_input(INPUT_POST, 'Fichatecnica', FILTER_SANITIZE_STRING);


//echo "Descricaodoproduto: $Descricaodoproduto <br>";
//echo "Fichatecnica: $Precodoproduto <br>";
//echo "Fichatecnica: $Fichatecnica <br>";

$result_produto = "INSERT INTO produto (Descricaodoproduto, Precodoproduto, Fichatecnica) 
VALUES('$Descricaodoproduto','$Precodoproduto', '$Fichatecnica')";
$resultado_produto = mysqli_query ($conn, $result_produto);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:red;'>Produto cadastrado</p>";
    header("Location: cadastrodeproduto.php");
}else{
    
    header("Location: cadastrodeproduto.php");

}
?>


"<p style='color:red;'>Produto cadastrado</p>";
