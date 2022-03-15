<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour</h1>
<?php
header("Refresh:6");
session_start();
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 5)) {
session_unset();
session_destroy();
header('Location: index.session.php');

}
$_SESSION['start'] = time();
?>
</body>
</html>