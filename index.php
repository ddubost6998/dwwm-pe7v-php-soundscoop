<?php
require_once 'layout/header.php';
require_once 'functions/db.php';

$pdo = getConnection();

var_dump($pdo);

$stmt = $pdo->query("SELECT * FROM article");

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}


?>

<main class="w-4/5 mx-auto mt-24">
    <h1 class="text-center">Bienvenue sur SoundScoop</h1>

    <div class="my-32 bg-gray-100">
        <a href="article1.php" class="mt-16 flex flex-col items-center bg-purple-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full md:h-auto md:rounded-none md:rounded-l-lg" src='https://www.pioneerdj.com/-/media/pioneerdj/images/products/controller/ddj-flx10/pc-cgi_angle.png' alt='Table de mixage Pionner DJ DDJ-FLX10'/>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nouveau controleur DJ</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Après plusieurs années avec le Pionner DDJ-1000 sortie en 2014. Pioneer DJ met à jour son contrôleur DJ ...</p>
            </div>
            <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                En lire plus
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </div>
        </a>

        <a href="article1.php" class="mt-16 flex flex-col items-center bg-purple-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full md:h-auto md:rounded-none md:rounded-l-lg" src='https://www.pioneerdj.com/-/media/pioneerdj/images/products/controller/ddj-flx10/pc-cgi_angle.png' alt='Table de mixage Pionner DJ DDJ-FLX10'/>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nouveau controleur DJ</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Après plusieurs années avec le Pionner DDJ-1000 sortie en 2014. Pioneer DJ met à jour son contrôleur DJ ...</p>
            </div>
            <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                En lire plus
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </div>
        </a>
    </div>

    <div class="my-32">
        <h2 class="text-end">À propos de nous</h2>
        
        <p class="text-end mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam soluta tempore, nesciunt aliquid quae aliquam adipisci. Accusantium aliquam libero aliquid atque, quidem rerum eaque assumenda dolorum ad impedit natus quod!</p>
        
        <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            En savoir plus
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </div>
    </div>

    <div class="my-32 grid grid-cols-2 gap-2">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
            </div>
        </div>

</main>

<?php require_once 'layout/footer.php';
