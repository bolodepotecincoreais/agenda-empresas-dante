<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agenda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Agenda da empresa Dante</h1>
    <img src="logotipo-logomarca.jpg">
    <button type="button">Consultar Agenda</button>
    <p>Nome: Telefone</p>
    <P id="agenda"></P>

    <connect class="php"></connect>
    
    <?php

$servidor="localhost";
$usuario="escola";
$senha="123";
$nomedb="escola";
$conn= new mysqli($servidor, $usuario, $senha, $nomedb);
if ($conn->connect_error){
    die("Conexao falhou: " . $conn->connect_error);
}
echo"Conectado ao banco de dados"."<br>";

?>


    <p>Feito por: João Pedro</p>
    
</body>
</html>
