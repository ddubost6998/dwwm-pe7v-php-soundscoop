<?php
require_once 'classes/Utils.php';
require_once 'layout/header.php';

if (!isset($_SESSION['userInfos'])) {
    $_SESSION['loginErrorMessage'] = "Vous devez être identifié pour accéder à cette page";
    Utils::redirect('login.php');
}
?>

<main class="prose mx-auto">
    <h1>Admin</h1>
</main>

<?php require_once 'layout/footer.php';