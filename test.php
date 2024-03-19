<?php
session_start(); // 세션 시작

if (array_key_exists('user_id', $_SESSION)) {
    echo "세션 변수 'user_id'가 존재합니다.";
} else {
    echo "세션 변수 'user_id'가 존재하지 않습니다.";
}

if (array_key_exists('user_name', $_SESSION)) {
  echo "세션 변수 'user_name'가 존재합니다.";
} else {
  echo "세션 변수 'user_name'가 존재하지 않습니다.";
}

if (array_key_exists('user_profile', $_SESSION)) {
  echo "세션 변수 'user_profile'가 존재합니다.";
} else {
  echo "세션 변수 'user_profile'가 존재하지 않습니다.";
}

if (array_key_exists('user_role', $_SESSION)) {
  echo "세션 변수 'user_role'가 존재합니다.";
} else {
  echo "세션 변수 'user_role'가 존재하지 않습니다.";
}

if (array_key_exists('access_token', $_SESSION)) {
  echo "세션 변수 'access_token'가 존재합니다.";
} else {
  echo "세션 변수 'access_token'가 존재하지 않습니다.";
}