<!--
Fabien Masson
SI-C2a
23.01.19
Rent a snow
-->
<?php
ob_start();
$title = "RentASnow - Snows";
?>
<div class="span12">
    <h1>Les Snows</h1>
    <?php foreach ($snows as $onepieceofsnows) { ?>
        <div class="row mt-4">
            <h4 class="col-4"><?= $onepieceofsnows['title'] ?></h4>
            <h4 class="col-4"><?= $onepieceofsnows['size'] ?></h4>
            <h4 class="col-4"><?= $onepieceofsnows['color'] ?></h4>
        </div>
    <?php } ?>
</div>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>
