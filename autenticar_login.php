<?php
include ('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Autenticação </title>
    <script>
        function autenticacaoOK() {
            alert("USUÁRIO LOGADO COM SUCESSO!");
        } 
        function autenticacaoFalha () {
            alert("ERRO AO LOGAR!");
        }
    </script>    

</head>
<body>
    <?php
  
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $resultado = $con -> query ("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'");
    session_start();
    if(mysqli_num_rows($resultado) > 0) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
        echo "<script> autenticacaoOK();</script>";
        header("location: painel.php");
    } else {
        echo "<script>autenticacaoFalha() </script>";
        header("location:login.php");
       
    }

?>
    
</body>
</html>