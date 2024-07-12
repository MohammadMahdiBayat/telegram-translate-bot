<?php
include ('Telegram.php');
$telegram = new Telegram('7152870487:AAGJ22NUIqUm-C3ORkSGRNocE-j0Ue0_ifM');
//$chat_id = $telegram->ChatID();
//$content = array('chat_id' => $chat_id, 'text' => 'Test');
//$telegram->sendMessage($content);


//$telegram = new Telegram('7152870487:AAF-2WlbMZoKuN5pqkjm1HydVZBtvKayoJA');
//
//$data = $telegram->getData();
//$chatID = $telegram->ChatID();
//$text = $telegram->Text();
//// set my command variable
//$myCommand = false;
//if ($text == "/start") {
//    $option = array(
//        array($telegram->buildInlineKeyboardButton("بزن بریم", "", "/home"))
//    );
//    $keyBuild = $telegram->buildInlineKeyBoard($option);
//    $content = array("chat_id" => $chatID, "reply_markup" => $keyBuild, "text" => "برای شروع آماده ای؟!");
//    $telegram->sendMessage($content);
//}
?>