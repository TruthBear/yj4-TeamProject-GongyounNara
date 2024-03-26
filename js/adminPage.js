const membersInfoList=document.querySelectorAll(".members-info");
const modal=document.querySelector(".modal");
const closeBtn=document.querySelector(".close-btn");
const wrap=document.querySelector(".admin-page-wrap");

membersInfoList.forEach((membersInfo) => {
  membersInfo.addEventListener("click", function() {
    modal.style.display = "block";
    wrap.style.background = "#B5B5B5";
  });
});

closeBtn.addEventListener("click",function(){
  modal.style.display = "none";
  wrap.style.background = "none";
})