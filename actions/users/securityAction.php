<?php

//Je fait une condition pour voir si l'utilisateur est authentifi√©
session_start();
if(!isset($_SESSION['auth'])){
    //Si ma session n'est pas authentifi√© je redirige vers login.php
    header('location: login.php');
}