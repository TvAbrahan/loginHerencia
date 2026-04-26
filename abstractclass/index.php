<?php include 'loginabstract.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Clase Abstracta</title>
    <link rel="stylesheet" href="../css/styles_abstract.css">
</head>
<body>

<div class="login-container">
    <h2>Login (Clase Abstracta)</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <button type="submit">Ingresar</button>
    </form>

<?php if(isset($_SESSION['flash']) && $_SESSION['flash']): ?>
    <div class="mensaje <?= $_SESSION['flash']['tipo'] ?>">
        <?= $_SESSION['flash']['mensaje'] ?>
    </div>
<?php 
    unset($_SESSION['flash']); // se borra después de mostrarse
endif; 
?>
</div>

</body>
</html>