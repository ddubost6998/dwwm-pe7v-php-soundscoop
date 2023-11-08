<?php
require_once 'layout/header.php';
require_once 'classes/Utils.php';
require_once 'classes/DbConnection.php';

session_start();

// Authentifier ?
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

$stmt = $pdo->query("SELECT * FROM article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main class="prose mx-auto mt-24">
    <h1>Admin</h1>

    <a href="?logout=1">Déconnexion</a>

    <h2>Ajouter un nouvel article</h2>
    <form action="add_article.php" method="post">
        <label for="title">Titre de l'article</label>
        <input type="text" name="title" id="title" required>

        <label for="content">Contenu de l'article</label>
        <textarea name="content" id="content" rows="4" required></textarea>

        <label for="issue_date">Date de publication</label>
        <input type="date" name="issue_date" id="issue_date" required>

        <label for="user_id">ID de l'utilisateur</label>
        <input type="number" name="user_id" id="user_id" required>

        <label for="url_img">URL de l'image</label>
        <input type="text" name="url_img" id="url_img" required>

        <button type="submit">Ajouter l'article</button>
    </form>

    <table>
        <?php foreach ($articles as $article) { ?>
        <tr>
            <td> <?php echo $article['title'] ?></td>
            <td><a href="edit_article.php?id=<?php echo $article['id_article']?>">Modifier</a></td>
            <td><a href="delete_article.php?id=<?php echo $article['id_article']?>">Supprimer</a></td>
        </tr>
        <?php } ?>
    </table>
</main>

<?php require_once 'layout/footer.php';