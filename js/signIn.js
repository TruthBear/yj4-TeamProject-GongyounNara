document.addEventListener("DOMContentLoaded", function() {
  const signInForm = document.querySelector(".sign-in-form");
  const idInput = document.querySelector(".id");
  const passwordInput = document.querySelector(".password");
  const idError = document.querySelector(".id-error");
  const pwError = document.querySelector(".pw-error");

  signInForm.addEventListener("submit", function(event) {
    event.preventDefault();

    if(idInput.value===""){
      idError.style.display="block";
    } else if(idInput.value !== ""&&passwordInput.value===""){
      idError.style.display="none";
      pwError.style.display="block";
    } else {
      idError.style.display="none";
      pwError.style.display="none";
    }
  });
});
  