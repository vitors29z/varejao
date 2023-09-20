<?php
// Verifique se os dados de cadastro estão corretos (exemplo simples)
$new_username = $_POST["new_username"];
$email = $_POST["email"];
$new_password = $_POST["new_password"];

if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($new_password) >= 8) {
    // Os dados são válidos, então você pode armazená-los em um banco de dados ou em um arquivo, por exemplo
    // Redirecionar de volta para a página de login após o cadastro
    header("Location: index.html");
} else {
    // Exibir mensagem de erro e redirecionar de volta para a página de cadastro
    echo "Dados de cadastro inválidos. Certifique-se de que o e-mail é válido e a senha tem pelo menos 8 caracteres.";
    header("Location: index.html");
}
?>
