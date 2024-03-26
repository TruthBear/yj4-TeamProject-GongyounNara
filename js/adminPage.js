import { sqlController } from "../sql/sqlController.js";

const memberTable = document.getElementsByClassName('member')[0];
const memberInfo = document.getElementsByClassName('detail-info');


const paintModal = (data) => {
  for(let i=0;i<memberInfo.length;i++){
    memberInfo[i].innerText = data[0][i];
  }
}

const forModal = async (typeData, uid) => {
  const data = await sqlController({
    type: typeData,
    sql: `select id, email, name, member_role, created_at from member where uid=${uid}`
  })

  paintModal(data)
}

// 모바일용 회원 테이블 조회
const forMobile = await sqlController({
  type: "look",
  sql: 'select uid, id from member order by uid desc',
});

forMobile.forEach(item => {
  const memberInfo = document.createElement('div');
  memberInfo.classList.add('members-info');
  
  const mNum = document.createElement('div');
  mNum.classList.add('m-num');
  mNum.innerText = item.uid;

  const mId = document.createElement('div');
  mId.classList.add('m-id');
  mId.innerText = item.id;

  memberInfo.appendChild(mNum);
  memberInfo.appendChild(mId);
  memberTable.appendChild(memberInfo);
});

const membersInfoList = document.querySelectorAll(".members-info");
console.log(membersInfoList);
const modal=document.querySelector(".modal");
const closeBtn=document.querySelector(".close-btn");
const wrap=document.querySelector(".admin-page-wrap");

membersInfoList.forEach((membersInfo) => {
  const uid = membersInfo.firstElementChild.innerText;
  // membersInfo.addEventListener("click", function() {
  // });
  membersInfo.addEventListener("click", ()=> {
    forModal('look', uid);
    modal.style.display = "block";
    wrap.style.background = "#B5B5B5";
  });
});

closeBtn.addEventListener("click",function(){
  modal.style.display = "none";
  wrap.style.background = "none";
  
  // 모달창을 닫을때 기존에 출력되었던 데이터들을 삭제 
  for(const item of memberInfo) {
    item.innerText = "";
  }
})
