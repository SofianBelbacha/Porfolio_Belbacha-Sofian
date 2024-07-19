<?php

class GestionBoutique {

    /**
     * Objet de la classe PDO 
     * @var PDO 
     */
    private static $pdoCnxBase = null;

    /**
     * Objet de la classe PDOStatement 
     * @var PDOStatement 
     */
    private static $pdoStResults = null;
    private static $requete = ""; //texte de la requête 
    private static $resultat = null; //résultat de la requête 

    /**
     * Permet de se connecter à la base de données 
     */
    public static function seConnecter() {

        if (!isset(self::$pdoCnxBase)) { //S'il n'y a pas encore eu de connexion 
            try {
                self::$pdoCnxBase = new PDO('mysql:host=' . MysqlConfig::SERVEUR . ';dbname=' .
                        MysqlConfig::BASE, MysqlConfig::UTILISATEUR, MysqlConfig::MOT_DE_PASSE);
                self::$pdoCnxBase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$pdoCnxBase->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                self::$pdoCnxBase->query("SET CHARACTER SET utf8");
            } catch (Exception $e) {
                // l’objet pdoCnxBase a généré automatiquement un objet de type Exception 
                echo 'Erreur : ' . $e->getMessage() . '<br />'; // méthode de la classe Exception 
                echo 'Code : ' . $e->getCode(); // méthode de la classe Exception 
            }
        }
    }
    
    public static function getRealisation($idRealisation)
    {
        self::seConnecter();
        self::$requete = "SELECT * FROM realisation 
        WHERE idRealisation = :idRealisation";
        self::$pdoStResults = self::$pdoCnxBase->prepare(self::$requete);
        self::$pdoStResults->bindValue(":idRealisation", $idRealisation);
        self::$pdoStResults->execute();
        self::$resultat = self::$pdoStResults->fetch();
        self::$pdoStResults->closeCursor();
        return self::$resultat;
    }    

}

?>
