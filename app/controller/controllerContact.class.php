<?php

// Namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Requires
//require 'PHPMailer-master/src/Exception.php';
//require 'PHPMailer-master/src/PHPMailer.php';
//require 'PHPMailer-master/src/SMTP.php';

/**
 * Classe permettant de gérer l'envoi d'email via la librairie PHPMailer.
 * @package https://github.com/PHPMailer/PHPMailer
 */
class controllerContact {

    /**
     * Méthode statique permettant d'envoyer un e-mail pour le formulaire de contact.
     *
     * @param string $object Objet de l'email.
     * @param string $content Message de l'email.
     * @return void
     */
    public static function envoie_mail($contact_name, $contact_mail, $contact_objet, $contact_message){
        $mail = new PHPMailer(true);
        try {
            // Configuration SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sofianbelbacha@gmail.com';
            $mail->Password = 'zzeazbdxisbbxdxo';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            
            // Destinataire
            $mail->setFrom($contact_mail, $contact_name);
            $mail->addAddress('sofianbelbacha@gmail.com', 'Client Portfolio');
        
            // Répondre à l'adresse
            $mail->addReplyTo($contact_mail, $contact_name);
            
            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = $contact_objet;
            $mail->Body = $contact_message;
            
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function sendMessageContact() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = app\Helpers\Verification::validateContactForm($_POST);
            if (empty($errors)) {
                $result = controllerContact::envoie_mail($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]);
                if ($result) {
                    $_SESSION['confirmation'] = "Votre message a été envoyé avec succès.";
                    // Redirection après l'envoi réussi
                    header('Location: index.php');
                    exit();
                } 
            }else {
                $_SESSION['errors'] = $errors;
                // Afficher les erreurs
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
                
            }
        }
    }
    
}

// Test de la méthode : sendMailFromFormHelp()
// GestionEmail::envoie_mail("monNom", "monPrenom", "monEmail", "monTelephone", "maDestination", "monNbDePersonnes", "monBudget", "maFormule", "autres");
?>
