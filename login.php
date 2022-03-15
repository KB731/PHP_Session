<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../style1.css">
     <title>Document</title>
</head>
<body>

<?php
session_start();


if (empty($_POST['login']) || empty($_POST['password'])) {
     echo "Merci de remplir tous les champs";
} else {
     $login = htmlspecialchars($_POST['login']);
     $password = htmlspecialchars($_POST['password']);

     if ($login == 'jean') {
          if ($password == 'dupont') {
               $_SESSION['user'] = $login;
               header('Location: index.session2.php');
          } else {
               echo "Mot de passe incorrect";
          }
     } else {
          echo "Identifiants incorrects";
     }
}
session_destroy();
?>




     
</body>
</html>





