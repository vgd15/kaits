
<?php

/*
error_reporting(E_ALL);
ini_set('display_errors', 1);

$serverName = "192.168.0.64"; // Substitua pelo IP do servidor SQL
$connectionOptions = array(
    "Database" => "master", // Substitua pelo nome do seu banco de dados
    "Uid" => "DeiseDuarte", // Nome do usuário
    "PWD" => "rd232515" // Senha do usuário
);

// Conectar-se ao banco de dados
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Verificar a conexão
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nascimento = $_POST['data-nascimento'];

    // Preparar a consulta SQL
    $sql = "INSERT INTO InformacoesNameDate (nome, nascimento) VALUES (?, ?)";
    $params = array($nome, $nascimento);

    // Executar a consulta
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    } else {
        echo "Dados inseridos com sucesso!";
    }

    // Fechar a conexão
    sqlsrv_close($conn);
}

*/

echo '<p>PHP está funcionando!</p>';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nascimento = $_POST['data-nascimento'];

    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Data de Nascimento: " . htmlspecialchars($nascimento);
}



?>

