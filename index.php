<?php
session_start();
ob_start();

require_once 'config/chemins.class.php';
require Chemins::VENDOR . 'autoload.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELE . 'gestion_portfolio.class.php';
require Chemins::VUES . 'entete.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//<editor-fold defaultstate="collapsed" desc="région Ancien code">
//if (!isset($_REQUEST['cas'])) {
//    $cas = 'afficherAccueil';
//} else {
//    $cas = $_REQUEST['cas'];
//}
////Aiguillage vers le bon corps de page
//switch ($cas) {
//    case 'afficherAccueil': {
//            require Chemins::VUES . 'accueil.php';
//            break;
//        }
//    case 'afficherDetails': {
//            require Chemins::VUES . 'details_portfolio.php';
//            break;
//        }
//}
////// </editor-fold>

if (!isset($_REQUEST["controller"])) {
    require_once Chemins::VUES . "accueil.php";
} else {
    $action = $_REQUEST["action"];
    $controllerClass = "controller" . $_REQUEST["controller"];
    $fichierController = $controllerClass . ".class.php";
    // Permet de vérifié si la valeur écrit dans le paramètre "controller" est bien un nom de classe existant.
    if (file_exists(Chemins::CONTROLEURS . $fichierController)) {
        require_once Chemins::CONTROLEURS . $fichierController;
        $controllerObject = new $controllerClass;
        // Permet de vérifié que la valeur écrit dans le paramètre "action" est bien un nom de méthode existante.
        try {
            $controllerObject->$action();
        } catch (Error $err) {
            require Chemins::VUES_PERMANENTES . 'erreur404.inc.php';
        }
    } else {
        require Chemins::VUES_PERMANENTES . 'erreur404.inc.php';
    }
    
}

require Chemins::VUES . 'pied.php';
ob_end_flush();

?>