<?php
// Définitions des constantes
const DOSSIER_VIEWS = __DIR__.'/views';
const DOSSIER_CONTROLLERS = __DIR__.'/src/controllers';
const DOSSIER_MODELS = __DIR__.'/src/models';

// Connexion à la base de données
include __DIR__.'/SimpleOrm.class.php';
$conn = new mysqli('localhost', 'root', '');
SimpleOrm::useConnection($conn, 'projet_users');

// Inclusion des fonctions réutilisables
include __DIR__.'/functions.php';

// Déclaration des routes
if (isset($_SERVER['PATH_INFO']) == false) 
{
    require DOSSIER_CONTROLLERS.'/user_controller.php';
    index();
} else if ($_SERVER['PATH_INFO'] == '/inscription')
{
    require DOSSIER_CONTROLLERS.'/user_controller.php';
    create();
} else if ($_SERVER['PATH_INFO'] == '/liste')
{
    require DOSSIER_CONTROLLERS.'/user_controller.php';
    index();
} else if ($_SERVER['PATH_INFO'] == '/details-utilisateur')
{
    require DOSSIER_CONTROLLERS.'/user_controller.php';
    show();
} else if ($_SERVER['PATH_INFO'] == '/supprimer-utilisateur')
{
    require DOSSIER_CONTROLLERS.'/user_controller.php';
    delete();
} else if ($_SERVER['PATH_INFO'] == '/modifier-utilisateur')
{
    require DOSSIER_CONTROLLERS.'/user_controller.php';
    modifier();
} else
{
    require DOSSIER_CONTROLLERS.'/notfound_controller.php';
    index();
}
