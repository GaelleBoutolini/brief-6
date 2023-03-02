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

function displayDashboard() {

    if (!isset($_SESSION['id'])) {
        require './Vue/Home.php';
        header('Location: index.php');
    } else {
        print_r($_SESSION);
        echo "<br>id = " .  $_SESSION['id'];
   
    }

    $dayDate = date("Y-m-d", time()) ;
    echo $dayDate;
    $id = $_SESSION['id'];

    //fonction model (questionne la base de donnée)

    //$meals = getDayMeals($date);              :tableau           //permet d'obtenir les infos des repas du jour
    $meals = getDayMeals($dayDate, $id);

    //$userInfo = getUserInfo();                :tableau           //permet d'obtenir les infos de l'user
    $userInfo = getUserInfo($id);

    //$lastTenDays = GetLastTenDays();          :tableau           //permet d'obtenir les calories des 10 derniers jours et les objectif (deux courbes)



    //fonction controlleur (utilise les donnée rendue par le model pour faire des calcul)

    //$imc = imc($userInfo);                                                :int
    //$dailyCalTotal = dailyCaloriesTotal($meals);                          :int
    //$dailyCalGoal = dailyCaloriesGoal($userInfo);                         :int
    //$goalAchieved = isGoalAchieved($dailyCalTotal, $dailyCalGoal);        :bool

    require './Vue/Dashboard.php';
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
        require './Vue/EditUser.php';
    }
}

// Modification d'un utilisateur 
function editUser()
{
    require './Vue/Dashboard.php';
}

// Modification d'un utilisateur 
function deleteUser()
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

function imc($userInfo) {
    //calcul imc, aussi fait dans model->getUserInfo
}

function dailyCaloriesTotal()
{
    //calcul total calorie de la journée
}

function dailyCaloriesGoal()
{
    //calcul TMB * activité
}

function isGoalAchieved() {
    //la limite journaliere a elle été depassé ?
    //calorie total - calorie goal 
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
