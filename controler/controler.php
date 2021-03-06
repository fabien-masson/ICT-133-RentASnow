<!--
Fabien Masson
SI-C2a
23.01.19
Rent a snow
--><?php
require_once 'model/model.php';

// This file contains nothing but functions
function login()
{
    require_once 'view/login.php';
}

function register()
{
    require_once 'view/register.php';
}

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function displaySnows()
{
    $snows = getSnows();
    require_once 'view/snows.php';
}

function tryLogin()
{
    $usernames = getUsers();
    if (isset($_POST['login'])) {
        foreach ($usernames as $user) {
            if ($_POST['login'] == $user["user"] && $_POST['loginPass'] == $user["pass"]) {
                $_SESSION['username'] = $_POST['login'];
            }
        }


    } else {
        require_once 'view/login.php';
    }
    home();

}

function tryRegister()
{
    if ($_POST['register'] == "" && $_POST['registerPass'] == "") {
        register();
    } else {

        $usernameR = $_POST['register'];
        $passR = $_POST['registerPass'];
        $listeUsers = getUsers();
        $lastId = 0;
        foreach ($listeUsers as $user) {
            $id = $user['id'];
            if ($lastId < $id) {
                $lastId = $id;
            }
        }
        $lastId = $lastId + 1;
        $listeUsers[] = ["id" => $lastId, "user" => $usernameR, "pass" => $passR];
        $_SESSION['username']=$usernameR;
        home();
    }

}
function passwordchange()
{

}
function Logout()
{
    session_unset();
    home();
}

function Account()
{
    require_once 'view\account.php';
}

?>
