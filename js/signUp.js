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
  signUpForm.addEventListener("submit", function(event) {
    event.preventDefault(); 
    if (passwordInput.value !== password2Input.value) {
      unmatchPwError.style.display = "block";
      password2Box.classList.add("error")
      password2Input.classList.add("error-color")
    } else {
      unmatchPwError.style.display = "none";
    }

    if (idInput.value === "") {
      userIdError.style.display = "block";
      idInputBox.classList.add("error");
      idInput.classList.add("error-color")
    } else {
      userIdError.style.display = "none";
    }

    if (passwordInput.value === "") {
      userPwError.style.display = "block";
      passwordBox.classList.add("error");
      passwordInput.classList.add("error-color")
    } else {
      userPwError.style.display = "none";
    }

    if (password2Input.value === "") {
      password2Box.classList.add("error");
      password2Input.classList.add("error-color")
    }

    if (emailInput.value === "") {
      userMailError.style.display = "block";
      emailBox.classList.add("error");
      emailInput.classList.add("error-color")
    } else {
      userMailError.style.display = "none";
    }

    if (nameInput.value === "") {
      userNickError.style.display = "block";
      nameBox.classList.add("error");
      nameInput.classList.add("error-color")
    } else {
      userNickError.style.display = "none";
    }

  });
});

password2Input.addEventListener("input", function() {
  if (passwordInput.value === password2Input.value) {
      unmatchPwError.style.display = "none";
      password2Box.classList.remove("error");
      password2Input.classList.remove("error-color");
  }
});
