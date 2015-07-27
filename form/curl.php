 <?php

if(isset($_GET['eventname'])) 
 {
 $url = 'https://api.parse.com/1/push';  
 $appId = 'cxPKr9sJoY3Yu54MdkAagohwNslq9wacSj4PKv4I';  
 $restKey = 'ZJPcDup0Nw7baFD19AovcFt82gIpOcI4GZh0LISO';  
 $headers = array(  
   "Content-Type: application/json",  
   "X-Parse-Application-Id: " . $appId,  
   "X-Parse-REST-API-Key: " . $restKey  
 );  
 $target_device="android";
 
 $push_payload = json_encode(array(
                    "where" => array(
                            "deviceType" => $target_device,
                    ),
                    "data" => array(
                            "alert" => $_GET['eventname'],
                    )
            )); 
 $rest = curl_init();  
 curl_setopt($rest,CURLOPT_URL,$url);  
 curl_setopt($rest,CURLOPT_POST,1);  
 curl_setopt($rest,CURLOPT_POSTFIELDS, $push_payload );  
 curl_setopt($rest,CURLOPT_HTTPHEADER,$headers);  
 curl_setopt($rest,CURLOPT_SSL_VERIFYPEER, false);  
 curl_setopt($rest,CURLOPT_RETURNTRANSFER, true);  
 curl_exec($rest);  
 curl_close($rest);
 header('Location: ../index.php'); 
 }
 else
  header('Location: ../index.php');
 ?> 