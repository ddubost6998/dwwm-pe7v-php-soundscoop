<?php

class EmailInsertionError
{
    public const INVALID_EMAIL = 1;
    public const SPAM_ATTEMPT  = 2;
    
    private static $errorMessages = [
        self::INVALID_EMAIL => "L'e-mail que vous avez fourni n'est pas valide.",
        self::SPAM_ATTEMPT  => "Votre e-mail a été identifié comme une tentative de spam."
    ];
    
    public static function getMessage($errorCode)
    {
        return isset(self::$errorMessages[$errorCode]) ? self::$errorMessages[$errorCode] : "Une erreur inconnue s'est produite.";
    }
}
