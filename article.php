<?php
require_once 'classes/DbConnection.php';

$idArticle = $_GET['id_article'];

$pdo = new DbConnection;

$stmt = $pdo->prepare("SELECT article.*, artist.* FROM article 
                        LEFT JOIN article_artist ON article.id_article = article_artist.article_id
                        LEFT JOIN artist ON article_artist.artist_id = artist.id_artist
                        LEFT JOIN style ON artist.style_id = style.id_style
                        WHERE article.id_article = :idArticle");
$stmt->bindParam(':idArticle', $idArticle, PDO::PARAM_INT);
$stmt->execute();

$article = $stmt->fetch(PDO::FETCH_ASSOC);

$title = $article['title'];
$url_img = $article['url_img'];
$content = $article['content'];

$artistId = $article['id_artist'];

if ($artistId) {
    $stmtArtist = $pdo->prepare("SELECT * FROM artist
                                LEFT JOIN style ON artist.style_id = style.id_style
                                WHERE id_artist = :idArtist");
    $stmtArtist->bindParam(':idArtist', $artistId, PDO::PARAM_INT);
    $stmtArtist->execute();
    $artist     = $stmtArtist->fetch(PDO::FETCH_ASSOC);

    $nameArtist   = $artist['name_artist'];
    $country      = $artist['country'];
    $dateCreation = $artist['date_creation'];
    $styleName    = $artist['name_style'];
} else {
    $nameArtist   = "Artiste non défini";
    $country      = "Inconnu";
    $dateCreation = "Inconnu";
    $styleId      = "Inconnu";
}
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
        
        <div class="items-center">
            <img src="<?php echo $article['url_img']; ?>" alt="Image de <?php echo $article['title']; ?>"/>
            <p>Publier le : <?php echo date('d/m/Y', strtotime($article['issue_date']))?></p>
            <p><?php echo $article['content']; ?></p>
        </div>

        <div class="bg-gray-200 grid grid-cols-4 gap-2 items-center text-center">
            <p>Artiste : <?php echo $nameArtist; ?></p>
            <p>Pays : <?php echo $country; ?></p>
            <p>Genre : <?php echo $styleName; ?></p>
            <p>Date de création : <?php echo date('d/m/Y', strtotime($dateCreation)); ?></p>
        </div>
    </main>

<?php require_once 'layout/footer.php';
