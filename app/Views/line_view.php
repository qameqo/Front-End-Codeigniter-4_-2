<?php
// define('LINE_API',"https://notify-api.line.me/api/notify");
// $_GET['type'];
// $_GET['brand'];
// $_GET['model'];
// $_GET['service'];
// $_GET['phone'];
// $type = $_GET['type'];
// $brand = $_GET['brand'];
// $model = $_GET['model'];
// $service = $_GET['service'];
// $phone = $_GET['phone'];
// $token = ""; //ใส่Token ที่copy เอาไว้
// $str = "\n".'ประเภทรถ : '.$type."\n". "ยี่ห้อ : ".$brand. "\n"."รุ่น : ".$model."\n"."ประเภทบริการ : ".$service."\n"."เบอร์ติดต่อ : ".$phone; //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
 
// $res = notify_message($str,$token);
// print_r($res);
// function notify_message($message,$token){
//  $queryData = array('message' => $message);
//  $queryData = http_build_query($queryData,'','&');
//  $headerOptions = array( 
//          'http'=>array(
//             'method'=>'POST',
//             'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
//                       ."Authorization: Bearer ".$token."\r\n"
//                       ."Content-Length: ".strlen($queryData)."\r\n",
//             'content' => $queryData
//          ),
//  );
//  $context = stream_context_create($headerOptions);
//  $result = file_get_contents(LINE_API,FALSE,$context);
//  $res = json_decode($result);
//  echo '<script>window.location = "Home"</script>';
 
// }

//https://havespirit.blogspot.com/2017/02/line-notify-php.html
//https://medium.com/@nattaponsirikamonnet/%E0%B8%A1%E0%B8%B2%E0%B8%A5%E0%B8%AD%E0%B8%87-line-notify-%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B9%80%E0%B8%96%E0%B8%AD%E0%B8%B0-%E0%B8%9E%E0%B8%B7%E0%B9%89%E0%B8%99%E0%B8%90%E0%B8%B2%E0%B8%99-65a7fc83d97f
?>

