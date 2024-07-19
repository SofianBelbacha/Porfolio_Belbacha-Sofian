<?php

/**
 * Contrôleur incluant principalement des méthodes ayant pour contrat de require les pages demandés.
 */
class controllerShowPages {

    public function __construct()
    {
    }

    public function afficherAccueil() {
        require Chemins::VUES . 'accueil.php';
    }

    public function afficherDetailsWeb() {
        require Chemins::VUES . 'details_web.php';
    }
    
    public function afficherDetailsProjetVoyage() {
        require Chemins::VUES . 'details_voyage.php';
    }


#endregion

}
