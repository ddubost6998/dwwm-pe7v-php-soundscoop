<?php
require_once 'layout/header.php';
require_once 'classes/DbConnection.php';

$db = new DbConnection;

$stmt = $db->query("SELECT article.*, categorie.name_categorie
                    FROM article
                    INNER JOIN article_categorie ON article.id_article = article_categorie.article_id
                    INNER JOIN categorie ON article_categorie.categorie_id = categorie.id_categorie
                    ORDER BY article.issue_date DESC LIMIT 3");

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<main class="prose mx-auto my-32 dark:text-white dark:border-gray-600 dark:focus:border-purple-500">
    <h1 class="text-center dark:text-white">Bienvenue sur SoundScoop</h1>

    <?php foreach ($rows as $row) { ?>
        <div class="mt-16 mb-8 p-5 items-center bg-purple-300 rounded-lg shadow-lg hover:bg-purple-200 dark:border-gray-700 dark:bg-gray-800 dark:hover-bg-gray-700">
            <img class="rounded-lg mt-0 w-auto" src="<?php echo $row['url_img']; ?>" alt="Image de <?php echo $row['title']; ?>"/>
            <h5 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $row['title']; ?></h5>
            <p>Publier le : <?php echo date('d/m/Y', strtotime($row['issue_date']));?></p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                <?php
                $content = $row['content'];
                if (strlen($content) > 45) {
                    $content = substr($content, 0, 45) . '...';
                }
                echo $content;
                ?>
            </p>
            <p class="bg-purple-100 p-2 w-32"><?php echo $row['name_categorie'];?></p>
            <a href="article.php?id_article=<?php echo $row['id_article']; ?>" class="w-auto flex items-center px-3 py-2 text-center text-sm font-medium text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-400 dark:hover:bg-purple-600 dark:focus:ring-purple-800">En lire plus
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    <?php } ?>

    <div>
        <a href="articles.php" class="w-auto float-right flex items-center px-3 py-2 text-center text-sm font-medium text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-purple-400 dark:hover:bg-purple-600 dark:focus:ring-purple-800">
            <input type="button" value="Voir plus d'article">
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
        </a>
    </div>

    <div class="my-32">
        <h2 class="text-end text-4xl dark:text-white">À propos de nous</h2>
        
        <p class="text-end mt-3">Le site propose des actualités musicales à jour, couvrant divers genres et artistes, avec des articles informatifs sur les derniers événements musicaux. Mise en avant d'artistes émergents et établis, avec des biographies, des interviews, et des performances en direct. Les lecteurs peuvent explorer des articles spécifiques sur leurs genres musicaux préférés, du rock à l'électronique en passant par le jazz.</p>
        
        <a href="about.php" class="w-auto ml-96 float-right flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <input type="button" value="En apprendre plus">
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    <div class="mt-32">
        <h2 class="text-4xl font-bold dark:text-white">Nos photos</h2>

        <div class="my-3 grid grid-cols-2 gap-2">
            <div>
                <img class="h-100 max-w-80 rounded-lg" src="https://plus.unsplash.com/premium_photo-1663050933954-f46c2cdd2a08?auto=format&fit=crop&q=60&w=900&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8amF6enxlbnwwfHwwfHx8MA%3D%3D" alt="Photo de batterie">
            </div>
            <div>
                <img class="h-100 max-w-80 rounded-lg" src="https://images.pexels.com/photos/2426085/pexels-photo-2426085.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Photo d'un studio avec casque">
            </div>
            <div>
                <img class="h-100 max-w-80 rounded-lg" src="https://images.unsplash.com/photo-1546872006-43d8f499a0e1?auto=format&fit=crop&q=60&w=900&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGphenp8ZW58MHx8MHx8fDA%3D" alt="Photo d'un lecteur de vinyl">
            </div>
            <div>
                <img class="h-100 max-w-80 rounded-lg" src="https://images.unsplash.com/photo-1459749411175-04bf5292ceea?auto=format&fit=crop&q=60&w=900&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fG11c2ljfGVufDB8fDB8fHww" alt="Photo d'un concert">
            </div>
        </div>
    </div>

</main>

<?php require_once 'layout/footer.php';
