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
    if (isset($_POST['login'])){
        foreach ($usernames as $user)
        {
            if($_POST['login']==$user["user"] && $_POST['loginPass']==$user["pass"])
            {
                $_SESSION['username']=$_POST['login'];
                home();
            }
        }


    }
    else
    {
        require_once 'view/login.php';
    }
    home();

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
