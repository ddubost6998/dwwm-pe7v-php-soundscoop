<?php
class EditArticleError
{
    const ARTICLE_NOT_FOUND = 'article_not_found';
    const UPDATE_FAILED     = 'update_failed';

    public static function getMessage($errorCode)
    {
        switch ($errorCode) {
            case self::ARTICLE_NOT_FOUND:
                return 'L\'article n\'a pas été trouvé.';
            case self::UPDATE_FAILED:
                return 'Échec de la mise à jour de l\'article. Veuillez réessayer.';
            default:
                return 'Une erreur s\'est produite lors de la mise à jour de l\'article.';
        }
    }
}
?>
