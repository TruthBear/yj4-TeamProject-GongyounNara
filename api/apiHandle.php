<?php

$url;
$apiKey = "service=".getenv('API_KEY');
$query;

if(isset($_POST)){
  $data = file_get_contents("php://input");
  $json = json_decode($data, true);

  $url = $json['url'];
  $query = $json['query'];

  // curl 세션 초기화
  $curl = curl_init();
  
  // curl 옵션 설정
  curl_setopt($curl, CURLOPT_URL, $url.$apiKey.$query); // api주소 설정
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 문자열로 변환

  // api 호출
  $res = curl_exec($curl);

  // 에러 체크
  if($res === false) {
    die(curl_error($curl));
  }

  // curl 세선 종료
  curl_close($curl);

  // echo $res;

  $req = json_encode(simplexml_load_string($res));

  echo $req;

}

?>