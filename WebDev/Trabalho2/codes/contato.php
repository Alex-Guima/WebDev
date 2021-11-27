<?php 

$conn =mysqli_connect("localhost", "root", "","trabalho2");

if($conn === false){
    die("ERRO: Não foi possível conectar ao servidor. " . mysqli_connect_error());   
}

$nome = $_REQUEST['nome'];
$nota = $_REQUEST['nota'];
$feedback = $_REQUEST['feedback'];

$sql = "INSERT INTO feedback VALUES ('$nome', '$nota', '$feedback')";

if(mysqli_query($conn,$sql)) {
    echo "<h3>Dados Armazenados com sucesso!</h3>";

} else {
    echo "Erro: Por favor tente novamente mais tarde" . mysqli_error($conn);
}
mysqli_close($conn);
?>