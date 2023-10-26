<?php
require_once 'layout/header.php';
?>

<main class="prose mx-auto mt-24">
    <div class="mx-auto flex flex-col items-center justify-center">
        <div class="bg-purple-100 dark:bg-purple-900 w-full m-16 rounded-lg shadow-lg">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                <h1 class="text-center">Votre message à été envoyer !</h1>

                <a href="contact.php">
                <button type='button' class='bg-purple-600 hover:bg-purple-700 dark:bg-purple-200 dark:hover:bg-purple-500 dark:text-gray-900 w-full text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800'>Retour</button>
                </a>
            </div>
        </div>
    </div>

</main>

<?php require_once 'layout/footer.php';
