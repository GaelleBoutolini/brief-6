<?php ob_start(); ?>
<h2>Error <? $msgErreur ?> </h2>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>