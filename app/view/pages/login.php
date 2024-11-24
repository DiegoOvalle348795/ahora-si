<?php 
include_once URL_APP . '/view/custom/header.php';
include_once URL_APP . '/view/custom/navbar2.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\style.css">
    <title><?php echo PROJECT_NAME?></title>
</head>
<body>
<div class="login-container">
    <h1>entra a <?php echo PROJECT_NAME?></h1>
    <form method="POST" action="/login">
        <input type="text" name="usuario" placeholder="usuario" required>
        <input type="password" name="contrasena" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
    <p>¿No tienes una cuenta? <a href="app\view\pages\register.php">Registrate!</a></p>
</div>
</body>
</html>
<?php 
include_once URL_APP . '/view/custom/footer.php';
?>