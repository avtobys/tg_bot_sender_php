<?php

const BOT_TOKEN = '1111111111:AAE_8ez_R0d4zW56CYfgdfgdfgtgM0';
const CHAT_ID = '-777777777';

// /join @you_bot_name_bot
// https://api.telegram.org/bot1111111111:AAE_8ez_R0d4zW56CYfgdfgdfgtgM0/getUpdates


$tg_url = 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage';
$tg_text = 'sample text';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $tg_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'chat_id=' . CHAT_ID . '&parse_mode=html&text=' . $tg_text,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
