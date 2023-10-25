<?php
require_once 'layout/header.php';
require_once 'functions/db.php';

$pdo = getConnection();

$stmt = $pdo->query("SELECT * FROM article");

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}


?>

<main class="w-4/5 mx-auto mt-24">
    <h1 class="text-center">Bienvenue sur SoundScoop</h1>

    <div class="my-32">
        <a href="article1.php" class="mt-16 flex flex-col items-center bg-purple-300 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-80 md:h-auto md:rounded-none md:rounded-l-lg" src='https://www.pioneerdj.com/-/media/pioneerdj/images/products/controller/ddj-flx10/pc-cgi_angle.png' alt='Table de mixage Pionner DJ DDJ-FLX10'/>
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
            <img class="object-cover w-80 md:h-auto md:rounded-none md:rounded-l-lg" src='https://www.pioneerdj.com/-/media/pioneerdj/images/products/controller/ddj-flx10/pc-cgi_angle.png' alt='Table de mixage Pionner DJ DDJ-FLX10'/>
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

    <div class="my-32 w-1/2">
        <h2 class="text-4xl font-bold dark:text-white">À propos de nous</h2>
        
        <p class="text-end mt-3">Le site propose des actualités musicales à jour, couvrant divers genres et artistes, avec des articles informatifs sur les derniers événements musicaux. Mise en avant d'artistes émergents et établis, avec des biographies, des interviews, et des performances en direct. Les lecteurs peuvent explorer des articles spécifiques sur leurs genres musicaux préférés, du rock à l'électronique en passant par le jazz.</p>
        
        <div class="flex flex-end items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <input type="button" value="En savoir plus">
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </div>
    </div>

    <div class="my-32">
        <h2 class="text-4xl font-bold dark:text-white">Nos photos</h2>

        <div class="my-10 grid grid-cols-2 gap-3">
            <div>
                <img class="h-100 max-w-80 rounded-lg" src="https://plus.unsplash.com/premium_photo-1663050933954-f46c2cdd2a08?auto=format&fit=crop&q=60&w=900&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8amF6enxlbnwwfHwwfHx8MA%3D%3D" alt="Photo de batterie">
            </div>
            <div>
                <img class="h-100 max-w-80 rounded-lg" src="https://images.unsplash.com/photo-1499415479124-43c32433a620?auto=format&fit=crop&q=60&w=900&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fG11c2ljfGVufDB8fDB8fHww" alt="Photo d'un néon No music no life">
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
