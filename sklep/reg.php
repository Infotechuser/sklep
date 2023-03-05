<?php
    require_once"config.php";
    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    if($connection -> connect_errno == 0) {
        $user = htmlentities($_POST['uname'], ENT_QUOTES, "UTF-8");
        $email = htmlentities($_POST['uemail'], ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($_POST['upss'], ENT_QUOTES, "UTF-8");
        
        $sql = sprintf(
            "INSERT INTO users(Userid, user, email, haslo) values(null, '%s', '%s', '%s')",
            mysqli_real_escape_string($connection,$user),
            mysqli_real_escape_string($connection,$email),
            mysqli_real_escape_string($connection,$haslo)
        );
    

        if($result = $connection -> query($sql)) {
            if($result -> num_rows > 0) {
                $data = $result -> fetch_assoc();
                $user = $data['user'];
                $haslo = $data['haslo'];
                $email = $data['email'];
                header('Location: index.php');
            } else {
                header('Location: index.php');
            }
        }
    }
?>