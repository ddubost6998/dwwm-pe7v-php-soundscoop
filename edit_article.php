<?php
require_once 'layout/header.php';
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

$id_article = $_GET['id'];

try {
    $pdo = new DbConnection;

    $stmt = $pdo->prepare("SELECT * FROM article WHERE id_article = :id");
    $stmt->bindParam(':id', $id_article, PDO::PARAM_INT);
    $stmt->execute();

    $article = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Une erreur s'est produite : " . $e->getMessage();
    exit;
}
?>
<main class="prose mx-auto my-24">
    <div class="px-9 py-1 bg-purple-200 rounded-lg">
        <h2 class="text-center">Modifier l'article</h2>
        <form action="update_article.php" method="post">
            <label for="title">Titre de l'article</label>
            <input type="text" name="title" id="title" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $article['title']; ?>">
            
            <label for="content">Contenu de l'article</label>
            <textarea name="content" id="content" rows="4" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><?php echo $article['content']; ?></textarea>
            
            <label for="issue_date">Date de publication</label>
            <input type="date" name="issue_date" id="issue_date" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $article['issue_date']; ?>">
            
            <label for="user_id">ID du rédacteur</label>
            <input type="number" name="user_id" id="user_id" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $article['user_id']; ?>">
            
            <label for="url_img">URL de l'image</label>
            <input type="text" name="url_img" id="url_img" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $article['url_img']; ?>">

            <input type="hidden" name="id" value="<?php echo $article['id_article']; ?>">
            
            <button type="submit" class="mt-5 text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Modifier l'article</button>
        </form>
    </div>
</main>

<?php require_once 'layout/footer.php';
