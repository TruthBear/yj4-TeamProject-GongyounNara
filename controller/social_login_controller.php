<?php 

include 'config/const.php';
include 'models/token_model.php';
include 'models/profile_model.php';

class social_login_controller {
  private $token_model = null;
  private $profile_model = null;
  private $social_login_repository;
  private $code;
  private $state;
  function __construct($code, $state, $social_login_repository) {
    $this->code = $code;
    $this->state = $state;
    $this->social_login_repository = $social_login_repository;
  }

  public function get_tokent() {
    $client_id = "";
    $return_url = "";
    $login_url = "";
    $client_secret = "";
    $redirect_uri = urlencode(social_login::REDIRECT_URL);

    if($this->state == "google") {
      $client_id = GOOGLE_CLIENT_ID;
      $client_secret = GOOGLE_CLIENT_SECRET;
      $login_url = "https://oauth2.googleapis.com";
    }

    $return_url = "$login_url/token?grant_type=authorization_code&client_id=".$client_id."&redirect_uri=".$redirect_uri."&code=".$this->code;
    $return_url .= $client_secret != '' ? "&client_secret=".$client_secret : '';
    
    try {

      $curl = curl_init();

      $body_data = array(
        "code" => $this->code,
        "client_id" => $client_id,
        "client_secret" => $client_secret,
        "redirect_uri" => $redirect_uri,
        "grant_type" => "authorization_code",
      );

      $body = json_encode($body_data);

      curl_setopt($curl, CURLOPT_URL, $return_url); // api주소 설정
      curl_setopt($curl, CURLOPT_POST, true); // post로 전송
      curl_setopt($curl, CURLOPT_POSTFIELDS, $body); // body값 입력
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // 문자열로 변환

      $res = curl_exec($curl);

      $data = json_decode($res, true);

      $this->token_model = new token_model($data);

    } catch(Exception $e) {
      echo $e->getMessage();
    }
  
  }

  function get_profile() {
    $header = array("Authorization: Bearer ".$this->token_model->get_access_token());
    $profile_url = "";
    if($this->state == "google") {
      $profile_url = "https://www.googleapis.com/oauth2/v3/userinfo";
    }

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $profile_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $header); // header값 입력
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $res = curl_exec($curl);

    $data = json_decode($res, true);

    $uid = "";
    $name = "";
    $email = "";
    $profile_picture = "";

    if($this->state == "google") {
      $uid = $data['sub'];
      $name = $data['name'];
      $email = $data['email'];
      $profile_picture = $data['picture'];
    }
    
    $profile = new profile_model($uid, $name, $email, $profile_picture);
    $this->profile_model = $profile;
    return $profile;
  }

  function login() {
    $data = $this->social_login_repository->find_user_by_email($this->profile_model->email);
    // 유저가 존재하지 않으면 회원가입
    if($data == null) {
      $this->social_login_repository->signup($this->profile_model, $this->state);
    } else if($data['social_type'] != $this->state) {
      $social_value = array(
        "google"=>"구글",
        "naver"=>"네이버",
        "kakao"=>"카카오",
        "basic"=>"일반",
      );

      echo "
      <script>
        alert('가입된 이메일이 존재합니다. (".$social_value[$data['social_type']].")');
      </script>
        ";
        header("Location: index.php");
        exit();
    }

    session_start();
    $_SESSION['user_id'] = $this->profile_model->uid;
    $_SESSION['user_name'] = $this->profile_model->name;
    $_SESSION['user_profile'] = $this->profile_model->profile_picture;
    $_SESSION['access_token'] = $this->token_model->get_access_token();

    header("Location: index.php");
    exit();
  }
}