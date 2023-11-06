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

    <?php foreach ($categories as $categorie) { ?>
    <div class="my-20">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $categorie['name_categorie']; ?></h2>
        <?php  ?>
    </div>
<?php } ?>
</main>

<?php require_once 'layout/footer.php';