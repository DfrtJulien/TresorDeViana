<?php
require "vendor/autoload.php";
session_start();


use Config\Router;

$router = new Router();

//la page d'accueil
$router->addRoute('/', 'HomeController', 'index');

// user
// inscription / connexion
$router->addRoute('/register', 'RegisterController', 'index');
$router->addRoute('/login', 'LoginController', 'index');
//page connecion/inscription pour les Admin
$router->addRoute('/adminRegister', 'RegisterController', 'admin');
$router->addRoute('/adminLogin', 'LoginController', 'admin');


// deconnexion
$router->addRoute('/logout', 'LogoutController', 'index');
// profile user
$router->addRoute('/profile', 'UserController', 'showProfile');


// article
// ajouter un article 
$router->addRoute('/addArticle', 'ArticlesController', 'addArticle');
// afficher tout les articles
$router->addRoute('/allArticle', 'ArticlesController', 'showAllArticle');
// modifier un article
$router->addRoute('/updateArticle', 'ArticlesController', 'updateArticle');
// supprimer un article
$router->addRoute('/deleteArticle', 'ArticlesController', 'deleteArticle');
// afficher la page d'un article
$router->addRoute('/infoArticle', 'ArticlesController', 'infoArticle');
// ajouter un commentaire 
$router->addRoute('/commentArticle', 'ArticlesController', 'addCommentArticle');
// modifier son commentaire
$router->addRoute('/editComment', 'ArticlesController', 'editComment');

//pannier
$router->addRoute('/cart', 'ArticlesController', 'showCart');


$router->handleRequest();
