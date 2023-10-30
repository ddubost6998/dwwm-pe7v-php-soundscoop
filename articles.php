<?php
require_once 'layout/header.php';
require_once 'functions/db.php';

try {
    $db = getConnection();
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

$query = "SELECT * FROM article";
$result = $db->query($query);

if ($result) {
    ?>
    <main class="prose mx-auto my-32 dark:text-white dark:border-gray-600 dark:focus:border-blue-500">
        <h1 class="text-center dark:text-white dark:border-gray-600 dark:focus:border-blue-500">Tous nos articles</h1>

        <ul>
            <?php
            while ($row = $result->fetch()) {
                ?>
                <li><?php echo $row['title']; ?></li>
                <p><?php echo $row['content']; ?></p>
                <?php
            }
            ?>
        </ul>
    </main>
    <?php
}
echo "Erreur lors de l'exécution de la requête : " . $db->errorInfo()[2];

$db = null;

require_once 'layout/footer.php';
