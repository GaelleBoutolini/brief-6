<?php ob_start(); ?>
<main>
    <h2>Error</h2>
    <p><?= $result ?></p>
</main>


<?php print_r($userInfo); ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>