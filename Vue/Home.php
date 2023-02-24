<?php ob_start(); ?>
<h1>Home</h1>

<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>