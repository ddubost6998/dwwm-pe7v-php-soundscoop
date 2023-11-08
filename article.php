<?php
require_once 'classes/DbConnection.php';

$idArticle = $_GET['id_article'];

$pdo = new DbConnection;

$stmt = $pdo->prepare("SELECT * FROM article WHERE id_article = :idArticle");
$stmt->bindParam(':idArticle', $idArticle, PDO::PARAM_INT);
$stmt->execute();

$article = $stmt->fetch(PDO::FETCH_ASSOC);

$title = $article['title'];
$url_img = $article['url_img'];
$content = $article['content'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
        <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_soundscoop.png">
        <title>SoundScoop | Actu musicale</title>
        
        <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
        <meta property="og:image" content="<?= $url_img ?>">
        <meta property="og:description" content="<?= htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?>">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
        <meta name="twitter:image" content="<?= $url_img ?>">
        <meta name="twitter:description" content="<?= htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?>">
    </head>
    <body class="bg-white-100 dark:bg-gray-800">
        <header>
            <?php require_once __DIR__ . '/layout/nav.php'; ?>
        </header>
    
    <main class="prose mx-auto my-32 dark:text-white dark:border-gray-600 dark:focus:border-purple-500">
        <h1 class="text-center"><?php echo $article['title']; ?></h1>
        
        <div class="article-content items-center">
            <img src="<?php echo $article['url_img']; ?>" alt="Image de <?php echo $article['title']; ?>"/>
            <p>Publier le : <?php echo $article['issue_date']?></p>
            <p><?php echo $article['content']; ?></p>
        </div>
    </main>

<?php require_once 'layout/footer.php';
