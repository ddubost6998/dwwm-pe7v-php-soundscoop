<?php
require_once __DIR__ . '/../classes/MenuItem.php';

$menuItems = [
    new MenuItem('index.php', 'Accueil'),
    new MenuItem('articles.php', 'Articles'),
    new MenuItem('categories.php', 'Catégories'),
    new MenuItem('about.php', 'À propos'),
    new MenuItem('contact.php', 'Contact')
];
?>

<nav class="fixed w-full bg-purple-50 z-20 top-0 left-0 shadow-lg dark:bg-purple-950">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="index.php" class="flex items-center">
            <img src="../img/logo_soundscoop.png" class="h-12 mr-2" alt="Logo de SoundScoop">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SoundScoop</span>
        </a>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 font-semibold md:p-0 md:flex-row md:space-x-8 md:mt-0 md:border-0 dark:bg-gray-800 dark:border-gray-700">
                <?php foreach ($menuItems as $item) { ?>
                <li>
                    <a href="<?php echo $item->getUrl(); ?>" class="block py-2 pl-3 pr-4 rounded md:p-0 <?php echo $item->getCssClasses(); ?>">
                    <?php echo $item->getLabel(); ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
