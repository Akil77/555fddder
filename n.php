<?php

echo "akilhdhehehehehhdh";
//define("TOKEN","1441735521:AAG1yYNpEOH_U7JdRT7Pj2_EI1WXlDuHUiE"); 
/*
function bot($method,$datas=[]){
    $iBadlz = http_build_query($datas);
        $url = "https://api.telegram.org/bot".TOKEN."/".$method."?$iBadlz";
        $iBadlz = file_get_contents($url);
        return json_decode($iBadlz);
}

*/
$id = "1078349914";
$token = "1441735521:AAG1yYNpEOH_U7JdRT7Pj2_EI1WXlDuHUiE";

mkdir("Akil");


define('API_KEY',$token);
function bot($method,$str=[]){
        $http_build_query = http_build_query($str);
        $api = "https://api.telegram.org/bot".API_KEY."/".$method."?$http_build_query";
        $http_build_query = file_get_contents($api);
        return json_decode($http_build_query);
}



function jk($uig,$lan){



$hh = strtolower("$uig");
//$sop = "btc"‎;



$jj = strtoupper($uig."usdt");
$sop = $jj;
$f = file_get_contents("https://www.tradingview.com/ideas/".$hh."usdt/");
file_put_contents("n.txt",$f);

$t1x = explode('idea-image-placeholder.svg" alt="'.$sop.':',$f)[1];
$t1 = explode('" title="',$t1x)[0];
$time1x = explode('data-timestamp="',$t1x)[1];
$time1 = explode('></span>',$time1x)[0];
$mas = explode('/">',$t1x)[1];
$mas = explode('</p>',$mas)[0];

$img = explode('idea-image-placeholder.svg" alt="'.$sop.':',$f)[0];

$img = explode('data-src="',$f)[2];
$img = explode('"',$img)[0]; //مؤقت 

$tre = time()-intval($time1);

$tre = intval($tre/3600);

//echo $tre;
if($lan == "ar"){
$cp = "#$sop  *bot by akil \n$t1 \n\n $mas \nتم النشر منذ $tre ساعات\n مجرد تحليل من موقع (لا اطلب منك شراء شي)* \n\n 𝗕𝐨𝐭 𝗗𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 : [𝙰𝚔𝚒𝚕](t.me/akil828) 📈";
}else{
$cp = "#$sop  bot by akil \n*$t1* \n\n $mas \nPosted $tre hours ago\n *Just an analysis from  T.v (I don't ask you to buy anything)* \n\n 𝗕𝐨𝐭 𝗗𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 : [𝙰𝚔𝚒𝚕](t.me/akil828) 📈";
}




/*
bot('sendPhoto',[
	'chat_id'=>"1078349914",
	'photo'=>$img,
	'caption'=>$cp,

	]);*/
if($time1 == ""){
$fff = "false";
}else{
$fff = "true";
}
	
return array(
"st"=>$fff,
"url"=> $img,
"title"=>$tre,
"time"=>$time1,
"masg"=>$mas,
"cp"=>$cp);
}

//print_r(jk("bTc","ar"));



$update = json_decode(file_get_contents("php://input"));
if(isset($update)){					
$message = isset($update->message)? $update->message : null;
$chatId = isset($update->callback_query) ? $update->callback_query->message->chat->id : $message->chat->id;
$mids = isset($message->message_id) ? $message->message_id : null;	
$text = isset($message->text)? $message->text : null;	
$from_id    = isset($message->from->id)? $message->from->id : null;
$tc = isset($update->callback_query->message->chat->type) ? $update->callback_query->message->chat->type : $update->message->chat->type;
$na  = isset($update->callback_query->from->first_name) ? $update->callback_query->from->first_name : null ;
//$userr = $json_info->result->username;
//$bot_id = $json_info->result->id;
//$from_id    = $message->from->id;
//$chatId2 = $update->callback_query->message->chat->id;
//$from2 = $update->callback_query->message->from->id;
$mid = isset($update->callback_query->message->message_id) ? $update->callback_query->message->message_id : null ;
$data = isset($update->callback_query->data) ? $update->callback_query->data : null;		  
$username2 = isset($update->callback_query->from->username)? "@".$update->callback_query->from->username : "لايوجد";              	                             	              					
$accc = explode("\n",file_get_contents("acc.txt"));
$acn = count($accc);
//$from2 = $update->callback_query->message->from->id;	        
$mids = isset($message->message_id) ? $message->message_id : null ;	
  	                             	       	                            	
echo $data."\n";

//echo $tc;


if($tc == "private"){


$m1 = "*مرحباء بك في بوت التحليلات الفنية* 🪙

*قم بارسال رمز العمله فقط* 💲
𝙀𝙓𝘼𝙈𝙋𝙇𝙀 ✒️ : 𝚎𝚝𝚑


📕 : *ملاحظة* ->
*البوت يقوم بجلب التحليلات من موقع ترندينجفيو*
 (*وانا لا اطلب منك اتبع اي تحليل او توصيه منها* ) 🌐


𝗕𝐨𝐭 𝗗𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 : [𝙰𝚔𝚒𝚕](t.me/akil828) 📈";
$m1e = "𝙒𝙀𝙇𝘾𝙊𝙈𝙀 𝙏𝙊 𝙏𝙃𝙀 𝙏𝙀𝘾𝙃𝙉𝙄𝘾𝘼𝙇 𝘼𝙉𝘼𝙇𝙔𝙎𝙄𝙎 𝘽𝙊𝙏 🪙

*Just send the coin symbol* 💲
𝙀𝙓𝘼𝙈𝙋𝙇𝙀 ✒️ : 𝚎𝚝𝚑


📕 : 𝐍𝐎𝐓𝐄 ->
*The bot fetches analytics from 𝚃𝚛𝚊𝚍𝚒𝚗𝚐𝚅𝚒𝚎𝚠*
 (*I am not asking you to follow any analysis or recommendation from her [and I'm bad in English]* ) 🌐


𝗕𝐨𝐭 𝗗𝐞𝐯𝐞𝐥𝐨𝐩𝐞𝐫 : [𝙰𝚔𝚒𝚕](t.me/akil828) 📈";


if($message){
if(!in_array($chatId,$accc)){
  bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>"*قم باختيار الغة* 📑
𝙘𝙝𝙤𝙤𝙨𝙚 𝙮𝙤𝙪𝙧 𝙡𝙖𝙣𝙜𝙪𝙖𝙜𝙚 📄",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$mids,
  'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[['text'=>'𝗲𝗻𝗴𝗹𝗶𝘀𝗵 🇬🇧','callback_data'=>'en'],['text'=> 'العربيه* 🇾🇪','callback_data'=>'ar']]]])]);
}
}
  

if($text == "/start" and in_array($chatId,$accc)){
if($chatId == $id){


  bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>"*الاعدادت  🎮*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$mids,
  'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[['text'=>'ايقاف البوت','callback_data'=>'en'],['text'=> 'اذاعه','callback_data'=>'ar']],
[['text'=>'الاشتراك الاجباري','callback_data'=>'en'],['text'=> 'الحقوق','callback_data'=>'ar']],
[['text'=>'الاحصائيات','callback_data'=>'en'],['text'=> 'الحظر','callback_data'=>'ar']]]])]);


}



if(file_get_contents("Akil/$chatId/lan") == "en"){
$ml = $m1e;
}else{
$ml = $m1;
}
bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>$ml,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,]);

}



if($data == "ar" or $data == "en"){



bot('deletemessage',[
'chat_id'=>$chatId,
	'message_id'=>$mid
]);


$iii = "*تم دخول شخص جديد الى البوت الخاص بك* 👾
            -----------------------
• معلومات العضو الجديد .

• الاسم : $na
• المعرف : $username2
• الايدي : $chatId
• الغة : $data
            -----------------------
• عدد الاعضاء الكلي : $acn ";

if($data == "ar"){
if(!in_array($chatId,$accc)){
mkdir("Akil/$chatId");
file_put_contents('acc.txt',"$chatId\n",FILE_APPEND);
file_put_contents("Akil/$chatId/n",time());
echo $na;
bot('sendMessage',[
'chat_id'=>$id,
'text'=>$iii,

]);
}



file_put_contents("Akil/$chatId/lan","ar");
bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>$m1,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,]);


}
elseif($data == "en"){

if(!in_array($chatId,$accc)){
mkdir("Akil/$chatId");
file_put_contents('acc.txt',"$chatId\n",FILE_APPEND);
file_put_contents("Akil/$chatId/n",time());
bot('sendMessage',[
'chat_id'=>$id,
'text'=>$iii,

]);
}
file_put_contents("Akil/$chatId/lan","en");
bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>$m1e,
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,]);
}
}



if($text !="/start" and $text !="/settings" and $text != "" and in_array($chatId,$accc)){
echo $text;
$bn = intval(file_get_contents("Akil/$chatId/n"));
if($bn < time()){
if(file_get_contents("Akil/$chatId/lan") == "en"){
$ll = "en";
$yy = "Wrong coin symbol ⛔";
}else{
$ll = "ar";
$yy = "رمز عملة غلط⛔";
}
if($text !="/start" ){
file_put_contents("Akil/$chatId/n",time()+100);
$ll = jk($text,$ll);
if($ll["st"] == "true"){
bot('sendPhoto',[
'chat_id'=>$chatId,
'photo'=>$ll['url'],
'caption'=>$ll['cp'],
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$mids,
'disable_web_page_preview' =>true,]);
}else{
bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>$yy,
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$mids,
'disable_web_page_preview' =>true,]);
}
}




}else{
$bnl = $bn - time();

$x1 = "*انتظر $bnl ثانيه قبل ان تحاول مره اخرا*";
$x1e = "*Wait for $bnl s before you trying again*";

if(file_get_contents("Akil/$chatId/lan") == "en"){
$m1x = $x1e;
}else{
$m1x = $x1;
}

bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>$m1x,
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$mids,
'disable_web_page_preview' =>true,]);
}
}


if($text == "/settings"){
bot('sendMessage',[
'chat_id'=>$chatId,
'text'=>"*قم باختيار الغة* 📑
𝙘𝙝𝙤𝙤𝙨𝙚 𝙮𝙤𝙪𝙧 𝙡𝙖𝙣𝙜𝙪𝙖𝙜𝙚 📄",
'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$mids,
  'reply_markup'=>json_encode([
   'inline_keyboard'=>[
[['text'=>'𝗲𝗻𝗴𝗹𝗶𝘀𝗵 🇬🇧','callback_data'=>'en'],['text'=> 'العربيه* 🇾🇪','callback_data'=>'ar']]]])]);

}

}

}



//echo $img;
