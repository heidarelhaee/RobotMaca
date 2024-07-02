<?php
namespace RobotMaca;
class RobotMaca{
    function sendMessageText($keyrobot,$user,$text){
        $url = 'https://Maca.avaw.ir/api/sendmessagetext.php';
        $data = array(
            'key' => $keyrobot, 
            'user' => $user,
            'text' => $text
        );
        $postData = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === FALSE){
            return 'error :' . curl_error($ch);
        } else {
            return "Submitted successfully...";
        }
        curl_close($ch);
    }
    function sendMessageImage($keyrobot,$user,$text,$imagebyte){
        $url = 'https://Maca.avaw.ir/api/sendmessageImage.php';
        $data = array(
            'key' => $keyrobot, 
            'user' => $user,
            'text' => $text,
            "imagebyte"=>$imagebyte
        );
        $postData = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === FALSE){
            return 'error :' . curl_error($ch);
        } else {
            return "Submitted successfully...";
        }
        curl_close($ch);
    }
    function sendMessageReplayText($keyrobot,$user,$text,$id){
        $url = 'https://Maca.avaw.ir/api/sendmessagereplaytext.php';
        $data = array(
            'key' => $keyrobot, 
            'user' => $user,
            'text' => $text,
            "id" => $id
        );
        $postData = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === FALSE){
            return 'error :' . curl_error($ch);
        } else {
            return "Submitted successfully...";
        }
        curl_close($ch);
    }
    function sendMessageReplayImage($keyrobot,$user,$text,$id,$imagebyte){
        $url = 'https://Maca.avaw.ir/api/sendmessagereplayimage.php';
        $data = array(
            'key' => $keyrobot, 
            'user' => $user,
            'text' => $text,
            "id" => $id,
            "imagebyte" => $imagebyte
        );
        $postData = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === FALSE){
            return 'error :' . curl_error($ch);
        } else {
            return "Submitted successfully...";
        }
        curl_close($ch);
    }
    function getInformation($user){
        $url = 'https://Maca.avaw.ir/api/getinformation.php';
        $data = array(
            'user' => $user
        );
        $postData = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === FALSE){
            return 'error :' . curl_error($ch);
        } else {
            return $response;
        }
        curl_close($ch);
    }
    function findMessageById($keyrobot,$user,$id){
        $url = 'https://Maca.avaw.ir/api/findmessagebyid.php';
        $data = array(
            'key' => $keyrobot, 
            'user' => $user,
            'id' => $id
        );
        $postData = http_build_query($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        if($response === FALSE){
            return 'error :' . curl_error($ch);
        } else {
            return $response;
        }
        curl_close($ch);
    }
}
?>
