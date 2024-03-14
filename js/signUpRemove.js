// 아이디
document.addEventListener("DOMContentLoaded", function() {
  const idInput = document.querySelector(".id");
  const userIdError = document.querySelector(".userid-error");
  const idInputBox=document.querySelector(".id-box");

  idInput.addEventListener("input", function() {
    if (idInput.value !== "") {
      userIdError.style.display = "none";
      idInputBox.classList.remove("error");
      idInput.classList.remove("error-color");
    }
  });
});

// 비밀번호
document.addEventListener("DOMContentLoaded", function() {
  const passwordInput = document.querySelector(".password");
  const userPwError = document.querySelector(".userpw-error");
  const passwordBox=document.querySelector(".password-box");
  
  passwordInput.addEventListener("input", function() {
    if (passwordInput.value !== "") {
      userPwError.style.display = "none";
      passwordBox.classList.remove("error");
      passwordInput.classList.remove("error-color");
    }
  });
});

// 비밀번호 확인
document.addEventListener("DOMContentLoaded", function() {
  const passwordInput = document.querySelector(".password");
  const password2Input = document.querySelector(".password2");
  const unmatchPwError = document.querySelector(".unmatch-pw");
  const password2Box=document.querySelector(".password-box2");
  
  password2Input.addEventListener("input", function() {
    if (password2Input.value !== "" && passwordInput.value == password2Input.value) {
      unmatchPwError.style.display = "none";
      password2Box.classList.remove("error");
      password2Input.classList.remove("error-color");
    }
  });
});

// 이메일
document.addEventListener("DOMContentLoaded", function() {
  const emailInput = document.querySelector(".email");
  const emailBox=document.querySelector(".email-box");
  const userMailError = document.querySelector(".usermail-error");

  emailInput.addEventListener("input", function() {
    if (emailInput.value !== "") {
      userMailError.style.display = "none";
      emailBox.classList.remove("error");
      emailInput.classList.remove("error-color");
      
    }
  });
});

// 닉네임
document.addEventListener("DOMContentLoaded", function() {
  const nameInput = document.querySelector(".name");
  const userNickError = document.querySelector(".usernick-error");
  const nameBox= document.querySelector(".name-box");

  nameInput.addEventListener("input", function() {
    if (nameInput.value !== "") {
      userNickError.style.display = "none";
      nameBox.classList.remove("error");
      nameInput.classList.remove("error-color");
    }
  });
});