<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <h4><?=date('Y-m-d H:i:s');?></h4>aqui lo cambia el felix/readme-3<hr>
    <h2><?=date('Y-m-d H:i:s');?></h2>lo modifico en github<hr>
    <form action="login.php" method="post">
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
    </form>    
</body>
</html>
