<?php

require_once 'config/chemins.class.php';
require Chemins::VUES . 'entete.inc.php';



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
    case 'afficherProduitsEnfants': {
            require Chemins::VUES . 'v_enfants.inc.php';
            break;
        }
}

require Chemins::VUES . 'pied.inc.php';
