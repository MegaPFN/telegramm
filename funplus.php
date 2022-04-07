<?php
/*
in The name of god
by: Amirhossein rezaii
tel: @developer_001
*/
// fun and for all
// ping
if($textmassage=="ربات" or $textmassage=="انلاینی" or $textmassage=="ping" or $textmassage=="رباتم" or $textmassage=="گپ گرامم" or $textmassage=="پینگ"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
   Telegram('sendmessage',[
  'chat_id'=>$chat_id,
	'text'=>"لامصـب کـم بـزن آنلاینـم😌💋",
		'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);
   } 
}
else
{
Telegram('sendmessage',[
  'chat_id'=>$chat_id,
	'text'=>"لامصـب کـم بـزن آنلاینـم😌💋",
		'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
        ]);	
}
}
// gif
elseif ( strpos($textmassage , '/gif ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace("/gif ","",$textmassage);
$ran = rand(1,3);
if ($ran == "1") {
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Telegram('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "2") {
	$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=flash-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Telegram('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
if ($ran == "3") {
		$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=alien-glow-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Telegram('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
   }  
}
}
else
{
$text = str_replace("/gif ","",$textmassage);
$info_user = file_get_contents("http://www.flamingtext.com/net-fu/image_output.cgi?_comBuyRedirect=false&script=memories-anim-logo&text=$text&symbol_tagname=popular&fontsize=70&fontname=futura_poster&fontname_tagname=cool&textBorder=15&growSize=0&antialias=on&hinting=on&justify=2&letterSpacing=0&lineSpacing=0&textSlant=0&textVerticalSlant=0&textAngle=0&textOutline=off&textOutline=false&textOutlineSize=2&textColor=%230000CC&angle=0&blueFlame=on&blueFlame=false&framerate=75&frames=5&pframes=5&oframes=4&distance=2&transparent=off&transparent=false&extAnim=gif&animLoop=on&animLoop=false&defaultFrameRate=75&doScale=off&scaleWidth=240&scaleHeight=120&&_=1469943010141");
$getchat = json_decode($info_user, true);
$gif = $getchat["src"];
 Telegram('senddocument',[
    'chat_id'=>$chat_id,
    'document'=>"$gif",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
     ]);
}
}
// logo 
elseif ( strpos($textmassage , '/logo ') !== false or strpos($textmassage , 'لوگو بساز ') !== false) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace(['/logo ','لوگو بساز '],'',$textmassage);
 Telegram('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=15&font=Steamy&fsize=90&bg=logo8",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{
	$text = str_replace(['/logo ','لوگو بساز '],'',$textmassage);
 Telegram('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=$text&y=15&font=Steamy&fsize=90&bg=logo8",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
// voice
elseif ( strpos($textmassage ,'/voice ') !== false  ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 Telegram('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=$trtext",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   } 
}
else
{	
$text = str_replace("/voice ","",$textmassage);
$trtext = urlencode($text);
 Telegram('sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>"http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text=$trtext",
	'caption'=>"@$usernamebot",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// sticker
elseif($textmassage=="/photo" or $textmassage=="photo" or $textmassage=="تبدیل به عکس"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$file = $update->message->reply_to_message->sticker->file_id;
      $get = Telegram('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photo.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
Telegram('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/photo.png"),
  'caption'=>"@$usernamebot",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/photo.png");
 }
}
else
{
$file = $update->message->reply_to_message->sticker->file_id;
      $get = Telegram('getfile',['file_id'=>$file]);
      	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/photo.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
Telegram('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/photo.png"),
  'caption'=>"@$usernamebot",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/photo.png");
}
}
// photo
elseif($textmassage=="/sticker" or $textmassage=="sticker" or $textmassage=="تبدیل به استیکر"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = Telegram('getfile',['file_id'=>$file]);
	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/sticker.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
Telegram('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/sticker.webp"),
   'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/sticker.webp");
 }
}
else
{
	$photo = $update->message->reply_to_message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = Telegram('getfile',['file_id'=>$file]);
	  $getchat = json_decode($get, true);
      $patch = $getchat["result"]["file_path"];
    file_put_contents("data/sticker.webp",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
Telegram('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/sticker.webp"),
   'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unlink("data/sticker.webp");
}
}
// azan
elseif($textmassage == "/azan" or $textmassage == "azan" or $textmassage == "اذان"){
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
if ($tc == 'group' | $tc == 'supergroup'){  
$text = file_get_contents("https://prayer.aviny.com/api/prayertimes/1");
$getchat = json_decode($text, true);
$city = $getchat["CityName"];
$sobeh = $getchat["Imsaak"];
$toloe = $getchat["Sunrise"];  
$zoher = $getchat["Noon"]; 
$qurob = $getchat["Sunset"]; 
$maghreb = $getchat["Maghreb"]; 
$nime = $getchat["Midnight"]; 
$rmroz = $getchat["Today"];
 Telegram('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🕌 اوقات شرعی تهران :
	
🏬 نام شهر : $city
🏙 اذان صبح : $sobeh
🌇 طلوع افتاب : $toloe
☀️ اذان ظهر : $zoher
🌃 غروب افتاب : $qurob
🌄 اذان مغرب : $maghreb
🌌 نیمه شب : $nime

📅 تاریخ امروز : $rmroz",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }   
}
}
else
{
$text = file_get_contents("https://prayer.aviny.com/api/prayertimes/1");
$getchat = json_decode($text, true);
$city = $getchat["CityName"];
$sobeh = $getchat["Imsaak"];
$toloe = $getchat["Sunrise"];  
$zoher = $getchat["Noon"]; 
$qurob = $getchat["Sunset"]; 
$maghreb = $getchat["Maghreb"]; 
$nime = $getchat["Midnight"]; 
$rmroz = $getchat["Today"];
 Telegram('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"🕌 اوقات شرعی تهران :
	
🏬 نام شهر : $city
🏙 اذان صبح : $sobeh
🌇 طلوع افتاب : $toloe
☀️ اذان ظهر : $zoher
🌃 غروب افتاب : $qurob
🌄 اذان مغرب : $maghreb
🌌 نیمه شب : $nime

📅 تاریخ امروز : $rmroz",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
// weather
elseif ( strpos($textmassage , '/weather ') !== false  or strpos($textmassage , 'اب و هوا ') !== false ) {
if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
$code = str_replace(['/weather ','اب و هوا '],'',$textmassage);
$text = file_get_contents("https://phpnebot.torbohost.com/api/weather/index.php?city=$code");
$getchat = json_decode($text, true);
$error = $getchat["ok"];
if ($error == 1) {
$city = $getchat["result"]["city"];
$sobeh = $getchat["result"]["in"];
$toloe = $getchat["result"]["c"];
$zoher = $getchat["result"]["sta"];
$qurob = $getchat["result"]["velo"];
$maghreb = $getchat["result"]["rain"];
$nime = $getchat["result"]["awe"];
$rmroz = $getchat["result"]["bish"];
$rmroz2 = $getchat["result"]["kmin"];
$rmroz3 = "null";
$rmroz4 = "null";
$rmroz5 =  "null";
$rmroz6 =  "null";
$rmroz7 =  "null";
$rmroz8 = "null";
 Telegram('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☁️وضعیت اب و هوا شهر : $code
	
📶 $sobeh

➖➖➖➖➖

☀️ امروز :

🌦 دما : $toloe
🌥 وضعیت هوا : $zoher
💨 سرعت باد : $qurob
☔️ میزان باران 24 ساعت گذشته :   $maghreb
🌬 حهت باد : $nime
🔥 حداکثر میزان دما : $rmroz
❄️ حداقل میزان دما : $rmroz2

➖➖➖➖

☀️ فردا :

❄️ وضعیت هوا : $rmroz3
🔥 حداکثر میزان دما : $rmroz4
❄️ حداقل میزان دما : $rmroz5

➖➖➖

☀️ پس فردا : 

❄️ وضعیت هوا : $rmroz6
🔥 حداکثر میزان دما : $rmroz7
❄️ حداقل میزان دما : $rmroz8
",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
   }  
else
{
		 Telegram('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"⚠️ خطا نام شهر را فقط به فارسی وارد کنید",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
else
{
$code = str_replace(['/weather ','اب و هوا '],'',$textmassage);
$text = file_get_contents("https://phpnebot.torbohost.com/api/weather/index.php?city=$code");
$getchat = json_decode($text, true);
$error = $getchat["ok"];
$city = $getchat["result"]["city"];
$sobeh = $getchat["result"]["in"];
$toloe = $getchat["result"]["c"];
$zoher = $getchat["result"]["sta"];
$qurob = $getchat["result"]["velo"];
$maghreb = $getchat["result"]["rain"];
$nime = $getchat["result"]["awe"];
$rmroz = $getchat["result"]["bish"];
$rmroz2 = $getchat["result"]["kmin"];
$rmroz3 = "null";
$rmroz4 = "null";
$rmroz5 =  "null";
$rmroz6 =  "null";
$rmroz7 =  "null";
$rmroz8 = "null";
 Telegram('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☁️وضعیت اب و هوا شهر : $code
	
📶 $sobeh

➖➖➖➖➖

☀️ امروز :

🌦 دما : $toloe
🌥 وضعیت هوا : $zoher
💨 سرعت باد : $qurob
☔️ میزان باران 24 ساعت گذشته :   $maghreb
🌬 حهت باد : $nime
🔥 حداکثر میزان دما : $rmroz
❄️ حداقل میزان دما : $rmroz2

➖➖➖➖

☀️ فردا :

❄️ وضعیت هوا : $rmroz3
🔥 حداکثر میزان دما : $rmroz4
❄️ حداقل میزان دما : $rmroz5

➖➖➖

☀️ پس فردا : 

❄️ وضعیت هوا : $rmroz6
🔥 حداکثر میزان دما : $rmroz7
❄️ حداقل میزان دما : $rmroz8
",
	'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
}
}
?>