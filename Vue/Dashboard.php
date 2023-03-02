<?php ob_start(); ?>
<main>
    <div class="container">
        <div id="btn-container">
            <a id="add-btn" href="./index.php?action=displayCreateMeal">
                <i class="fa-solid fa-plus"></i>
                Ajouter un plat
            </a>
        </div>
        <section id="historique">
            <h2 id="jour">Vos repas de la journée du : <span id="today">25/05/2023</span></h2>
            <div id="repas">

                <?php foreach($meals as $meal) : ?>
                <div class="repas-container">
                    <h3><?= $meal["Type"] ?></h3>
                    <span class="nom-repas"><?= $meal["Description"] ?></span>
                    <div>
                        <span class="kcal"><span><?= $meal["Kcal"] ?></span>kcal</span>
                        <span class="heure"><?= $meal["heure"] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <div id="total-kcal">Total : <span>3250</span>kcal</div>
        </section>
        <div id="main-bottom">
            <div id="objectif-profil">
                <section id="objectif">
                    <div id="objectif-calorie">
                        <div>Objectif journalier</div>
                        <div id="kcal"><span>2978</span>kcal</div>
                    </div>
                    <div id="résultat">
                        Échec
                    </div>
                </section>
                <section id="profil">
                    <div class="title">
                        <h2>Mon profil</h2>
                        <a href="./index.php?action=displayEditUser"><i class="fa-solid fa-pen"></i></a>
                    </div>
                    <div class="information">
                        <p><?= $userInfo["Nom"] ?></p>
                        <p><?= $userInfo["Prenom"] ?></p>
                        <p><?= $userInfo["Taille"] ?> cm</p>
                        <p><?= $userInfo["Poids"] ?> kg</p>
                        <p>--- IMC : 21.5</p>
                        <p>--- Corpulence normale</p>
                        <p><?= $userInfo["Activite"] ?></p>
                    </div>
                </section>
            </div>

            <section id="stats"></section>
            
        </div>
    </div>
</main>


<?php $title = 'Dashboard - Equilibra'; ?>
<?php $style = './Tools/style/Dashboard.css'; ?>
<?php $logout = "<a href='./index.php?action=logout' class='logout' title='Déconnexion'><i class='fa-solid fa-power-off'></i></a>" ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Template.php'; ?>