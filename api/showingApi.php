<?php

$apiKey = getenv("API_KEY");
$url = "http://www.kopis.or.kr/openApi/restful/pblprfr?service=".$apiKey."&stdate=20240301&eddate=20240312&cpage=1&rows=5&prfstate=02&newsql=Y";

// cURL 세션 초기화
$curl = curl_init();

// cURL 옵션 설정
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// API 호출
$response = curl_exec($curl);

// 에러 체크
if($response === false) {
    die(curl_error($curl));
}

// cURL 세션 종료
curl_close($curl);

// 받아온 데이터 출력 (예시)
// echo $response;

// XML을 JSON으로 변환 (JavaScript로 보낼 데이터 형식)
$xml = simplexml_load_string($response);
$json = json_encode($xml);

// JSON 출력
echo $json;
?>