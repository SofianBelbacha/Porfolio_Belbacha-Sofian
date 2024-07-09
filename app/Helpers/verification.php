<?php


namespace app\Helpers;

use Respect\Validation\Validator as v;

class Verification{
    
    /**
     * Valide les entrées du formulaire de contact.
     *
     * @param array $data Données du formulaire.
     * @return array Liste des erreurs de validation.
     */
    public static function validateContactForm($data) {
        $errors = [];
        $nameValidator = v::alnum()->length(1, 50);
        $emailValidator = v::email();
        $subjectValidator = v::stringType()->length(1, 100);
        $messageValidator = v::stringType()->length(1, 1000);

        if (!$nameValidator->validate($data['name'])) {
            $errors['name'] = "Le nom doit être alphanumérique et contenir entre 1 et 50 caractères.";
        }

        if (!$emailValidator->validate($data['email'])) {
            $errors['email'] = "L'adresse email n'est pas valide.";
        }

        if (!$subjectValidator->validate($data['subject'])) {
            $errors['subject'] = "L'objet doit contenir entre 1 et 100 caractères.";
        }

        if (!$messageValidator->validate($data['message'])) {
            $errors['message'] = "Le message doit contenir entre 1 et 1000 caractères.";
        }

        return $errors;
    }

}
