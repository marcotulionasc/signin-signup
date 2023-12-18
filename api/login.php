<?php
session_start();
require_once 'connection.php'; // Inclua seu arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar o login
        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Login correto
            header("Location: index.php");
        } else {
            // Login incorreto
            echo "Login incorreto. Verifique suas credenciais.";
        }
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }

    $conn->close();
}
?>