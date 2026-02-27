<?php
// processa_cadastro.php
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se é uma requisição POST
    // Acessa os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Boas práticas: SEMPRE validar e sanitizar entradas!
    // Exemplo MUITO básico (abordaremos segurança a fundo depois)
    $nome = htmlspecialchars(trim($nome)); // Remove espaços e converte caracteres especiais para HTML
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitiza o e-mail

    if (!empty($nome) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h2>Dados Recebidos com Sucesso!</h2>";
        echo "Nome: " . $nome . "<br>";
        echo "Email: " . $email . "<br>";
        echo "<p>Estes dados seriam agora processados, validados e talvez salvos em um banco de dados.</p>";
    } else {
        echo "<h2>Erro: Dados inválidos.</h2>";
        if (empty($nome)) echo "O nome não pode estar vazio.<br>";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) echo "O e-mail não é válido.<br>";
    }
} else {
    // Se a requisição não for POST, redireciona ou mostra mensagem
    echo "Requisição inválida.";
    // header('Location: index.html'); // Opcional: redirecionar para o formulário
    // exit();
}
?>
