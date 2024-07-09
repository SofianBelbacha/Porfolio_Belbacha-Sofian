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

    public function afficherDetails() {
        require Chemins::VUES . 'details_portfolio.php';
    }


#endregion

}
