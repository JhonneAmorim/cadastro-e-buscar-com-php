<?php


define("HOST", 'localhost');
define('USUARIO', 'root');
define("SENHA", '');
define("BASE", 'produtos');

$conn = new MySQLi(HOST, USUARIO, SENHA, BASE);

if (!$conn) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'];

    if ($tipo == "") {
        $query = "SELECT * FROM addprodutos";
    } else {
        $query = "SELECT * FROM addprodutos WHERE tipo = '$tipo'";
    }
} else {
    $query = "SELECT * FROM addprodutos";
}

$result = $conn->query($query);

$qtd = $result->num_rows;


