<?php
include('Controller/Controller.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'displaySignup') {
            displaySignup();
        } else if ($_GET['action'] == 'signup') {
            signup();
        } else if ($_GET['action'] == 'displayLogin') {
            displayLogin();
        } else if ($_GET['action'] == 'login') {
            login();
        } else if ($_GET['action'] == 'displayCreateMeal') {
            displayCreateMeal();
        } else if ($_GET['action'] == 'createMeal') {
            createMeal();
        } else if ($_GET['action'] == 'displayEditUser') {
            displayEditUser();
        } else if ($_GET['action'] == 'editUser') {
            editUser();
        } else if ($_GET['action'] == 'deleteUser') {
            deleteUser();
        } else if ($_GET['action'] == 'logout') {
            logout();
        } else
            throw new Exception("Action non valide");
    } else {
        home();  // action par défaut
    }
} catch (Exception $e) {
    error($e->getMessage());
}
