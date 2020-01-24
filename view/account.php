<!--
Fabien Masson
SI-C2a
23.01.19
Rent a snow
-->
<?php
ob_start();
$title = "RentASnow - account";

?>

    <div>
        <?= $_SESSION['username'] ?>
    </div>
<li><a href="index.php?action=passwordchange">Changer de mot de passe</a></li>
<?php

$content = ob_get_clean();
require_once "gabarit.php";
?>