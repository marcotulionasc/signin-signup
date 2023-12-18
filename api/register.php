<?php

include_once('connection.php');

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
