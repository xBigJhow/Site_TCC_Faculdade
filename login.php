<?php
session_start(); // Inicia a sessão no início do arquivo

// Conectar ao banco de dados
$servername = "localhost";
$username = "";
$password = "";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Inicializa a variável de erro
$erro = "";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Consulta SQL para verificar se o login existe no banco de dados
    $sql = "SELECT * FROM cadastrados WHERE login = '$login'";
    $result = $conn->query($sql);

    // Verificar se há resultados
    if ($result->num_rows > 0) {
        // Login encontrado, verificar a senha
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            $_SESSION['username'] = $row['login'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['telefone'] = $row['telefone'];
            $_SESSION['isLoggedIn'] = true;

            // Senha válida, redirecionar para página de sucesso
            header("Location: index.php");
            exit(); // Encerrar o script para garantir que o redirecionamento ocorra
        } else {
            // Senha inválida
            $erro = "Senha incorreta";
            unset($_SESSION["username"]);
        }
    } else {
        // Login não encontrado
        $erro = "Usuário não encontrado";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- Exibir mensagem de erro, se houver -->
    <?php if (!empty($erro)) { ?>
        <script>
            alert("<?php echo $erro; ?>");
            window.location.href = "login.html";
        </script>
    <?php } ?>
</body>
</html>
