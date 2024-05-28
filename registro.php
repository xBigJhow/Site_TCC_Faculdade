<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $usuario = "root";
    $senha = "root"; 
    $bancoDeDados = "cadastro"; 

    $conexao = new mysqli($host, $usuario, $senha, $bancoDeDados);

    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }
    $cpf = $_POST['cpf'];
    $cpf = mysqli_real_escape_string($conexao, $cpf);
    $sql = "SELECT cpf FROM cadastrados WHERE cpf='$cpf'";
    $retorno = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($retorno) > 0) {
        echo '<script>alert("CPF já cadastrado."); window.location.href = "register.html";</script>';
        exit();
    } else {
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $endereco = $_POST["endereco"];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO cadastrados (login, senha, nome, cpf, idade, email, telefone, endereco) VALUES ('$login', '$senha_hash', '$nome', '$cpf', '$idade', '$email', '$telefone', '$endereco')";

        if ($conexao->query($sql) === TRUE) {
            echo '<script>alert("Registro inserido com sucesso."); window.location.href = "login.html";</script>';
            exit();
        } else {
            echo '<script>alert("Ocorreu um erro durante o registro. Por favor, tente novamente."); window.location.href = "register.html";</script>';
            exit();
        }
    }
    $conexao->close();

}
?>
