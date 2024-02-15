<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="input-box">
            <input type="text" placeholder="Usuario" name="usuario" required>
            <i class='bx bxs-user-circle'></i>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Contraseña" name="contraseña" required>
            <i class='bx bxs-lock'></i>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox"> Recordarme</label>
            <a href="#">Olvidó su contraseña?</a>
        </div>
        <button type="submit" class="btn">Acceder</button>

        <div class="register-link">
            <p>Aún no tienes cuenta? <a href="#">Registrarse</a></p>
        </div>
    </form>
</body>
</html>
