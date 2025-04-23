<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registro</title>
</head>
<body>
    <form action="registro.php" method="post">
    <p>
            <label for="usernombre">Nombre:</label>
            <input type="text" id="userombre" name="usernombre" required>
        </p>

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