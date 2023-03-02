<?php
require './Model/env.php';

function getConnection()
{
    $user = getenv('BDD');
    $pass = getenv('PASSWORD');

    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=Equilibra;charset=utf8',
            $user,
            $pass
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // echo 'whats good';
    } catch (Exception $e) {
        var_dump($e->getMessage());
        die();
    }

    return $pdo;
}

function getSignup($nom, $prenom, $sexe, $age, $email, $password, $poids, $taille, $activite)
{
    $pdo = getConnection();
    $query = $pdo->prepare("INSERT INTO Utilisateur (Nom, Prenom, Sexe, Age, Email, Mdp, Poids, Taille, Activite)
        VALUES (:nom, :prenom, :sexe, :age, :email, :mdp, :poids, :taille, :activite)");
    $query->bindParam(':nom', $nom);
    $query->bindParam(':prenom', $prenom);
    $query->bindParam(':sexe', $sexe);
    $query->bindParam(':age', $age);
    $query->bindParam(':email', $email);
    $query->bindParam(':mdp', $password);
    $query->bindParam(':poids', $poids);
    $query->bindParam(':taille', $taille);
    $query->bindParam(':activite', $activite);
    $result = $query->execute();

    return $result;
}

function getLogin($mail, $password)
{

    $pdo = getConnection();
    $query = $pdo->prepare("SELECT Mdp FROM Utilisateur WHERE Email = :mail");
    $query->bindParam(':mail', $mail);
    $query->execute();
    $pass = $query->fetch();

    if ($pass != NULL) {
        if ($pass[0] === $password) {
            $result = true;
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }
    return $result;
}

function getDayMeals($dayDate) {

    $paramDate = $dayDate . '%';

    $pdo = getConnection();
    $query = $pdo->prepare("SELECT Type, Description, Kcal, Date, TIME(Date) AS heure 
                            FROM Repas 
                            WHERE Id_user = 1 AND Date LIKE :paramDate");
    $query->bindParam(':paramDate', $paramDate);
    $query->execute();
    $meals = $query->fetchAll(PDO::FETCH_ASSOC);

    return $meals;
}


function getUserInfo($id) {

    $pdo = getConnection();
    $query = $pdo->prepare("SELECT Nom, Prenom, Taille, Poids, Activite
                            FROM Utilisateur
                            WHERE Id_user = :id");
    $query->bindParam(':id', $id);
    $query->execute();
    $userInfo = $query->fetch(PDO::FETCH_ASSOC);

    return $userInfo;
}