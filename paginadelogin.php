<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="utf-8">
        <title>MAKESL.com</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div id="paii"> 
          <div id="cabeçalho">
            <div><img id="logon" src = "logon.jpg" Alt= “foto”>
            </div> 
        </div> 
        
        <div id="linha1">
            <div><h2><a href="cadastrodeusuario.html">Cadastro de usuario</a></h2></div>
           
            <div><h2><a href="cadastrodeproduto.html">Cadastro de produto</a></h2></div>
          
            <div><h2> <a href="paginadelogin.html">Cadastro de login</a></h2></div>
            <div><h2> <a href="mapadosite.html">Sobre a empresa</a></h2></div>
            <div><label id="pesquisa"> Pesquisar:</label>
                <input type="text" name="Pesquisar"></div>
            <div><a href="carrinho.html"><img id="car" src = "carrinho.jpg" Alt= "foto"></a></div>
        </div> 
        
        
        <h1>PAGINA DE LOGIN</h1>
        <h2>Já é cadastrado?</h2>
        <p>Então entre com seus dados de login e senha.</p>

        <?php
        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION ['msg']);
        }
        ?>

        <form method = "POST" action="processologin.php">
          <label>Nome</label><br>
          <input type="text" name="Nome" placeholder = "Digite seu nome" required><br><br>
         
          <label>Email</label><br>
          <input type="text" name="Email" placeholder = "Digite seu email" required><br><br>
         
          <label>Senha do Email</label><br>
          <input type="password" name="Senha" placeholder = "Digite sua senha" required><br><br>
          <input type="submit" value="Cadastrar">
        </form>

        
        
                
        <a href="index.html">Voltar</a>
        
          <div  class="rodape" >
         <div><a href="whats.jpg"><img class="cab" src = "whats.jpg" Alt= "foto"></a></div>
          <div><a href="face.jpg"><img class="cab" src = "face.jpg" Alt= "foto"></a></div>
           <div><a href="insta.jpg"><img class="cab" src = "insta.jpg" Alt= "foto"></a></div>
           <div><h2><a id="adm" href="paginaAdm.html">Administrador</a></h2></div>
           <div class="a4"><p>AJUSTE E SUPORTE</p></div>
            <div class="a4"> <p>Politica de privacidade</p></div>
              <div class="a4"> <p>Politica de pagamento</p></div>
             <div class="a4"> <p>Troca e devoluçao</p></div>
          
            <div><a href="pagamento.png"><img id="lar" src = "pagamento.png" Alt= "foto"></a></div>
            
           </div>
         </div>
    </body>
</html>