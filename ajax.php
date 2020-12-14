<?php

error_reporting(0);

if(isset($_POST['domain'])){
    $domain = $_POST['domain'];
    $token = "YOURTOKEN"; // Change This
    $ip = gethostbyname($domain);
    $auth = "https://reverse-ip.whoisxmlapi.com/api/v1?apiKey=".$token."&ip=".$ip;
    $json = file_get_contents($auth);
    if(!$json){
        echo 'failed data. please sure your domain is just like : domain.com';
    }else{
        $json_data = json_decode($json, true);
        $result = $json_data["result"];
        foreach($result as $res){
            echo '
'.$res["name"].'';
        }
    }
}else{
    echo 'try again';
}

?>