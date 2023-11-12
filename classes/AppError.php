<?php

class AppError
{
    public const DB_CONNECTION        = 0;
    public const AUTH_REQUIRED_FIELDS = 1;
    public const INVALID_CREDENTIALS  = 2;
    public const USER_NOT_FOUND       = 3;

    public static function getErrorMessage($errorCode)
    {
        switch ($errorCode) {
            case self::DB_CONNECTION:
                return "Erreur de connexion à la base de données.";
            case self::AUTH_REQUIRED_FIELDS:
                return "Veuillez remplir tous les champs.";
            case self::INVALID_CREDENTIALS:
                return "Identifiants invalides. Veuillez réessayer.";
            case self::USER_NOT_FOUND:
                return "Utilisateur non trouvé. Veuillez vérifier votre adresse email.";
            default:
                return "Erreur inconnue.";
        }
    }
}
