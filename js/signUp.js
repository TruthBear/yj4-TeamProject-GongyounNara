document.addEventListener("DOMContentLoaded", function() {
  const signUpForm = document.querySelector(".sign-up-form");
  const passwordInput = document.querySelector(".password");
  const passwordBox=document.querySelector(".password-box")
  const password2Input = document.querySelector(".password2");
  const password2Box = document.querySelector(".password-box2");
  const idInput = document.querySelector(".id");
  const idInputBox=document.querySelector(".id-box")
  const emailInput = document.querySelector(".email");
  const emailBox=document.querySelector(".email-box");
  const nameInput = document.querySelector(".name");
  const nameBox= document.querySelector(".name-box");
  const userIdError = document.querySelector(".userid-error");
  const userPwError = document.querySelector(".userpw-error");
  const unmatchPwError = document.querySelector(".unmatch-pw");
  const userMailError = document.querySelector(".usermail-error");
  const userNickError = document.querySelector(".usernick-error");
  const userIcon = document.querySelectorAll(" .user1");
  const pwIcon=document.querySelector(".pw1");
  const emailIcon=document.querySelector(".mail");
  const pwIcon2=document.querySelector(".pw2");
  const userIcon2=document.querySelectorAll(".user2");
  // const icon=document.querySelectorAll("i");
  // console.log(icon)

  signUpForm.addEventListener("submit", function(event) {
    event.preventDefault(); 
    if (passwordInput.value !== password2Input.value) {
      unmatchPwError.style.display = "block";
      password2Box.classList.add("error")
      password2Input.classList.add("error-color")
      pwIcon2.style.fill="red";
      password2Box.classList.remove("focus");

    } else {
      unmatchPwError.style.display = "none";
    }

    if (idInput.value === "") {
      userIdError.style.display = "block";
      idInputBox.classList.add("error");
      idInput.classList.add("error-color");
      userIcon.forEach(icon => {
        icon.style.stroke = "red";
      });
      idInputBox.classList.remove("focus");
    } else {
      userIdError.style.display = "none";
    }

    if (passwordInput.value === "") {
      userPwError.style.display = "block";
      passwordBox.classList.add("error");
      passwordInput.classList.add("error-color")
      pwIcon.style.fill="red";
      passwordBox.classList.remove("focus");
    } else {
      userPwError.style.display = "none";
    }

    if (password2Input.value === "") {
      password2Box.classList.add("error");
      password2Input.classList.add("error-color")
      pwIcon2.style.fill="red";
      password2Box.classList.remove("focus");
    }

    if (emailInput.value === "") {
      userMailError.style.display = "block";
      emailBox.classList.add("error");
      emailInput.classList.add("error-color")
      emailIcon.style.fill="red";
      emailBox.classList.remove("focus");
    } else {
      userMailError.style.display = "none";
    }

    if (nameInput.value === "") {
      userNickError.style.display = "block";
      nameBox.classList.add("error");
      nameInput.classList.add("error-color")
      userIcon2.forEach(icon => {
        icon.style.stroke = "red";
      });
      nameBox.classList.remove("focus")
    } else {
      userNickError.style.display = "none";
    }

  });

  //focus 
  //아이디
  idInput.addEventListener("click", function() {
    idInputBox.classList.add("focus");
  });
  
  //비밀번호
  passwordInput.addEventListener("click", function() {
    passwordBox.classList.add("focus");
  });
  //비밀번호 확인
  password2Input.addEventListener("click", function() {
    password2Box.classList.add("focus");
  });
  //이메일
  emailInput.addEventListener("click", function() {
    emailBox.classList.add("focus");
  });
  //닉네임
  nameInput.addEventListener("click", function() {
    nameBox.classList.add("focus");
  });
});
