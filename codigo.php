<?php
 
$headers = getallheaders();
 
$username = "";
 
if($headers["Nightbot-User"] !== null)
{
    $username = $headers["Nightbot-User"];
}
else
{
    $username = isset($_GET["user"]) ? $_GET["user"] : null;
}
 
$usernames = ["nt8zo6h9u5","u6rizj2r5d","w5kbicz5u5","dbq03x7vqx","pz1gpodo74","6lucze5c9l","49zez62xam","sknxw7cijk","b7xyw9zu9c","hwf82yne5x","zcao3tmgce","x5s2qdguyn","vqsmc7eyaa","soz646tpew","getpby2rxg","6n8y84p3h2","znr7fv7x9y","eepru7yma9","a4w0s9vm24","w5iq43591y","5jgqugh6ud","sh515wsdlb","sanuy3uf7n","6rgxvtn3ck","0evcexrpyh","ibxpxupnyz","nkvu3bno63","yuiri38m2t","qblu9tsgxb","krfj6qhcte","ah55zk057s","6vm8wj4ztf","u325xld77l","0696nnr39j","kjpr6azhg5","juo7inzpnt","tmpy4z04kq","svmml9hmg0","yfn5u7tf8d","i6nr6h3q82","rrapc5flch","n9bqfxg1or","pjugbxr19x","ittw1ts70n","607zjubl1b","ps9hdy0o8w","u33yyss8li","frdumuke3h","180hsubvuv","4lsc986ojc","drdgkho34r","s0xa2l0c1j","y4c7ydch33","kz4kxzznzd","pn4sh26mtj","oqa466dmm7","krj8r9lk9m","tqwdkbjs1p","8l1s4ocy31","20hiy54j44","ynv8w4eeiw","jjkahwzlba","nwhmf449x4","mqfwm2fb3l","rrqsdt923o","m3kmtsh0rh","p3xrf5ub90","3vdtdp7p1z","0jpw4fk1vn","k7bro1527v","81o8g1wqkn","qllx9h12qa","ted6jv458v","xwdsiddtcy","g45l1csryi","6vo4oc01n9","jdph86gh9r","a9ud35ospi","sosc560gsn","flqvqp0ajp","w6malmk0np","8bh16e13rz","9vk15zymhw","bd0pdrfczj","j348e5di8d","wjc1dxnfqj","lr8utoosv3","0cov4zf9o2","f548y1ecmj","q8d175vn4j","slb73dhezv","wbanppuuag","uf1mu1zy9w","sjku5n219t","29l045dzgt","4goiykr3ki","vja55cm34g","e2drlek4mt","yiuiwcublj","7ikqv11moi"];
 
function getSize($username, $debug = false)
{
    if($username === null)
        die("no get username");
 
    $hash = md5($username);
 
    $regex = "/[0-9]{1,2}/";
 
    $matches = null;
    preg_match_all($regex, $hash, $matches);
 
    $size = null;
    for ($i=0; $i < count($matches[0]); $i++) { 
        if($matches[0][$i] >= 1 && $matches[0][$i] <= 12 && $size === null)
        {
            $size = $matches[0][$i];
        }
    }
 
    $size = (int)$size;
 
    if($debug)
    {
        $size = $username . " : " . $hash . " : " . $size;
    }
 
    return $size;
}
 
if(@$_GET["stress"])
{
    for ($u=0; $u < count($usernames); $u++) { 
        echo "<br>" . getSize($usernames[$u], true) . "<br>";
    }
}
 
echo getSize($username);
?>
