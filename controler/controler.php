<?php
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
    if (isset($_POST['login'])){
        $_SESSION['username']=$_POST['login'];
        require_once 'index.php';
    }
    else
    {
        require_once 'view/login.php';
    }

}
?>
