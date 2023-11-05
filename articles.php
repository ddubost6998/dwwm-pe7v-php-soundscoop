<?php
require_once 'layout/header.php';
require_once 'classes/DbConnection.php';

$articlesByPage = 5; // Nombre d'articles par page

try {
    $pdo = new DbConnection();
} catch (PDOException $e) {
    echo("Erreur de connexion à la base de données : " . $e->getMessage());
}

$totalArticles = $pdo->query("SELECT COUNT(*) FROM article")->fetchColumn(); // Détermine le nb total d'articles
$totalPages = ceil($totalArticles / $articlesPerPage); // Calcul le nombre total de page
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Récupére la page actuelle
$offset = ($page - 1) * $articlesPerPage; // Calcul le décalage pour la requête SQL

$stmt = $pdo->prepare("SELECT * FROM article");
$stmt->execute();
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($articles) { ?>
    <main class="prose mx-auto my-32 dark:text-white dark:border-gray-600 dark:focus:border-blue-500">
        
        <h1 class="text-center dark:text-white dark:border-gray-600 dark:focus:border-blue-500">Tous nos articles</h1>

        <?php foreach ($articles as $article) { ?>
            <div class="my-20">
                <a href="article.php?id_article=<?php echo $article['id_article']; ?>" class="mt-16 flex flex-col items-center bg-purple-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover-bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover-bg-gray-700">
                    <img class="object-cover w-80 md:h-auto md:rounded-none md:rounded-l-lg" src="<?php echo $article['url_img']; ?>" alt="Image de <?php echo $article['title']; ?>"/>
                </a>
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $article['title']; ?></h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <?php
                        $content = $article['content'];
                        if (strlen($content) > 50) {
                            $content = substr($content, 0, 45) . '...';
                        }
                        echo $content;
                        ?>
                    </p>
                </div>
                <a href="article.php?id_article=<?php echo $article['id_article']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover-bg-blue-800 focus:ring-4 focus-outline-none focus-ring-blue-300 dark-bg-blue-600 dark-hover-bg-blue-700 dark-focus-ring-blue-800">En lire plus
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        <?php } ?>

        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                <a href="?page=<?php echo $i; ?>" class="<?php echo ($i === $page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php } ?>
        </div>
        
    </main>
    <?php } else {
        echo "Erreur lors de l'exécution de la requête : " . $pdo->errorInfo()[2];
    }

require_once 'layout/footer.php';
