<?php ob_start(); ?>
<main>
    <div class="container">
        <div id="btn-container">
            <a id="add-btn" href="./index.php?action=displayCreateMeal">
                <i class="fa-solid fa-plus"></i>
                Nouveau plat
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
        <div>
            <section id="objectif"></section>
            <section id="profil"></section>
        </div>
        <section id="stats"></section>
    </div>
</main>

<?php $title = 'Dashboard - Equilibra'; ?>
<?php $style = './Tools/style/Dashboard.css'; ?>
<?php $logout = "<a class='logout'><i class='fa-solid fa-power-off'></i></a>" ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'Template.php'; ?>