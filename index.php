<!--
Fabien Masson
SI-C2a
23.01.19
Rent a snow
--><?php
session_start();

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

        case 'register':
        register();
        break;

    case 'home':
        home();
        break;

    case 'displaySnows':
        displaySnows();
        break;

    case 'tryLogin':
        tryLogin();
        break;

    case 'tryRegister':
        tryRegister();
        break;

    case 'logout':
        Logout();
        break;

    case 'account':
        Account();
        break;

    default:
        home();
        break;

}
?>
