<?php
include("base.php");
$scan= scandir("msgs");
foreach($scan as $msg){
    unlink("msgs/$msg");
    $ex = explode("|",$msg);
    $msg = $ex[0];
    $chat = $ex[1];
    Telegram('deletemessage',[
                'chat_id'=>$chat,
            'message_id'=>$msg
            ]);
}