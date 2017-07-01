<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$salario = $_POST["salario"];

$sql = "insert into funcionario values(null, '".$nome."', '".$email."', ".$salario.")";

include_once './config/conexao.php';

if(mysqli_query($con, $sql)){
    echo "Funcionario cadastrado com sucesso!";
}else{
    echo "Funcionario não cadastrado!";
}

mysqli_close($con);

echo "<br><br><a href='index.php'>Voltar</a>";
