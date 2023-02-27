<?php ob_start(); ?>
<main>
    <div class="container">
        <form method="post" action="./index.php?action=editUser">
            <h2>Modification</h2>
            <div>
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label for="email">Adresse e-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="flex-50">
                <div>
                    <label for="sexe">Sexe</label>
                    <select name="sexe" id="sexe">
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                </div>

                <div>
                    <label for="naissance">Date de naissance</label>
                    <input type="date" id="naissance" name="naissance" required>
                </div>
            </div>
            <div class="flex-50">
                <div>
                    <label for="poids">Poids</label>
                    <input type="number" id="poids" name="poids" min="0" required>
                </div>

                <div>
                    <label for="taille">Taille(cm)</label>
                    <input type="number" id="taille" name="taille" min="0" required>
                </div>
            </div>
            <div>
                <label for="activite">Activité</label>
                <select name="activite" id="activite">
                    <option value="Sédentaire">Sédentaire</option>
                    <option value="Légérement actif">Légérement actif</option>
                    <option value="Plutôt actif">Plutôt actif</option>
                    <option value="Actif">Actif</option>
                    <option value="Trés actif">Trés actif</option>
                </select>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>

            <input id="form-btn" type="submit" value="Modification">
        </form>
    </div>
    <p></p>
</main>

<?php $logout = "<a class='logout'><i class='fa-solid fa-power-off'></i></a>" ?>
<?php $title = 'Modifier mon profil - Equilibra' ?>
<?php $style = './Tools/style/Form.css'; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>