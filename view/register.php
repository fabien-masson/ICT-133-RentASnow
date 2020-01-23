<!--
Fabien Masson
SI-C2a
23.01.19
Rent a snow
--><?php
ob_start();
$title = "RentASnow - register";

?>

<div class="wrapper fadeInDown">
    <div id="formContent">

        <form action="/index.php?action=tryRegister" method="post">
            <input type="text" id="register" class="fadeIn second" name="register" placeholder="login">
            <input type="text" id="registerPass" class="fadeIn third" name="registerPass" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Register">
        </form>
    </div>
</div>

<?php

$content = ob_get_clean();
require_once "gabarit.php";
?>

