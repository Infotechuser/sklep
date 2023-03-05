<?php
session_start();
require_once"config.php";
$connection = new mysqli($host, $db_user, $db_password, $db_name);

if($connection -> connect_errno == 0) {
    $user = htmlentities($_POST['username'], ENT_QUOTES, "UTF-8");
    $haslo = htmlentities($_POST['userpss'], ENT_QUOTES, "UTF-8");
    $email = htmlentities($_POST['useremail'], ENT_QUOTES, "UTF-8");

    $sql = sprintf(
        "SELECT * FROM users WHERE email='%s' AND haslo='%s'",
        mysqli_real_escape_string($connection,$email),
        mysqli_real_escape_string($connection,$haslo)
    );
   
    // if wykona się tylko, gdy zapytanie sql jest poprawne składniowo
    // jeżeli nie odnajdzie pasujących wyników zapytania, również zwróci true
    if($result = $connection -> query($sql)) {
        // jeżeli ilość zwróconych wierszy jest większa niż 1
        if($result -> num_rows > 0) {
            // zwraca dane w tabicy asocjacyjnej, które odpowiadają wierszowi z bazy danych
            $data = $result -> fetch_assoc();
            $user = $data['user'];
            $haslo = $data['haslo'];
            $email = $data['email'];
            $_SESSION['signedIn'] = true;
            unset($_SESSION['signInError']);
            header('Location: index.php');

            $result -> close();
        } else {
            header('Location: index.php');
            $_SESSION['signInError'] = true;
        }
    }

    $connection -> close();
}
?>