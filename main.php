<?php
/*
اصل الملف ايراني تعريبي
@armof
https://t.me/php_aba
*/
ob_start();
error_reporting(0);
define('API_KEY', "5421872947:AAEFVyjO1vvyVV9gjA5w7CoeyWt8QrQbiGM");// توکن
$channel = '@MainAxl';// معرف قناتك
$admin =1418046050; ///---- ایديك
function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
function SendMessage($chat_id, $text, $mode = null, $reply=null, $keyboard = null) {
    bot('SendMessage', ['chat_id' => $chat_id, 'text' => $text, 'parse_mode' => $mode, 'reply_to_message_id' => $reply, 'reply_markup' => $keyboard]);
}
function SendPhoto($chatid, $photo, $caption = null, $keyboard = null) {
    bot('SendPhoto', ['chat_id' => $chatid, 'photo' => $photo, 'caption' => $caption, 'parse_mode' => 'HTML',	'reply_markup' => $keyboard]);
}
function EditMsg1($chatid, $msgid, $text, $keyboard = null) {
    bot('EditMessageText', ['chat_id' => $chatid, 'message_id' => $msgid, 'text' => $text, 'reply_markup' => $keyboard]);
}
function EditMsg($chat_id, $text, $mode, $msg_id, $keyboard = null) {
    bot('EditMessageText', ['chat_id' => $chat_id, 'message_id' => $msg_id, 'text' => $text, 'parse_mode' => $mode, 'reply_markup' => $keyboard]);
}
function Forward($chat_id, $from_id, $massege_id) {
    bot('ForwardMessage', ['chat_id' => $chat_id, 'from_chat_id' => $from_id, 'message_id' => $massege_id]);
}
function objectToArrays($object) {
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
    if (is_object($object)) {
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}
// [ Variables section ] . [ end functions , start Variables ]
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$name = $message->from->first_name;
$lastname = $message->from->last_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$dataa = explode('|', $data); 
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$messageid = $update->callback_query->message->message_id;
$photo = $update->message->photo;
$now = date('h:i:s');
$time = file_get_contents("https://r2f.ir/web/time.php");
$date = file_get_contents("https://r2f.ir/web/tit.php");
$today = file_get_contents("https://r2f.ir/web/dataf.php");

if (!is_dir("data")) {
    mkdir("data");
}

$user = json_decode(file_get_contents("data/user.json"), true);
$alluser = $user['users'];
$userinfo = json_decode(file_get_contents("data/data.json"), true);
$ban = $userinfo[$from_id]['ban'];
$step = $userinfo[$from_id]['step'];
// بسم الله
//  by : [@php_aba ]
// channel  https://t.me/armof
// channel  https://t.me/php_aba
$get = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getChatMember?chat_id=$channel&user_id=$from_id"), true);
$rank = $get['result']['status'];
// بسم الله
//  by : [@php_aba ]
// channel  https://t.me/armof
// channel  https://t.me/php_aba
// [ end Force/Rank channel ] . [ start keyboards ]
$start = json_encode(['resize_keyboard' => true, 'inline_keyboard' => [[['text' => "دریافت ارز کشوری", 'callback_data' => "Country"]], [['text' => " راهنمای استفاده", 'callback_data' => "help"]], [['text' => "درباره ما", 'callback_data' => "us"]], ]]);
$back1 = json_encode(['resize_keyboard' => true, 'inline_keyboard' => [[['text' => "بازگشت", 'callback_data' => "back1"]], ]]);
$panel = json_encode(['keyboard' => [[['text' => "آمار"]], [['text' => "فروارد همگانی"], ['text' => "ارسال همگانی"]], [['text' => "حذف مسدود کاربر"], ['text' => "مسدود کاربر"]], ], 'resize_keyboard' => true]);
$arz=json_decode(file_get_contents("https://r2f.ir/web/arz.php"),true);
$yoro=$arz['0']['price'];
$emarat=$arz['1']['price'];
$swead=$arz['2']['price'];
$norway=$arz['3']['price'];
$iraq=$arz['4']['price'];
$swit=$arz['5']['price'];
$armanestan=$arz['6']['price'];
$gorgea=$arz['7']['price'];
$pakestan=$arz['8']['price'];
$soudi=$arz['9']['price'];
$russia=$arz['10']['price'];
$india=$arz['11']['price'];
$kwait=$arz['12']['price'];
$astulia=$arz['13']['price'];
$oman=$arz['14']['price'];
$qatar=$arz['15']['price'];
$kanada=$arz['16']['price'];
$tailand=$arz['17']['price'];
$turkye=$arz['18']['price'];
$england=$arz['19']['price'];
$hong=$arz['20']['price'];
$azarbayjan=$arz['21']['price'];
$malezy=$arz['22']['price'];
$danmark=$arz['23']['price'];
$newzland=$arz['24']['price'];
$china=$arz['25']['price'];
$japan=$arz['26']['price'];
$bahrin=$arz['27']['price'];
$souria=$arz['28']['price'];
$dolar=$arz['29']['price'];
$talaa=json_decode(file_get_contents("https://r2f.ir/web/tala.php"),true);
$tala=$talaa['4']['price'];
$nogre=$talaa['5']['price'];
$emami=$talaa['0']['price'];
$nim=$talaa['1']['price'];
$rob=$talaa['2']['price'];
$geram=$talaa['3']['price'];
$bahar=$talaa['6']['price'];
if (!in_array($from_id, $user["users"])) {
    $user["users"][] = "$from_id";
    $user = json_encode($user, true);
    file_put_contents("data/user.json", $user);
    $userinfo[$from_id]['step'] = "none";
    $userinfo[$from_id]['ban'] = "false";
    file_put_contents("data/data.json", json_encode($userinfo));
}
if ($ban == 'true') {
    exit();
}
if ($rank == 'left') {
    SendMessage($chat_id, " \n● $channel\n■ اشترك في القناة ثم ارسل مجددا /start ", null, $message_id, json_encode(['KeyboardRemove' => [], 'remove_keyboard' => true]));
}
if ($text == "/start" and $rank != 'left') {
    $userinfo[$from_id]['step'] = "none";
    file_put_contents("data/data.json", json_encode($userinfo));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
بالاسم العزيز 😃مرحبا
 📶 مرحبًا بك في الروبوت ، السعر الفوري للذهب ، العملة ، إلخ.
 این مع هذا الروبوت ، يمكنك معرفة أحدث أسعار الدولار والعملات المختلفة وكل شيء آخر.
 للبدء ، ما عليك سوى استخدام الأزرار أدناه 
 ",
'parse_mode'=>"html",
'reply_markup'=>json_encode(['keyboard'=>[
    [['text'=>"💶 سعر العملة"]],
    [['text'=>"💶 سعر الذهب"],['text'=>"💶سعر العمله"]],
],
    'resize_keyboard'=>true,
    ])
]);
}
elseif($text=="💶 سعر العملة"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💵 اسعار العملات في دول العالم:

🇪🇺 یورو : `$yoro`
------
🇺🇸 دولار: `$dolar`
------
🇧🇭 دینار بحريني: `$egypt`
------
🇦🇪درهم اماراتي : `$emarat`
------
🇸🇪 کراون سويدي: `$swead`
------
🇳🇴 کراون نورويجي: `$norway`
------
🇮🇶 دینار عراقي : `$iraq`
------
🇨🇭فرانک سويسري : `$swit`
------
🇦🇲 درام ارمنستان : `$armanestan`
------
🇬🇪ليره كرجستانيه: `$gorgea`
------
🇵🇰 روپیه پاکستانيه : `$pakestan`
------
🇷🇺 روبل روسیه : `$russia`
------
🇮🇳 روپیه هنديه : `$india`
------
🇰🇼 دینار کویتي: `$kwait`
------
🇦🇺 دولار استرالي : `$astulia`
------
🇴🇲 ریال عماني: `$oman`
------
🇶🇦 ریال قطري: `$qatar`
------
🇨🇦 دولار كندي : `$kanada`
------
🇹🇭بات تایلند : `$tailand`
------
🇹🇷 لیره تركيه: `$turkye`
------
🇬🇧 باوند انكليزي : `$england`
------
🇭🇰 دولار هونغ كونغ: `$hong`
------
🇦🇿 منات اذربایجان : `$azarbayjan`
------
🇲🇾رینگیت ماليزي : `$malezy`
------
🇩🇰 کراون دنماركي : `$danmark`
------
🇳🇿 دولار نيوزلندي : `$newzland`
------
🇨🇳 یوان صيني: `$china`
------
🇯🇵 ين الياباني : `$japan`
------
🇧🇭 دینار بحريني: `$bahrin`
------
🇸🇾 ليره سوريه : `$souria`
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"🌟اشتراک ",'switch_inline_query'=>""]]],
    ])
    ]);
}
///-------------------@php_aba-----------------------------
elseif($text=="💶 سعر الذهب"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🏵سعر الذهب والفضه بلدولار:

🥇اسعار الذهب
: `$tala`
------
🥈اسعار الفضه:
`$nogre`
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"🌟اشتراک ",'switch_inline_query'=>""]]],
    ])
    ]);
}
///-------------------@php_aba-----------------------------
elseif($text=="💶سعر العمله"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🏅سعر العمله بلتومان الايراني :

💰العمله اليونانيه: `$geram`
------
💰العمله الرابعه: `$rob`
------
💰اسم العملهه : `$nim`
------
💰سکه بهار آزادی :  `$bahar`
------
💰سکه امامی : `$emami`
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"🌟اشتراک ",'switch_inline_query'=>""]]],
    ])
    ]);
}
///-------------------@php_aba----------------------------
elseif($inline==""){
    bot('answerInlineQuery', [
        'inline_query_id' => $up['inline_query']['id'],
        'results' => json_encode([[
            'type' => 'article',
            'id' => base64_encode(rand(5,555)),
            'thumb_url'=>"https://r2f.ir/web/BgvOnAb4.jpg",
            'title' => "ارسال سعر العملة",
            'description'=>"ارسال سعر الصرف",
            'input_message_content'=>[
            'parse_mode' => 'html', 
            'message_text' => "$currency"],
'reply_markup'=>[
'inline_keyboard'=>[[["text"=>"🔹تسجيل الدخول"]],[["text"=>"🌟اشتراك",'switch_inline_query'=>""]]]]
         ],[
            'type' => 'article',
            'id' => base64_encode(rand(5,555)),
           'thumb_url'=>"https://r2f.ir/web/BgvOnAb4.jpg",
            'title' => "ارسال سعر الذهب",
            'description'=>"ارسال سعر الذهب الى هذه الدردشه",
            'input_message_content'=>[
            'parse_mode' => 'html', 
            'message_text' => "$gold"],
'reply_markup'=>[
'inline_keyboard'=>[[["text"=>"🔹تسجيل الدخول",'url'=>"https://t.me/Source_Home"]],[["text"=>"🌟اشتراك",'switch_inline_query'=>""]]]]
        ],[
            'type' => 'article',
            'id' => base64_encode(rand(5,555)),
            'thumb_url'=>"https://r2f.ir/web/BgvOnAb4.jpg",
            'title' => "ارسال سعر العمله",
            'description'=>"ارسال سعر العمله الى هذه الدردشه",
            'input_message_content'=>[
            'parse_mode' => 'html', 
            'message_text' => "$coin"],
'reply_markup'=>[
'inline_keyboard'=>[[["text"=>"🔹تسجيل الدخول",'url'=>"https://t.me/Source_Home"]],[["text"=>"🌟اشتراك",'switch_inline_query'=>""]]]]]
        ])
        ]);
}
