<?php
require_once 'layout/header.php';
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

if (!isset($_SESSION['id_user'])) {
    Utils::redirect('login.php');
}

if (isset($_GET['logout'])) {
    Utils::redirect('logout.php');
}

try {
    $pdo = new DbConnection;
} catch (PDOException) {
    Utils::redirect('admin.php?error=' . AppError::DB_CONNECTION);
}

if (isset($_GET['success'])) {
    $successMessage = '';

    switch ($_GET['success']) {
        case 'article_deleted':
            $successMessage = 'Article supprimé avec succès.';
            break;
    }

    if (!empty($successMessage)) {
        echo '<p class="text-green-500">' . $successMessage . '</p>';
    }
}

$stmt = $pdo->query("SELECT * FROM article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="prose mx-auto mt-36">
    <div class="grid grid-cols-3 justify-items-stretch text-center">
        <h1>Admin</h1>
        <hr class="w-auto h-3 mt-3 rounded-full bg-purple-200 dark:bg-purple-700">
        <a href="?logout=1">Déconnexion</a>
    </div>

    <div class="my-10 px-9 py-1 bg-purple-200 rounded-lg">
        <h2 class="text-center">Liste des articles</h2>
        <table>
            <?php foreach ($articles as $article) { ?>
            <tr>
                <td> <?php echo date('d/m/Y', strtotime($article['issue_date'])); ?></td>
                <td> <?php echo $article['title']; ?></td>
                <td> <a href="edit_article.php?id=<?php echo $article['id_article']; ?>">Modifier</a></td>
                <td> <a href="delete_article.php?id=<?php echo $article['id_article']; ?>">Supprimer</a></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="my-10 px-9 py-1 bg-purple-200 rounded-lg">
        <h2 class="text-center">Ajouter un nouvel article</h2>
        <form action="add_article.php" method="post">
            <label for="title">Titre de l'article</label>
            <input type="text" name="title" id="title" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <label for="content">Contenu de l'article</label>
            <textarea name="content" id="content" rows="4" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>

            <label for="issue_date">Date de publication</label>
            <input type="date" name="issue_date" id="issue_date" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <label for="user_id">ID de l'utilisateur</label>
            <input type="number" name="user_id" id="user_id" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <label for="url_img">URL de l'image</label>
            <input type="text" name="url_img" id="url_img" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            <button type="submit" class="mt-5 text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Ajouter l'article</button>
        </form>
    </div>
</main>

<?php require_once 'layout/footer.php';
