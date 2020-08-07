<?php
//made with💛 and🚬 by @Laganty
//dont ever delete this

$token = $_GET['token'];
$id_sudo = $_GET['sudo'];
$type = $_GET['type'];
$n=15; 

function getName($n) { 

    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789'; 

    $randomString = ''; 

  

    for ($i = 0; $i < $n; $i++) { 

        $index = rand(0, strlen($characters) - 1); 

        $randomString .= $characters[$index]; 

    } 

  

    return $randomString; 
} 
$getit = file_get_contents("srsc/".$type.".txt");
$okj = $getit;
$okj = str_replace('[%token%]',$token,$okj); 
$okj = str_replace('[%sudo%]',$id_sudo,$okj);
$rnd = getName($n);
$url = "https://api.telegram.org/bot".$token."/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/bot/lbots/".$rnd.".php";
$host = json_decode(file_get_contents($url),true);

//made with💛 and🚬 by @Laganty
//dont ever delete this

//run api project
if($token){
file_put_contents("lbots/".$rnd.".php","<?php\n ".$okj."\n;?>");
header("Access-Control-Allow-Origin: *");
header("content-type: application/json");
header( "refresh:9;url=".$url );
echo json_encode(['ok'=>true,'by'=>@laganty,'result'=>['token'=>$token,'url'=>$url,'type'=>$type,'sudo'=>$id_sudo]], 128 | 256);
} else {

echo json_encode(['ok'=>false,'info'=>add_info], 128 | 256);

}
//made with💛 and🚬 by @Laganty
//dont ever delete this

?>
