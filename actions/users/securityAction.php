<?php

//Je fait une condition pour voir si l'utilisateur est authentifié
session_start();
if(!isset($_SESSION['auth'])){
    //Si ma session n'est pas authentifié je redirige vers login.php
    header('location: login.php');
}