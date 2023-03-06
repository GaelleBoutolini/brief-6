<<?php ob_start(); ?>
<main>
<h1 class= "msg"> Bienvenue sur Equilibra</h1>
        
        
<div class = "firstMsgDaccueilUser">
    <img src="./Tools/image/illustration-accueil.webp" >
    <h2 > Être en forme n'as jamais  été aussi facile!! </h2>
</div>

<div class = "secndMsgDaccueilUser"> 
    <form>
        <p class="msgDaccueilUser2"> Vous avez déjà utilisé notre app</p>
        <input type="submit" name ="log-in" value="Se connecter">
        <p class="msgDaccueilUser2"> Vous n'êtes pas encore inscrit  </p>
        <input type="submit"  name ="sign-up" value="Inscrivez-vous">
    </form>
</div>  
</main>
<?php $logout = '' ?>
<?php $title = 'Home' ?>
<?php $style = './Tools/style/Home.css' ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>