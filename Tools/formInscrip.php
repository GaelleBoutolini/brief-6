<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./style/style.css">
    <title>Inscription</title>
</head>
<body>
    <div class="container">
          
    <form method="post" action="">
    <h2>Inscription</h2>
        <div><label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" required></div>

        <div><label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" required></div>

        <div><label for="email">Adresse e-mail:</label>
        <input type="text" id="email" name="email" required></div>
        
        <div><label for="sexe">Sexe</label>
        <input type="text" id="sexe" name="sexe" required></div>

        <div><label for="sexe">Date de naissance</label>
        <input type="text" id="date de naissance" name="date de naissance" required></div>
        
        <div> <label for="text">Taille(cm)</label>
        <input type="number" id="taille" name="taille" required></div>

        <div><label for="poids">Poids</label>
        <input type="number" id="poids" name="poids" required></div>

        <div>
        <label for="pet-select"></label>
        <p>Activités</p>
<select name="pets" id="pet-select">
    <option value=""></option>
    <option value="sédentaire : TMB x 1,2">Sédentaire</option>
    <option value="légèrement actif : TMB x 1,375">Légèrement actif</option>
    <option value="modérément actif : TMB x 1,55">Modérément actif</option>
    <option value=" très actif : TMB x 1,725"> Très actif</option>
    <option value=" extrêmement actif : TMB x 1,9"> Extrêmement actif</option>
</select></div>
       
    <div><label for="mot de passe">Mot de passe</label>
<input type="text" id="mot de pass" name="mot de passe"required></div>

        <input type="submit" value="Inscription">
    </form>
    </div>
</body>
</html>
