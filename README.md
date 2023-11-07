# SoundScoop

## Informations
Nom de la base de données : soundscoop
Nom utilisateur : hb_lucas
Mot de passe : C_Pkcx48x95zoCok

Le fichier .sql se situe dans le dossier data

## Connexion admin
Email : lucas@gmail.com
Mot de passe : xxx

## Ajout du dossier layout
Insertion des fichier ```header.php / nav.php / footer.php``` pour pouvoir les ```require_once``` dans chaque page

## Ajout de la méthode statique Utils dans une classe
La classe Utils permet de rediriger l'utilisateur vers un emplacement donnée avec la fonction redirect

## Ajout de la classe DbConnection
Pour lier la connexion avec la base de données je créer une classe DbConnection pour pouvoir la récupérer sur plusieurs pages

## Ajout de la classe AppError
Permet de nommer clairement les erreurs lié à la connexion

## Ajout de la classe ErrorEmails
Permet de gérer les gestions d'erreurs des emails

## Formulaire de connexion de l'admin
Dans le ```<form>``` j'ajoute l'atribut action pour l'envoyer à la page de process login_success et la méthode POST pour ne pas divulguer les infos de connexion

Dans login_process.php
Je vérifie si la requête HTTP est une requête POST et redirige vers login.php si la condition n'est pas satisfaite.

## Formulaire de contact avec message
Je souhaite que l'utilisateur puisse envoyer un message avec son Prénom, Nom et adresse mail

Donc je créer le process du formulaire de contact avec contact_process.php et en cas de succés vers contact_success.php sinon je met un message d'erreur

## Ajout des balises meta Twitter et Facebook
Dans la page article.php j'ai ajouté les balises dynamique de Twitter et Facebook

## Rendre les liens de la navigation actif ou inactif
J'ai créer la classe MenuItem avec 2 constantes pour active ou inactive

## Ajout d'un script PHP update_password
Le script permet de hacher un mot de passe déjà enregistrer dans base de données
