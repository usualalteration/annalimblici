<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $messaggio = htmlspecialchars($_POST['messaggio']);

    $to = "usualalteration@gmail.com"; // Sostituisci con il tuo indirizzo email
    $subject = "Nuova richiesta da $nome";
    $body = "Nome: $nome\nEmail: $email\nTelefono: $telefono\nMessaggio:\n$messaggio";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Richiesta inviata con successo!";
    } else {
        echo "Errore nell'invio della richiesta.";
    }
} else {
    echo "Richiesta non valida.";
}
?>
