<?php 

$conn =mysqli_connect("localhost", "root", "","trabalho2");

if($conn === false){
    die("ERRO: Não foi possível conectar ao servidor. " . mysqli_connect_error());   
}

$nome = $_REQUEST['nome'];
$username = $_REQUEST['username'];
$senha = $_REQUEST['senha'];

$sql = "INSERT INTO users VALUES ('$nome', '$username', '$senha')";

if(mysqli_query($conn,$sql)) {
    echo "<h3>Dados Armazenados com sucesso!</h3>";

} else {
    echo "Erro: Por favor tente novamente mais tarde" . mysqli_error($conn);
}
mysqli_close($conn);
?>