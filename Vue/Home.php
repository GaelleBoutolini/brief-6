<?php ob_start(); ?>





<div class="msgDeBienvenue"> Bienvenue sur <div>Equilibra</div>
</div>
<div class=" firstMsgDaccueilUser">
    <img src="./Tools/image/illustration-accueil.webp" class="imgAccueil">
    <p class="msgDaccueilUser"> Être en forme n'as jamais été aussi facile!! </p>
</div>
<div class="secndMsgDaccueilUser">
    <form>
        <p class="msgDaccueilUser2"> Vous avez déjà utilisé notre app</P>
        <input type="submit" name="log-in" value="Se connecter">

        <p class="msgDaccueilUser2"> Vous nêtes pas encore inscrit </P>
        <input type="submit" name="sign-up" value="Inscrivez-vous">
    </form>
</div>




<?php $title = 'Home' ?>
<?php $style = './Tools/style/Home.css' ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>