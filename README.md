# SoundScoop | Actu musicale

## ℹ️ Informations
- Nom de la base de données : soundscoop
- Nom utilisateur : hb_lucas
- Mot de passe : C_Pkcx48x95zoCok

Le fichier .sql se situe dans le dossier data

- Connexion admin
- Email : lucas@gmail.com
- Mot de passe : test

---

## 📁 Dossier layout
- Création d'un fichier ```header.php``` permettant l'insertion des balises meta
- Création d'un fichier ```nav.php``` permettant l'insertion de la navbar dans les pages
- Création d'un fichier ```footer.php``` permettant l'insertion du footer dans les pages pour pouvoir les ```require_once``` dans chaque page.

## Méthode statique Utils dans une classe
La classe Utils permet de rediriger l'utilisateur vers un emplacement donnée avec la fonction redirect.

## Ajout de la classe DbConnection
Pour lier la connexion avec la base de données je créer une classe DbConnection pour pouvoir la récupérer sur plusieurs pages.

## Ajout de la classe AppError
Permet de nommer clairement les erreurs lié à la connexion.

## Ajout de la classe ErrorEmails
Permet de gérer les gestions d'erreurs des emails.

## Navbar dynamique

- J'ai rendu la navbar dynamique pour que la page sur laquelle on consulte soit en violet et grisé pour les autres.
- J'ai fait le menu avec un foreach :
```php
<?php foreach ($menuItems as $item) { ?>
    <li>
        <a href="<?php echo $item->getUrl(); ?>" class="block py-2 pl-3 pr-4 rounded md:p-0 <?php echo $item->getCssClasses(); ?>">
        <?php echo $item->getLabel(); ?>
        </a>
    </li>
<?php } ?>
```

- J'ai créer une classe MenuItem qui permet de choisir soit le CSS actif ou inactif.

---

## Page d'accueil dans index.php

- Connexion à la base de données avec
```php
$db = new DbConnection;
```
- Ensuite j'affiche les 3 articles les plus récents avec une requête SQL avec les informations dynamique
```php
foreach ($rows as $row) {
        <div class="mt-16 mb-8 p-5 items-center bg-purple-300 rounded-lg shadow-lg hover:bg-purple-200 dark:border-gray-700 dark:bg-gray-800 dark:hover-bg-gray-700">
            <img class="rounded-lg mt-0 w-auto" src="<?php echo $row['url_img']; ?>" alt="Image de <?php echo $row['title']; ?>"/>
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row['title']; ?></h5>
            <p>Publier le : <?php echo date('d/m/Y', strtotime($row['issue_date']));?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <?php
                $content = $row['content'];
                if (strlen($content) > 45) {
                    $content = substr($content, 0, 45) . '...';
                }
                echo $content;
                ?>
            </p>
            <p class="bg-purple-100 p-2 w-32"><?php echo $row['name_categorie'];?></p>
            <a href="article.php?id_article=<?php echo $row['id_article']; ?>" class="w-auto flex items-center px-3 py-2 text-center text-sm font-medium text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-400 dark:hover:bg-purple-600 dark:focus:ring-purple-800">En lire plus
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    <?php } ?>
```

- Ajout de la partie À propos avec un lien vers la page about.php

- Ajout d'une galerie de photos

---

## Formulaire de contact avec message
- Je souhaite que l'utilisateur puisse envoyer un message avec son Prénom, Nom et adresse mail.
Dans le formulaire j'utilise la méthode POST qui permet d'envoyer dans le corps de la requête pour ne pas rendre visible les informations dans l'URL
```html
<form method="POST" action="contact_process.php">
```

- J'envoi le formulaire de contact dans la page contact_process.php ce qui permet d'envoyer le message à l'équipe du site qui le reçoi dans sa boîte mail
Si c'est la méthode POST alors cela redirige vers la page de succés de l'envoi contact_sucess.php
```php
$_SERVER["REQUEST_METHOD"] == "POST"
```
Sinon je reviens dans la page contact.php
```php
Utils::redirect("contact.php");
```

## Balises meta de Twitter et Facebook
- Dans la page article.php j'ai ajouté les balises dynamique de Twitter :
```html
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
<meta name="twitter:image" content="<?= $url_img ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?>">
```

et Facebook :
```html
<meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
<meta property="og:image" content="<?= $url_img ?>">
<meta property="og:description" content="<?= htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?>">
```

---

## Partie admin

## Formulaire de connexion admin
- Dans formulaire j'ajoute l'atribut action pour l'envoyer à la page de process login_success et la méthode POST pour ne pas divulguer les infos de connexion.
```php
<form action="login_process.php" method="POST" class="space-y-4 md:space-y-6">
```

- Dans login_process.php

Je démarre la session avec :
```php
session_start();
```

Je vérifie si la requête HTTP est une requête POST et redirige vers login.php si la condition n'est pas satisfaite.
```php
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    Utils::redirect('login.php?error=' . AppError::AUTH_REQUIRED_FIELDS);
}
```

Je récupére les données du formulaire :
```php
[
    'email'    => $email,
    'password' => $password
] = $_POST;
```

Connexion avec la base de données avec un try / catch :
```php
try {
    $pdo = new DbConnection;
} catch (PDOException) {
    Utils::redirect('login.php?error=' . AppError::DB_CONNECTION);
}
```

Je récupére l'utilisateur avec une requête query :
```php
$query = "SELECT * FROM user WHERE email = ?";
```

Pour la préparer et l'executé ensuite :
```php
$connectStmt = $pdo->prepare($query);
$connectStmt->execute([$email]);
```

Je vérifie si l'utilisateur existe :
```php
$user = $connectStmt->fetch();
if ($user === false) {
    Utils::redirect('login.php?error=' . urlencode(AppError::USER_NOT_FOUND));
}
```

Enfin je vérifie ses informations d'identification :
```php
if ($user !== false && password_verify($password, $user['password'])) {
    $_SESSION['id_user'] = [
        'id_user' => $user['id_user'],
        'email'   => $email
    ];
    Utils::redirect('admin.php');
} else {
    Utils::redirect('login.php?error=' . urlencode(AppError::INVALID_CREDENTIALS));
}
```

## Ajout d'un script PHP update_password
Le script permet de hacher un mot de passe déjà enregistrer dans base de données.

Pour hacher les mot de passe il suffit d'aller dans l'URL avec /scripts/update_password.php.

## Ajout d'un article
- Dans la page admin on peut ajouter un nouvel article avec toute les infos à remplir 
```php
$stmt = $pdo->prepare("INSERT INTO article (title, content, issue_date, user_id, url_img) VALUES (?, ?, ?, ?, ?)");
``` 

- Pour le process de l'ajout de l'article j'ai ajouter une page add_article pour l'insertion de l'article dans la base de donnée avec
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

## Ajout de la déconnexion pour l'admin
Dans la page admin.php j'ajoute le bouton de déconnexion avec ```<a href="?logout=1">Déconnexion</a>``` 

---

## Mes dificultés

- J'ai pris beaucoup de temps pour la modification d'un article côté admin mais aussi sur la pagination des articles.

---

## À amélioré et ajouté

- Je pourrais par la suite refactoriser toutes mes fonctions dans des classes pour réduire la longueur du code dans les pages d'affichage.

- Je pourrais ajouté une barre de recherche pour rechercher un article à partir de la base de données.

- Je pourrais ajouté un compte d'un utilisateur ainsi que la possibilité d'ajouté des commentaire dans un article.