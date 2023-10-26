<?php
require_once 'classes/Utils.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ddubost@stagiaire-humanbooster.com";

    $subject = "Nouveau message de contact depuis SoundScoop";

    $message_body = "Nom : $first_name $last_name\n";
    $message_body .= "Email : $email\n";
    $message_body .= "Message :\n$message";

    $headers = "From: $email";

    mail($to, $subject, $message_body, $headers);

    Utils::redirect("contact_success.php");
}

Utils::redirect("contact.php");
?>
