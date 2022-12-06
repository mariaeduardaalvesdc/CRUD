<?php
include "includes\header.html";
include "conexao.php";
?>
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$num = $_POST['num'];
$cidade = $_POST['cidade'];

$inserir = $con ->query ("INSERT INTO clientes VALUES ('0', '$nome', '$email', '$telefone', '$cpf', '$rg', '$rua', '$bairro', '$num', '$cidade')");
    if ($inserir) {
        echo "CADASTRO REALIZADO COM SUCESSO!";
    } else {
        echo "NÃO FOI POSSIVEL REALIZAR O CADASTRO";
    }

?>
