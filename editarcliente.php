<?php
//Conectando ao banco
include ("conexao.php");
//traz as variáveis do formulário
$codigo = $_POST["codigo"];
$Nome = $_POST["Nome"];
$Email = $_POST["Email"];
$data_nascimento = $_POST["data_nascimento"];
//if para ver se foi executado com sucesso a query
if (mysql_query("update clientes set Nome='$Nome',Email='$Email',data_nascimento='$data_nascimento' where codigo='$codigo'")){
//exibe a mensagem de Cadastrado e a de voltar a tela anterior
echo "Alterado! <br> <a href='javascript:history.back(-1);'>voltar<a/>";
exit;
//Se não é exibido um erro
}else{
echo mysql_error();
exit;
}
?>