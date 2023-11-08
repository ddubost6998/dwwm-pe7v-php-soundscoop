# SoundScoop

## Informations
Nom de la base de données : soundscoop
Nom utilisateur : hb_lucas
Mot de passe : C_Pkcx48x95zoCok

Le fichier .sql se situe dans le dossier data

## Connexion admin
Email : lucas@gmail.com
Mot de passe : test

## Ajout du dossier layout
Insertion des fichier ```header.php / nav.php / footer.php``` pour pouvoir les ```require_once``` dans chaque page.

## Ajout de la méthode statique Utils dans une classe
La classe Utils permet de rediriger l'utilisateur vers un emplacement donnée avec la fonction redirect.

## Ajout de la classe DbConnection
Pour lier la connexion avec la base de données je créer une classe DbConnection pour pouvoir la récupérer sur plusieurs pages.

## Ajout de la classe AppError
Permet de nommer clairement les erreurs lié à la connexion.

## Ajout de la classe ErrorEmails
Permet de gérer les gestions d'erreurs des emails.

## Formulaire de connexion de l'admin
Dans le ```<form>``` j'ajoute l'atribut action pour l'envoyer à la page de process login_success et la méthode POST pour ne pas divulguer les infos de connexion.

Dans login_process.php
Je vérifie si la requête HTTP est une requête POST et redirige vers login.php si la condition n'est pas satisfaite.

## Formulaire de contact avec message
Je souhaite que l'utilisateur puisse envoyer un message avec son Prénom, Nom et adresse mail.

Donc je créer le process du formulaire de contact avec contact_process.php et en cas de succés vers contact_success.php sinon je met un message d'erreur.

## Ajout des balises meta Twitter et Facebook
Dans la page article.php j'ai ajouté les balises dynamique de Twitter et Facebook.

## Rendre les liens de la navigation actif ou inactif
J'ai créer la classe MenuItem avec 2 constantes pour active ou inactive.

## Ajout d'un script PHP update_password
Le script permet de hacher un mot de passe déjà enregistrer dans base de données.

Pour hacher les mot de passe il suffit d'aller dans l'URL avec /scripts/update_password.php.

## Ajout de la déconnexion pour l'admin
Dans la page admin.php j'ajoute le bouton de déconnexion avec ```<a href="?logout=1">Déconnexion</a>``` 

## Ajout d'un article
Dans la page admin on peut ajouter un nouvel article avec toute les infos à remplir ```title, content, issue_date, user_id, url_img``` 
Pour le process de l'ajout de l'article j'ai ajouter une page add_article pour l'insertion de l'article dans la base de donnée avec
```php
try {
        $pdo = new DbConnection;
        $stmt = $pdo->prepare("INSERT INTO article (title, content, issue_date, user_id, url_img) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$title, $content, $issue_date, $user_id, $url_img]);
        Utils::redirect('admin.php');
    } catch (PDOException $e) {
        echo "Une erreur s'est produite : " . $e->getMessage();
    }
```
D'abord je me connecte à la base de données puis je prépare la requête SQL pour l'executer avec execute([]) puis je redirige sur admin.php sinon un message d'erreur s'affiche
