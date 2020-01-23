<!--
Fabien Masson
SI-C2a
23.01.19
Rent a snow
-->
<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"),true);
}
function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/users.json"),true);
}
function writeUsers($listeUsers)
{
    file_put_contents('model/dataStorage/users.json', json_encode($listeUsers));
}
?>
