
<?php
$servidor = 'localhost';
$username = 'root';
$password = 'admin';
$database = 'adensar';

$link= new mysqli($servidor,$username,$password,$database);

if(!$link) {
    die("Falha de conexao: (". mysqli_connect_errno());
}
?>