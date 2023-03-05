<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logowanie</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Logowanie</h1>
    <form action="log.php" method="POST"" class="form">
        <input type="text" name="username" placeholder="Nazwa urzytkownika">
        <input type="text" name="userpss" placeholder="Hasło">
        <input type="email" name="useremail" placeholder="Email">
        <input type="submit" value="Zaloguj">
    </form>
    <?php
        if(isset($_SESSION['signInError'])) {
            echo "Niepoprawy login, hasło lub email!";
        }
    ?>
</body>
</html>