# SoundScoop

## Ajout de la méthode statique Utils dans une classe
Cette classe permet de rediriger l'utilisateur vers un emplacement donnée

## Dans login_process.php
Je vérifie si la requête HTTP est une requête POST et redirige vers login.php si la condition n'est pas satisfaite.

## Ajout du process de connexion
Dans le "<form>" j'ajoute l'atribut action pour l'envoyer à la page de process login_success et la méthode POST pour ne pas divulguer les infos de connexion

## Ajout de la classe ErrorEmails
Permet de gérer les gestions d'erreurs

## Ajout du formulaire de contact avec message
Je souhaite que l'utilisateur puisse envoyer un message avec son Prénom, Nom et adresse mail

Donc je créer le process du formulaire de contact avec contact_process.php et en cas de succés vers contact_success.php sinon je met un message d'erreur

## Création de la classe DbConnection
Pour lier la connection avec la base de données je créer une classe DbConnection pour pouvoir la récupérer sur plusieurs pages

## Ajout des balises meta Twitter et Facebook
Dans la page article.php j'ai ajouté les balises dynamique de Twitter et Facebook
