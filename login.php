<?php
require_once 'layout/header.php';
?>

<main class="prose mx-auto mt-24">
    <div class="mx-auto flex flex-col items-center justify-center">
        <div class="bg-purple-100 dark:bg-purple-900 w-full m-16 rounded-lg shadow-lg">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                
                <h1 class="font-bold text-center leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">Connectez-vous</h1>
                
                <form action="login_success.php" method="POST" class="space-y-4 md:space-y-6">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nom@email.com" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre Mot de passe</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="••••••••" required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Se souvenir de moi</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Mot de passe oublié ?</a>
                    </div>
                    <button type="submit" class="bg-purple-600 hover:bg-purple-700 dark:bg-purple-200 dark:hover:bg-purple-500 dark:text-gray-900 w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">Se connecter</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">Vous n'êtes pas inscrit ?<a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Inscrivez-vous</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</main>

<?php require_once 'layout/footer.php';
