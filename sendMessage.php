<?php
/*--------------------------------
Isi TOKEN dan Chat ID dibawah ini: 
--------------------------------*/
$telegram_id = '0123456789';
$secret_token = "bot:token";

/* -----------------------------------------------------
Simple PHP script for Sending Telegram Bot Message
~ Iky | https://www.wadagizig.com
------------------------------------------------------ */

function sendMessage($telegram_id, $message_text, $secret_token) {

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}

/*----------------------
only basic POST method :
-----------------------*/
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST ['pesan']; 
$message_text = "```
Nama  : $nama

Email : $email

Pesan : 

$pesan```";


sendMessage($telegram_id, $message_text, $secret_token);
Header('Location: ./')
?>