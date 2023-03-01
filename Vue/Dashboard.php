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
                <div class="repas-container">
                    <h3>P'tit dej</h3>
                    <span class="nom-repas">Céréales Muesli</span>
                    <div>
                        <span class="kcal"><span>260</span>kcal</span>
                        <span class="heure">9:00</span>
                    </div>
                </div>
                <div class="repas-container">
                    <h3>P'tit dej</h3>
                    <span class="nom-repas">Céréales Muesli</span>
                    <div>
                        <span class="kcal"><span>260</span>kcal</span>
                        <span class="heure">9:00</span>
                    </div>
                </div>
                <div class="repas-container">
                    <h3>P'tit dej</h3>
                    <span class="nom-repas">Céréales Muesli</span>
                    <div>
                        <span class="kcal"><span>260</span>kcal</span>
                        <span class="heure">9:00</span>
                    </div>
                </div>
                <div class="repas-container">
                    <h3>P'tit dej</h3>
                    <span class="nom-repas">Céréales Muesli</span>
                    <div>
                        <span class="kcal"><span>260</span>kcal</span>
                        <span class="heure">9:00</span>
                    </div>
                </div>
                <div class="repas-container">
                    <h3>P'tit dej</h3>
                    <span class="nom-repas">Céréales Muesli</span>
                    <div>
                        <span class="kcal"><span>260</span>kcal</span>
                        <span class="heure">9:00</span>
                    </div>
                </div>
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
                        <p>Dupont</p>
                        <p>Louis</p>
                        <p>1m78</p>
                        <p>67kg</p>
                        <p>IMC : 21.5</p>
                        <p>Corpoulence normale</p>
                        <p>Actif</p>
                    </div>
                </section>
            </div>

            <section id="stats"></section>
        </div>
    </div>
</main>


<?php $title = 'Dashboard - Equilibra'; ?>
<?php $style = './Tools/style/Dashboard.css'; ?>
<?php $logout = "<a href='./index.php' class='logout' title='Déconnexion'><i class='fa-solid fa-power-off'></i></a>" ?>
<?php $contenu = ob_get_clean(); ?>

<?php require 'Template.php'; ?>