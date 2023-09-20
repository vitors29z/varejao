<?php
// Verifique se os dados de login estão corretos (exemplo simples)
$stored_username = "usuario"; // Nome de usuário armazenado no sistema
$stored_password = "senha123"; // Senha armazenada no sistema

if ($_POST["username"] === $stored_username && $_POST["password"] === $stored_password) {
    // Redirecionar para a página de gerenciamento de usuários
    header("Location: gerenciamento.php");
} else {
    // Exibir mensagem de erro e redirecionar de volta para a página de login
    echo "Nome de usuário ou senha incorretos. Tente novamente.";
    header("Location: index.html");
}
?>
