<?php

if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
    $nome = preg_replace('/[^[:alpha:]_]/', '',$_POST["nome"]);   
}else{  
 echo "<script>alert('O campo nome é obrigatório.');</script>"; 
 return;
}

if (isset($_POST["email"]) && !empty($_POST["email"])) {
    $email = preg_replace('/[^[:alpha:]_]/', '',$_POST["email"]);       
}else{  
 echo "<script>alert('O campo e-mail é obrigatório.');</script>"; 
 return;
}

if (isset($_POST["salario"]) && !empty($_POST["salario"])) {
    $salario = preg_replace('/[^[:alpha:]_]/', '',$_POST["salário"]);         
}else{  
 echo "<script>alert('O campo salarío é obrigatório.');</script>"; 
 return;
}

if (strlen($nome)<=2){
 echo "<script>alert('Preencha o nome com no mínimo 2 caracteres.');</script>";   
return;
}

if(!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email)){
 echo "<script>alert('E-mail inválido.');</script>";    
return;
}


$sql = "insert into funcionario values(null, '".$nome."', '".$email."', ".$salario.")";

include_once './config/conexao.php';

if(mysqli_query($con, $sql)){
    echo "Funcionario cadastrado com sucesso!";
}else{
    echo "Funcionario não cadastrado!";
}

mysqli_close($con);

echo "<br><br><a href='index.php'>Voltar</a>";
