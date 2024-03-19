<?php 

class profile_model {
  public $uid;
  public $name;
  public $email;
  public $profile_picture;

  public function __construct($uid, $name, $email, $profile_picture) {
    $this->uid = $uid;
    $this->name = $name;
    $this->email = $email;
    $this->profile_picture = $profile_picture;
  }
}