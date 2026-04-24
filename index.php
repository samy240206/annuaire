<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//todo gérer le coeur de l'appli en POO
//Chargement du moteur de template Smarty
require_once('libs/smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = 'Views/templates/';
$smarty->compile_dir = 'Views/templates_c/';
$smarty->config_dir = 'Views/configs/';
$smarty->cache_dir = 'Views/cache/';

// Routeur (gestion des routes)
require_once('core/Router.php');
$router = new Router();
$router->dispatch($smarty);
 

error_reporting(E_ALL & ~E_DEPRECATED);