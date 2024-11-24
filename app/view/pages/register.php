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
<div class="register-container">
    <h1>Crea tu cuenta!</h1>
    <form >
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">registrate</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="login.php">pues metete wey</a></p>
</div>
</body>
</html>
<?php 
include_once URL_APP . '/view/custom/footer.php';
?>