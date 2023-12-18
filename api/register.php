<?php
//session_start();

// Se as variáveis de ambiente estiverem definidas, use-as para a conexão
if (isset($_ENV["DB_HOST"], $_ENV["DB_USER"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"], $_ENV["DB_PORT"])) {
    $DB_HOST = $_ENV["DB_HOST"];
    $DB_USER = $_ENV["DB_USER"];
    $DB_PASSWORD = $_ENV["DB_PASSWORD"];
    $DB_NAME = $_ENV["DB_NAME"];
    $DB_PORT = $_ENV["DB_PORT"];

    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Verificar se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        // Inserir usuário no banco de dados
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if ($conn->query($sql) === TRUE) {
            echo "Usuário registrado com sucesso!";
        } else {
            echo "Erro ao registrar o usuário: " . $conn->error;
        }
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
} else {
    die("As variáveis de ambiente do banco de dados não estão definidas. Verifique suas configurações.");
}
?>
