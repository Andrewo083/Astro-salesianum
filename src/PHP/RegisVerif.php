<?php 

if (!empty($errorCorreo)) { ?>
    <span class="text-red-500"><?= $errorCorreo ?></span>
<?php } ?>

<!-- Mostrar mensajes de éxito o espera -->
<?php if (!empty($exitoRegistro)) { ?>
    <span class="text-green-500"><?= $exitoRegistro ?></span>
<?php } elseif (!empty($esperaRegistro)) { ?>
    <span class="text-blue-500"><?= $esperaRegistro ?></span>
<?php } 

?>