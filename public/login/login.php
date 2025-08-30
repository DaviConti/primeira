<?php
session_start();

if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['usuario'] = $email;
        header("Location: principal.php");
        exit();
    } else {
        echo "<script>alert('E-mail ou senha inválidos!'); window.location.href='login.php';</script>";
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" class="login">
        <h2>Bem Vindo</h2>
        <input type="email" name="email" placeholder="E-Mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit" name="entrar">ENTRAR</button>
    </form>

</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px gray;
        text-align: center;
        width: 300px;
    }

    .login h2 {
        margin-bottom: 20px;
    }

    .login input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid gray;
        border-radius: 5px;
    }



   
</style>