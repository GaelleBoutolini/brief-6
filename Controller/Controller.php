<?php
require './Model/Model.php';

session_start();

function home()
{

    session_unset();
    require './Vue/Home.php';
};

// Afficher la page d'inscription
function displaySignup()
{
    session_unset();
    require './Vue/Signup.php';
}

// Inscription de l'utilisateur
function signup()
{
    if (!empty($_POST)) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $poids = $_POST['poids'];
        $taille = $_POST['taille'];
        $activite = $_POST['activite'];

        // echo $nom;
        // echo $prenom;
        // echo $sexe;
        // echo $age;
        // echo $email;
        // echo $password;
        // echo $poids;
        // echo $taille;
        // echo $activite;

        $result = getSignup($nom, $prenom, $sexe, $age, $email, $password, $poids, $taille, $activite);
        if ($result === true) {
            require './Vue/Successfull_signup.php';
        } else {
            echo "<p>Une erreur est survenue</p>";
        }
    }
}

// Afficher la page de connexion
function displayLogin()
{
    require './Vue/Login.php';
}


// Connexion de l'utilisateur
function login()
{
    // if ($_SESSION['id']) {
    //     require './Vue/Dashboard.php';
    // } else {
    //     require './Vue/Home.php';
    // }
    if (!empty($_POST)) {
        $mail = $_POST['identifiant'];
        $password = $_POST['password'];

        // echo $mail;
        // echo $password;

        $userId = getLogin($mail, $password);

        // print_r($result);


        if ($userId != NULL) {
            $_SESSION['id'] = $userId;
            header('Location: index.php?action=displayDashboard');
        } else {
            $erreurConnexion = "<p>Mdp/Id incorrect</p>";
        }
    }
}

function displayDashboard()
{

    if (!isset($_SESSION['id'])) {
        require './Vue/Home.php';
        header('Location: index.php');
    } else {
        print_r($_SESSION);
        echo "<br>id = " .  $_SESSION['id'];



        $dayDate = date("Y-m-d", time());
        echo $dayDate;
        $id = $_SESSION['id'];

        //fonction model (questionne la base de donnée)

        //$meals = getDayMeals($date);              :tableau           //permet d'obtenir les infos des repas du jour
        $meals = getDayMeals($dayDate, $id);

        //$userInfo = getUserInfo();                :tableau           //permet d'obtenir les infos de l'user
        $userInfo = getUserInfo($id);

        //$lastTenDays = GetLastTenDays();          :tableau           //permet d'obtenir les calories des 10 derniers jours et les objectif (deux courbes)


        //fonction controlleur (utilise les donnée rendue par le model pour faire des calcul)
        $imc = round(imc($userInfo), 2);  
        $physique = whatPhysique($imc);
        
        $dailyCalTotal = dailyCaloriesTotal($meals);
        $dailyCalGoal = dailyCaloriesGoal($userInfo);
        $goalAchieved = isGoalAchieved($dailyCalTotal, $dailyCalGoal);

        require './Vue/Dashboard.php';
    }
}

// Afficher la page d'ajout de repas
function displayCreateMeal()
{

    if (!isset($_SESSION['id'])) {
        require './Vue/Home.php';
        header('Location: index.php');
    } else {
        print_r($_SESSION);
        echo "<br>id = " .  $_SESSION['id'];

        require './Vue/CreateMeal.php';
    }
}

// Ajout d'un repas
function createMeal()
{
    if (!empty($_POST)) {
        $id = $_SESSION['id'];
        $type = $_POST['type'];
        $intitule = $_POST['intitule'];
        $calories = $_POST['calories'];
        $heureDate = $_POST['heure-date'];
        $result = getCreateNewMeal($id, $type, $intitule, $calories, $heureDate);
        print($result);
        if ($result == true || $result == 1) {
            header('Location: index.php?action=displayDashboard');
        } else {
            require './Vue/Error.php';
        }
    }
}

// Afficher la page d'ajout de repas

function displayEditDeleteMeal()
{
    $repasId = $_GET['id'];
    $mealInfo = getOneMealInfo($repasId);

    print_r($mealInfo);
    if (!isset($_SESSION['id'])) {
        require './Vue/Home.php';
        header('Location: index.php');
    } else {
        echo "<br>id = " .  $_SESSION['id'];

        require './Vue/EditDeleteMeal.php';
    }
}
// Modifier d'un repas
function editMeal()
{
    if (!empty($_POST)) {
        $repasId = $_GET['id'];
        $type = $_POST['type'];
        $intitule = $_POST['intitule'];
        $calories = $_POST['calories'];
        $heureDate = $_POST['heure-date'];
        $result = getEditMeal($repasId, $type, $intitule, $calories, $heureDate);
        if ($result == true || $result == 1) {
            header('Location: index.php?action=displayDashboard');
        } else {
            require './Vue/Error.php';
        }
    }
}

function deleteMeal()
{
    $repasId = $_GET['id'];
    $result = getDeleteMeal($repasId);
    if ($result == true || $result == 1) {
        header('Location: index.php?action=displayDashboard');
    } else {
        require './Vue/Error.php';
    }



// Afficher la page de modification d'utilisateur
function displayEditUser()
{
    if (!isset($_SESSION['id'])) {
        require './Vue/Home.php';
        header('Location: index.php');
    } else {
        print_r($_SESSION);
        echo "<br>id = " .  $_SESSION['id'];

        $id = $_SESSION['id']; 

        $userChangeInfo = getUserChangeInfo($id);

        require './Vue/EditUser.php';
    }
}

// Modification d'un utilisateur 
function editUser()
{
    $id = $_SESSION['id'];

    if (!empty($_POST)) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $sexe = $_POST['sexe'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $poids = $_POST['poids'];
        $taille = $_POST['taille'];
        $activite = $_POST['activite'];

        echo $nom;
        echo $prenom;
        echo $sexe;
        echo $age;
        echo $email;
        echo $password;
        echo $poids;
        echo $taille;
        echo $activite;

        $result = getEditUser($id, $nom, $prenom, $sexe, $age, $email, $password, $poids, $taille, $activite);
        if ($result === true) {
            header('Location: index.php?action=displayDashboard');
        } else {
            echo "<p>Une erreur est survenue</p>";
        }
    }
}

// Modification d'un utilisateur 
function deleteMeal()
{

}

// Déconnexion
function logout()
{
    /*Si la variable de session age est définie, on echo sa valeur
             *puis on la détruit avec unset()*/

    home();
    header('Location: index.php');
}

// Erreur
function error($msgErreur)
{
    require './Vue/Error.php';
}




//Fonctions de calcul
//--------------------------------------

//calcul imc 
function imc($userInfo) {
    $weight = $userInfo["Poids"];
    $size = $userInfo["Taille"] / 100;

    $imc = $weight / ($size * $size) ;

    return $imc;
}

function whatPhysique($imc) {
    
    switch (true) {
    case ($imc < 16.5):
        $physique = "Anorexie ou dénutrition";
        break;
    case ($imc >= 16.5 && $imc < 18.5):
        $physique = "Insuffisance Ponderale";
        break;
    case ($imc >= 18.5 && $imc < 25):
        $physique = "Corpulence normale";
        break;
    case ($imc >= 25 && $imc < 30):
        $physique = "Surpoids";
        break;
    case ($imc >= 30 && $imc < 35):
        $physique = "Obésité modérée (Classe 1)";
        break;
    case ($imc >= 35 && $imc < 40):
        $physique = "Obésité élevé (Classe 2)";
        break;
    case ($imc >= 40):
        $physique = "Obésite morbide ou massive";
        break;
    default:
        $physique = "Non Renseigné";
        break;
    }
}

function dailyCaloriesTotal($meals)
{
    $total = 0;
    foreach ($meals as $meal) {

        $total += $meal['Kcal'];
    }
    return $total;
}

function dailyCaloriesGoal($userInfo)
{
    echo '<br>';
    print_r($userInfo);
    // Calcul du métabolisme de base
    $MB = 14.2 * $userInfo['Poids'] + 593;
    // Calcul du coef en fonction de l'activité
    $coef = 0;
    switch ($userInfo['Activite']) {
        case 'Sédentaire':
            $coef = 1.2;
            break;
        case 'Légèrement actif':
            $coef = 1.375;
            break;
        case "Plutôt actif":
            $coef = 1.55;
            break;
        case "Actif":
            $coef = 1.725;
            break;
        case "Trés actif":
            $coef = 1.9;
            break;
    }
    $dailyCaloriesGoal = $MB * $coef;
    return round($dailyCaloriesGoal);
}

function isGoalAchieved($dailyCalTotal, $dailyCalGoal)
{
    $isGoalAchieved = true;
    if ($dailyCalTotal > $dailyCalGoal) {
        $isGoalAchieved = false;
    } else {
        $isGoalAchieved = true;
    }
    return $isGoalAchieved;
}

function totalTenDaysCalories()
{
    //pour le graphique, 10 jours de 
    //->dailyCaloriesTotal
    // et 
    //-> dailyTenDaysCalories


    //for(i = 0; i < 10; i++)               boucle*10 avec la date qui change a chaque iteration
    //$userInfo = getDayMeals($date);     
    // dailyCaloriesGoal($userInfo);
}