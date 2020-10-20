<?php
if(isset($_COOKIE['visit']) && $_COOKIE['visit'] == "true"){
    $load = false;
} else {
    $load = true;
    setcookie("visit", "true", time()+60*60*24*600);
}
?>