<?php

require_once 'config/chemins.class.php';
require Chemins::VUES . 'entete.php';



if (!isset($_REQUEST['cas'])) {
    $cas = 'afficherAccueil';
} else {
    $cas = $_REQUEST['cas'];
}
//Aiguillage vers le bon corps de page
switch ($cas) {
    case 'afficherAccueil': {
            require Chemins::VUES . 'accueil.php';
            break;
        }
    case 'afficherDetails': {
            require Chemins::VUES . 'details_portfolio.php';
            break;
        }
}

require Chemins::VUES . 'pied.php';
