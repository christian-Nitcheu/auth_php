<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);



$db_connection = new PDO('mysql:host=localhost;dbname=auth_system', 'todo','todo');

if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        $email = htmlspecialchars($_POST['email']);
        $password =md5($_POST['password']);

        $login = $db_connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $login->execute(array($email, $password));
        $user_exist = $login->rowCount();

        if ($user_exist == 1) {
            $user_info = $login->fetch();
            $_SESSION['id'] = $user_info['id'];
            header("Location: profil.php?id=".$_SESSION['id']);
        }
        else {
            echo "Email ou mot de passe incorrect";
            $error = "Email ou mot de passe incorrect";
        }
    }
    else {
        
        $error = "Veuillez remplir tous les champs";
        header("Location: index.php?error=$error");
    }

}
?>