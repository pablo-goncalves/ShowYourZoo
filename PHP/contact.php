<?php
$naam = $_POST['name'];
$achternaam = $_POST['surname'];
$adres = $_POST['adres'];
$tekst = $_POST['tekst'];
$email = $_POST['email'];


$to = $email;
$subject = 'contact';
$message = '
<html>
<body>

<h2>Bedankt '. $naam . ',</h2>
<p>Bedankt voor het schrijven voor een bericht, wij gaan dit zo snel mogelijk verwerken!</p>
<p>U krijgt zo spoedig mogelijk een mail met antwoord terug!</p>
<p>Groetjes het Henry Doorly team!</p>
<p>(Dit is een automatisch verzonde mail.)</p>

</body>
</html>
'; 

    $headers = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    $headers .= 'From: Contact Henry Doorly Zoo<contactZoo@87242.ict-lab.nl>' . "\r\n".
    
    'Reply-To: contactZoo@87242.ict-lab.nl' .  "\r\n" .
    
    'X-Mailer: PHP/' . phpversion();
    

mail($to, $subject, $message, $headers);

?>