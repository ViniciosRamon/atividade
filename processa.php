<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $genero = $_POST['genero'];
    $plano = $_POST['plano'];
    $aceitar = isset($_POST['aceitar']) ? 'Sim' : 'Não';

    echo "<h1>Dados do Cadastro</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>";
    echo "<p><strong>Gênero:</strong> $genero</p>";
    echo "<p><strong>Plano de Treinamento:</strong> $plano</p>";
    echo "<p><strong>Aceitou os termos?</strong> $aceitar</p>";
}
?>
