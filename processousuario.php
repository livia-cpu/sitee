<?php
require_once ('conexao.php');
 $Nome = $_POST ['Nome'];
 $Sexo = $_POST ['Sexo'];
 $RG = $_POST ['RG'];
 $CPF = $_POST ['CPF'];
 $Datadenascimento = $_POST ['Datadenascimento'];
 $Telefone = $_POST ['Telefone'];
 $Endereço = $_POST ['Endereço'];
 $Email = $_POST [' Email'];



$comando = "INSERT INTO (Nome, Sexo, Telefone, RG, CPF, Datadenascimento, Telefone, Endereço, Email)  
VALUES ('$Nome','$Sexo', '$Telefone, '$RG','$CPF', '$Datadenascimento', '$Telefone', '$Endereço', '$Email')";
        $Resultado = mysqli_query($conexao, $comando);

        IF ($Resultado){
            echo "cadastro feito com sucesso!";
        }
        else{
            echo "Deu erro";

        }
?>