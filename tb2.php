 <?php 
$message = file_get_contents("php://input");
$arrayMessage = json_decode($message, true);
$token = "488160773:AAGaJteXSdE6jrVBpojW2PvRtt73Vn9fY9M";
$chat_id = $arrayMessage['message']['from']['id'];
$command = $arrayMessage['message']['text'];
 
if ($command == '/start')
    {
    $text = "سلام، به ربات ما خوش آمدید";
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . $text;
    file_get_contents($url);
    }
  else
    {
    $text = "لطفا نام خود را وارد کنید";
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chat_id . "&text=" . $text;
    file_get_contents($url);
    }
