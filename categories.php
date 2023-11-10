<?php
require_once 'layout/header.php';
require_once 'classes/DbConnection.php';

try {
    $pdo = new DbConnection();
} catch (PDOException $e) {
    echo("Erreur de connexion à la base de données : " . $e->getMessage());
}

$categories = $pdo->query("SELECT * FROM categorie ORDER BY name_categorie ASC")->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT article.*, categorie.name_categorie
                        FROM article
                        INNER JOIN article_categorie ON article.id_article = article_categorie.article_id
                        INNER JOIN categorie ON article_categorie.categorie_id = categorie.id_categorie
                        WHERE categorie.id_categorie = :cat_id
                        ORDER BY article.issue_date DESC");
        $stmt->bindParam(':cat_id', $category['id_categorie'], PDO::PARAM_INT);
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="prose mx-auto my-32 dark:text-white dark:border-gray-600 dark:focus:border-purple-500">
    <h1 class="text-center dark:text-white">Catégories</h1>

    <?php foreach ($categories as $category) { ?>
        <div class="m-8 p-8 items-center bg-purple-50 hover:bg-purple-100 dark:border-gray-700 dark:bg-gray-800 dark:hover-bg-gray-700">
            <h2 class="font-bold underline underline-offset-8 text-gray-900 dark:text-white"><?php echo $category['name_categorie']; ?></h2>

            <?php
            $stmt = $pdo->prepare("SELECT article.*, categorie.name_categorie
                        FROM article
                        INNER JOIN article_categorie ON article.id_article = article_categorie.article_id
                        INNER JOIN categorie ON article_categorie.categorie_id = categorie.id_categorie
                        WHERE categorie.id_categorie = :cat_id
                        ORDER BY article.issue_date DESC");
            $stmt->bindParam(':cat_id', $category['id_categorie'], PDO::PARAM_INT);
            $stmt->execute();
            $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($articles as $article) { ?>
                <div class="mt-16 mb-8 p-5 items-center bg-purple-300 rounded-lg shadow-lg hover:bg-purple-200 dark:border-gray-700 dark:bg-gray-800 dark:hover-bg-gray-700">
                    <img class="rounded-lg mt-0 w-auto" src="<?php echo $article['url_img']; ?>" alt="Image de <?php echo $article['title']; ?>"/>
                    <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $article['title']; ?></h5>
                    <p>Publier le : <?php echo $article['issue_date']?></p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <?php
                        $content = $article['content'];
                        if (strlen($content) > 45) {
                            $content = substr($content, 0, 45) . '...';
                        }
                        echo $content;
                        ?>
                    </p>
                    <p class="bg-purple-100 p-2 w-32"><?php echo $article['name_categorie'];?></p>
                    <a href="article.php?id_article=<?php echo $article['id_article']; ?>" class="w-auto flex items-center px-3 py-2 text-center text-sm font-medium text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-400 dark:hover:bg-purple-600 dark:focus:ring-purple-800">En lire plus
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</main>

<?php require_once 'layout/footer.php';