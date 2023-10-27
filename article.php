<?php
require_once 'layout/header.php';
require_once 'functions/db.php';

$idArticle = $_GET['id'];

$pdo = getConnection();

$stmt = $pdo->prepare("SELECT * FROM article WHERE id_article = :idArticle");
$stmt->bindParam(':idArticle', $idArticle, PDO::PARAM_INT);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $article = $stmt->fetch(PDO::FETCH_ASSOC);
}

echo "Article non trouvé.";
exit;
?>

<main class="prose mx-auto mt-24">
    <h1 class="text-center">Tous nos articles</h1>

    <a href="article1.php" class="mt-16 flex flex-col items-center bg-purple-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full md:h-auto md:rounded-none md:rounded-l-lg" src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>"/>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $article['title']; ?></h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php echo $article['content']; ?></p>
        </div>
        <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover-bg-blue-700 dark:focus-ring-blue-800">
            En lire plus
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </div>
    </a>
</main>

<?php require_once 'layout/footer.php';
