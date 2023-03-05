<?php
require_once "systemClass.php";
require_once "layoutClass.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    SystemClass::printHead("./styles/main.css");
    ?>
</head>

<body>
    <?php
LayoutClass::printHeader();
?>
<section class="hero"></section>
<section class="carts">
    <div class="carts__container">
        <h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto pariatur, modi quos velit necessitatibus cum quis soluta ullam, error sequi voluptas? Repellendus dignissimos a dicta, consectetur et ab veniam ut.</p>
    </div>
    <div class="carts__container">
        <h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis alias aspernatur a, recusandae soluta, ducimus facere, reiciendis consectetur tenetur exercitationem dicta ab aliquid similique delectus quia aliquam vitae ut placeat.</p>
    </div>
    <div class="carts__container">
        <h3>Lorem Ipsum</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero a itaque quod odit voluptatibus dignissimos sapiente adipisci qui non enim repudiandae molestias optio consequatur, impedit, quos neque fugit? Ea, sed.</p>
    </div>
</section>
</body>

</html>