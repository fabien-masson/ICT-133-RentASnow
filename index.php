<?php
session_start();

//$username="test";
//$_SESSION["username"]=$username;


//die($_SESSION["username"]);




require_once "controler/controler.php";
if(isset($_GET['action']))
{
    $action=$_GET['action'];
}
else{
    $action='home';
}
switch($action)
{
    case 'login':
        login();
        break;

    case 'home':
        home();
        break;

    case 'displaySnows':
        displaySnows();
        break;

    case 'tryLogin':
        tryLogin();
    default:
        home();
        break;

}
?>
