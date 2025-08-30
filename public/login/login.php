<?php
session_start();
include 'db.php'; 

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
    
</body>
</html>