<?php
error_reporting(0);
if(isset($_POST['domain'])){
    $domain = $_POST['domain'];
    $token = "YOUR_TOKEN"; // Change This
    $ip = gethostbyname($domain);
    $auth = "https://reverse-ip.whoisxmlapi.com/api/v1?apiKey=".$token."&ip=".$ip;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $auth);
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    $result = $json["result"];
    if(!$result){
        $error_code = $json["code"];
        $messages = $json["messages"];
        echo 'ERROR : '.$messages.'('.$error_code.')';
    }else{
        foreach($result as $res){
            echo '
'.$res["name"].'';
        }
    }
}else{
    echo 'try again';
}
?>
