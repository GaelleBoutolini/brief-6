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
    require './Vue/Successfull_signup.php';
}

// Afficher la page de connexion
function displayLogin()
{
    require './Vue/Login.php';
}

// Connexion de l'utilisateur
function login()
{
    require './Vue/Dashboard.php';
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
