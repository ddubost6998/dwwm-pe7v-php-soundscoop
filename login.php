<?php
require_once 'layout/header.php';
?>

<main class="prose mx-auto mt-24">
    <div class="mx-auto flex flex-col items-center justify-center">
        <div class="bg-purple-100 dark:bg-purple-900 w-full m-16 rounded-lg shadow-lg">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                
                <h1 class="font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Connectez-vous</h1>
                
                <form action="admin.php" method="POST" class="space-y-4 md:space-y-6">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nom@email.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Mot de passe</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                    </div>
                    <button type="submit" class="bg-purple-600 hover:bg-purple-700 dark:bg-purple-200 dark:hover:bg-purple-500 dark:text-gray-900 w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">Se connecter</button>
                </form>
            </div>
        </div>
    </div>

</main>

<?php require_once 'layout/footer.php';
