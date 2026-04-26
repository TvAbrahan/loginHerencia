<?php include 'login.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Interface</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-container">
    <h2>Login (Interface)</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Ingresar</button>
    </form>

    <?php if(!empty($message)): ?>
        <p class="msg"><?= $message ?></p>
    <?php endif; ?>
</div>

</body>
</html>