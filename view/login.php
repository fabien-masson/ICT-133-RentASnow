<?php
ob_start();
$title = "RentASnow - Login";

?>

<div class="wrapper fadeInDown">
    <div id="formContent">

        <form action="/index.php?action=tryLogin" method="post">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
require_once "gabarit.php";
?>
