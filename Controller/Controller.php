<?php
require './Model/Model.php';


function home()
{
    require './Vue/Home.php';
};

// Afficher la page d'inscription
function displaySignup()
{
    require './Vue/Signup.php';
}

// Inscription de l'utilisateur
function signup()
{

    if(!empty($_POST)) {
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

        if($result === true) {
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

    if(!empty($_POST)) {
        $mail = $_POST['identifiant'];
        $password = $_POST['password'];

        // echo $mail;
        // echo $password;

        $result = getLogin($mail, $password);

        // print_r($result);

        if($result === true) {
            require './Vue/Dashboard.php';
        } else {
            return "<p>erreur</p>";
            // require './Vue/Login.php';
        }
    }
}

// Afficher la page d'ajout de repas
function displayCreateMeal()
{
    require './Vue/CreateMeal.php';
}

// Ajout d'un repas
function createMeal()
{
}

// Afficher la page de modification d'utilisateur
function displayEditUser()
{
    require './Vue/EditUser.php';
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
}

// Erreur
function error($msgErreur)
{
    require './Vue/Error.php';
}
