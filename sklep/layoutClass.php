<?php
session_start();

class LayoutClass
{
    static function printHeader()
    {
        $conditionRender = "";

        if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) {
            $conditionRender = "
            <li><a href='logout.php'>Wyloguj</a></li>
            ";
        } else {
            $conditionRender = "
            <li><a href='signInPage.php'>Zaloguj</a></li>   
            <li><a href='signUpPage.php'>Zarejestruj</a></li>
            ";
        }
        echo "
        
            <header>
            <div class='header__container'>
                <h4>Logo</h4>
                <nav>
                    <ul>
                        <li><a>Home</a></li>
                        <li><a>About Us</a></li>
                        <li><a>Contact</a></li>
                        $conditionRender
                    </ul>
                </nav>
            </div>
            </header>
        ";
    }
}